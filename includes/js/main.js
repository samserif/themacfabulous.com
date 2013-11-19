$(document).ready(function(){
	if ( $('body').hasClass('wantsome') ) {

		$('#cf_radio1_1').change(function(){
			if ( $(this).is(':checked') ) {
				$('input[name="cf_serving_people"]').attr('disabled', false).focus();
				$('input[name="cf_macarons"]').attr('disabled', true);
			}
		});

		$('#cf_radio1_2').change(function(){
			if ( $(this).is(':checked') ) {
				$('input[name="cf_serving_people"]').attr('disabled', true);
				$('input[name="cf_macarons"]').attr('disabled', false).focus();
			}
		});

		$('#cf_radio2_1').change(function(){
			if ( $(this).is(':checked') ) {
				$('textarea[name="cf_whatiwant"]').attr('disabled', false).focus();
			}
		});

		$('#cf_radio2_2').change(function(){
			if ( $(this).is(':checked') ) {
				$('textarea[name="cf_whatiwant"]').attr('disabled', true);
			}
		});

	}
});