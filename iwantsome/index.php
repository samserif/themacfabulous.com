<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../includes/css/normalize.css">
        <link rel="stylesheet" href="../includes/css/main.css">
        <link rel="stylesheet" href="../includes/css/style.css">
        <script src="../includes/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="wantsome">
        <div class="wrapper">
            <header>
                <a class="logo" href="/">
                    <img src="../includes/img/macicon.png" alt="mac fabulous icon"/>
                </a>
                <nav>
                    <div class="innerheader">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/macarons">The Macarons</a></li>
                            <li id="navSpacer"></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/iwantsome">I Want Some</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
                <div class="mac_iwantsome">
                    <div class="mac_order">
                        <h1> Place an Order</h1>
                        <p> Ordering from MacFabulous is simple! Use this form to tell us more about your order - what flavor(s) and quantity you'd like to order - and we'll get back to you with a custom quote within 1 business day!</p>
                    </div>
                    <div class="mac_order_form">
                        <form action="mailer.php" method="post">
                            <div>
                              <label class="description" for="element_1"> </label>
                                <span>
                                    <input required id="cf_firstname" name="cf_firstname" type="text" maxlength="255" size="14" placeholder="First"/>
                                </span>
                                <span>
                                    <input required id="cf_lastname" name="cf_lastname" type="text" maxlength="255" size="24" placeholder="Last"/>
                                </span> 
                            </div>
                            <div>
                                <label class="description" for="element_2">
                                    <input required type="email" pattern="[^ @]*@[^ @]*" id="cf_email" name="cf_email" class="element text medium" placeholder="Email" maxlength="255" size="24"value=""/> 
                                </label>
                            </div> 
                            <div>
                                <div>
                                    <label class="choice" for="element_6_1">
                                        <input required name="cf_radio" id="cf_radio1_1" class="element radio" type="radio" value="1" />
                                        I am serving <input disabled name="cf_serving_people" type="text" maxlength="5" size="4"/> people.
                                    </label>
                                </div>
                                <div>
                                    <label class="choice" for="element_6_2">
                                        <input required name="cf_radio" id="cf_radio1_2" class="element radio" type="radio" value="2" />
                                        I would like to order <input disabled name="cf_macarons" value="" type="text" maxlength="5" size="4"/> macarons.
                                    </label>
                                </div>
                            </div>  
                            <label class="description" for="element_7">Pick your flavor(s):
                                <div>
                                    <input required id="cf_radio2_1" name="cf_iwant" class="element radio" type="radio" value="1" />
                                    <label class="choice" for="element_7_1">I know what I want.</label>
                                    <textarea disabled id="element_5" name="cf_whatiwant" class="element textarea medium"></textarea>
                                </div>
                                <div>
                                    <input required id="cf_radio2_2" name="cf_iwant" class="element radio" type="radio" value="2" />
                                    <label class="choice" for="element_7_2">I need flavor inspiration.</label>
                                </div>
                            </label> 

                            <label class="description" for="element_5">Additional Comments
                                <textarea id="element_5" name="cf_comment" value=" " class="element textarea medium"></textarea> 
                            </label>
                            <div class="align">
                                <input id="saveForm" class="button1" type="submit" name="submit" value="Submit" />
                            </div>
                        </form> 
                    </div>
            </div>
        <div class="push"></div>
        </div>

        <footer>
             <ul class="socialwrapper">
                <a href="https://www.facebook.com/themacfabulous"><li id="facebookIcon">Facebook</li></a>
                <a href="https://twitter.com/TheMacFabulous"><li id="twitterIcon">Twitter</li></a>
                <a href="mailto:info@macfabulous.com"><li id="emailIcon">Email</li></a>
            </ul>
            <p> Copyright Mac Fabulous 2013</p>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/includes/js/plugins.js"></script>
        <script src="/includes/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
