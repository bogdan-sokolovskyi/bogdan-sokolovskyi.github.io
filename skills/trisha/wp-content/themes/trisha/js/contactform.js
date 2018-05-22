jQuery(document).ready(function() {

	jQuery(".form").submit(function() {
		var th = jQuery(this);
		jQuery.ajax({
			type: "POST",
			url: "/wp-content/themes/trisha/include/mail.php",
			data: th.serialize()
		}).done(function() {
			jQuery('#contact-container').html('<h3>Message sent</h3>');
			jQuery('#output').html('<p>We try to respond as soon as possible, so one of our Customer Service colleagues will get back to you within a few hours.</p><p>Have a great day ahead!</p>');
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
}); 