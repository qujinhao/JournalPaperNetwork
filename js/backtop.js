jQuery(document).ready(function() {
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 300) {
			jQuery('#backtop').fadeIn();
		} else {
			jQuery('#backtop').fadeOut();
		}
	});

	jQuery('#backtop').click(function () {
		jQuery('body,html').stop(false, false).animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});
