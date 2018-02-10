$('#contactThankYou').hide(0);
$('#contactError').hide(0);


// $('.contactformbyclass').on('submit', function(event) {
// 	event.preventDefault();
// 	$('#contactThankYou').hide(0);
// 	$('#contactError').hide(0);


// 	$.post('contact_submit.php', $(this).serialize(), function(data, textStatus, xhr) {
// 	if (data == 1) {
// 			$('#contactThankYou').text('Thank you for getting in touch!').fadeIn();

// 			if( window.location.href.indexOf('paid') !== -1  ) {

// 				window.google_trackConversion({
// 				    google_conversion_id: 871513331,
// 					google_conversion_language : "en",
// 					google_conversion_format : "3",
// 					google_conversion_color : "ffffff",
// 					google_conversion_label : "2s1NCN2V7WoQ8_nInwM",
// 					google_remarketing_only : false
// 				});

// 			}
			
// 		}else{
// 			$('#contactError').text(data).fadeIn();
// 		}
	


// 	});

// });


//class is using for multiple form
$('.contactFormClass').on('submit', function(event) {
	var that = this;
	event.preventDefault();

	$('#contactThankYou').hide(0);
	$('#contactError').hide(0);
	$.post('contact_submit.html', $(this).serialize(), function(data, textStatus, xhr) {
	//data = 1;
	// if (data == 1)
	if(data == 2)
	{
		window.location.reload();
	}
	else if(data == 3)
	{
		$('#errorcapcha').show();
		}
	else
	{
			// $('#contactThankYou').text('Thank you for getting in touch!').fadeIn();
			window.location.replace("thank-you.html");
			$(that).find("input, textarea, select").val("");
			

		}
	// 	else{
	// 		$('#contactError').text(data).fadeIn();
	// }

	});

});