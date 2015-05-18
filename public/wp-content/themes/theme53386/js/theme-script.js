jQuery(document).ready(function() {
	jQuery(window).resize(
		function(){
			if(!jQuery('body').hasClass('cherry-fixed-layout')) {
				jQuery('.full-width-block').width(jQuery(window).width());
				jQuery('.full-width-block').css({width: jQuery(window).width(), "margin-left": (jQuery(window).width()/-2), left: "50%", "position": "relative"});
			};
		}
	).trigger('resize');

	jQuery('input[type="submit"], input[type="reset"]').each(function(){
		if(!jQuery(this).hasClass('adminbar-button') && !jQuery(this).hasClass('search-form_is')) {
			jQuery(this).wrap('<span class="input-btn btn"><span></span></span>').removeClass('btn').removeClass('btn-primary');
		};
	});

	var i=0;
	var alphabet = "abcdefghijklmnopqrstuvwxyz".split("");
	jQuery('.posts-grid.abc-on-thumbnail').find('li').each(function(){
		jQuery(this).find('.thumbnail a').append('<div class="alph">'+alphabet[i]+'</div>');
		i++;
	});

})