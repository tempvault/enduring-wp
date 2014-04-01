jQuery(document).ready(function($) {
	$(window).scroll(function(e){
		$el = $('#access');
		if ( $(window).width() > 600) {
			if ($(this).scrollTop() > 150 && $el.css('position') != 'fixed'){
				$el.addClass("fixedMenu");
			}
			else if ($(this).scrollTop() < 150 && $el.css('position') == 'fixed'){
				$el.removeClass("fixedMenu");
			}
		}
		else {
			$el.removeClass("fixedMenu");
		}
	});
});