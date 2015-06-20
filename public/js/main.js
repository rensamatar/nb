'use strict';

(function ($) {
	'use strict';
	$.fn.heightFull = function () {
		var totalHeight = $('window').height();
		var heightMinus = totalHeight;
		$(this).css('height', heightMinus);
	};
})(jQuery);

jQuery(document).ready(function ($) {

	$(window).resize(function () {
		$('.onepage-main .item').heightFull();
	});

	$('.onepage-main').onepage_scroll({
		sectionContainer: 'section',
		easing: 'cubic-bezier(0.175, 0.885, 0.420, 1.210)',
		animationTime: 1000,
		pagination: true,
		updateURL: false,
		beforeMove: function beforeMove(index) {},
		afterMove: function afterMove(index) {},
		loop: false,
		responsiveFallback: 600
	});

	//------- Navigation Menu ---------

	var isLateralNavAnimating = false;

	//open/close lateral navigation
	$('.cd-nav-trigger').on('click', function (event) {
		event.preventDefault();
		//stop if nav animation is running
		if (!isLateralNavAnimating) {
			if ($(this).parents('.csstransitions').length > 0) isLateralNavAnimating = true;

			$('body').toggleClass('navigation-is-open');
			$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});