<?php
/*
Hi Sam!

This is the php backend for your form.  The purpose of this form is to get the form values, save them to variables,
ensure that they are safe, format them, and mail them.  Here we go!

BEFORE we begin with the PHP mailer, a word about name="" and value="".  Every field must be named (we'll use this name).
I find it easiest to have a shared naming convention that makes sense, which is why we're going with cf_(element).  CF
stands for contact form.  Things that are part of the same element get the same name.  So three radio inputs will all have
the same name.  With something like a radio button you'll pass something as a value as well, like value="1".  This
will allow us to figure out which radio was selected when the submit button was pressed.  Other inputs, like text fields,
do not get a value="".  The value will be determined by user input.

The action="" attribute on the form element must point to your backend.  In this case, we point it here.  We're using a
passing method called POST.  There are two passing methods associated with PHP.  They are POST and GET.  GET passes
information in the url (you've probably seen this before in a url like wwww.example.com?user=tom&pet=dog).  POST passes
information in something called an ASSOSIATIVE ARRAY, or an array of variables.  Arrays have keys and values.  A key is an
identifier that tells the array what you're looking for, and a value is what is stored there.  You access the value in an
array by using the key, in this format $arrayname['key'] = value.  These keys work the same way as variables do.  Arrays
can store numbers, strings, boolians, other arrays, or objects.

When a form is submitted via POST, the $_POST array is populated with the values of the inputs in your form.  The key
is the name used in the HTML.  So if you submit <input name="input1"/> via POST, you can access that value here via the
$_POST array like so:

$_POST['input1'];

Love,
Tom
*/    

/*
We're saving our field values to variables in this step.  You'll notice that we're running our values through the filter_var()
function.  This is a very important step called "Sanitizing".  The reason we do this is to secure our server and our site.
One of the most common ways that hackers be hackin' is through something called "injection".  Instead of putting a name into
our nice form, they may inject JavaScript, PHP, or SQL commands.  This can cause the site to dump the database, spit out passwords,
or be taken down.  filter_var() ensures this can't happen by stripping out tags like <script>, and <?php.  filter_var() takes two
arguments. The first is a variable to sanitize, and the second is the specific filter we're using.  In this case, we're sanitizing
strings, so we use FILTER_SANITIZE_STRING.
*/

$field_firstname = filter_var( $_POST['cf_firstname'], FILTER_SANITIZE_STRING);
$field_lastname = filter_var( $_POST['cf_lastname'], FILTER_SANITIZE_STRING);
$field_email = filter_var( $_POST['cf_email'], FILTER_SANITIZE_EMAIL);
$field_message = filter_var( $_POST['cf_comment'], FILTER_SANITIZE_STRING);
if ( array_key_exists('cf_whatiwant', $_POST) ) {
	$field_whatiwant = filter_var( $_POST['cf_whatiwant'], FILTER_SANITIZE_STRING);
}
if ( array_key_exists('cf_serving_people', $_POST) ) {
$field_servingpeople = filter_var( $_POST['cf_serving_people'], FILTER_SANITIZE_STRING);
}
if ( array_key_exists('cf_macarons', $_POST) ) {
	$field_macarons = filter_var( $_POST['cf_macarons'], FILTER_SANITIZE_STRING);
}
$field_radio = $_POST['cf_radio'];
$field_iwant = $_POST['cf_iwant'];

/*
Assigns the specified email to $mail_to, to be used in the mail() function.  This is the place where our mailer will be mailing to.
*/

$mail_to = 'info@themacfabulous.com';

/*
Assigns the following to the $subject variable, to be used in the mail() function
*/

$subject = 'A new macaron order from your website!';

/*
Now it's time to use the information we collected to form our message.  We'll use an if statement to decide.
*/

if ($field_radio == 1) {
	$howmany = "I'm serving ".$field_servingpeople." people and I could use some help deciding how much I need.";
} else {
	$howmany = "I'd like to buy ".$field_macarons." please!";
}

if ($field_iwant == 1) {
	$flavors = "I'd like to order these flavors:\n".$field_whatiwant;
} else {
	$flavors = "I don't exactly know what I want, and I was hoping that you could help me decide.";
}

/*
Creates a variable, $body_message, that contains name, email address, and message entered on the site
to be used in the mail() function.
*/

$body_message = 'From: '.$field_lastname.', '.$field_firstname."\n";
$body_message .= 'E-mail: '.$field_email."\n\n";

$body_message .= 'How Much: '.$howmany."\n";
$body_message .= 'Flavors: '.$flavors."\n";
$body_message .= 'Comments: '.$field_message;


/*Creates the variable $headers, which tells us who this is from and to where we will reply*/
$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

/*Send the email using all of the previous info, store a boolian (true or false) value depending on whether the email was sent successfully*/
$mail_status = mail($mail_to, $subject, $body_message, $headers);

/*Displays a message depending on the value of $mail_status*/
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert("Thank you for ordering from Mac Fabulous!  We'll be in contact shortly.");
		window.location = '/';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Uh oh!  It seems like something may have gone wrong.  Did you enter all of your information correctly?  Try emailing us directly.  Sorry about that!');
		window.location = '/';
	</script>
<?php
}
?>