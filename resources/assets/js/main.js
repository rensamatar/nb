(function ($) {
	'use strict';
	$.fn.heightFull = function() {
		var totalHeight = $('window').height();
		var heightMinus = totalHeight;
		$(this).css('height', heightMinus);
	};
}(jQuery));

jQuery(document).ready(function($) {

	var contentSections = $('.cd-section'),
		navigationItems = $('.onepage-pagination a');

	updateNavigation();
	$(window).resize(function() {
		updateNavigation();
		$('.onepage-main .item').heightFull();
	});

	$('.onepage-main').onepage_scroll({
		sectionContainer: 'section',
		easing: 'cubic-bezier(0.175, 0.885, 0.420, 1.210)',
		animationTime: 1000,
		pagination: true,
		updateURL: false,
		beforeMove: function(index) {},
		afterMove: function(index) {},
		loop: false,  
		responsiveFallback: 600
	});


	function updateNavigation() {
		contentSections.each(function() {
			$this = $(this);
			var activeSection = $('.onepage-pagination a[href="#'+$this.attr('id')+'"]').data('number') - 1;
			if ( ( $this.offset().top - $(window).height()/2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
				navigationItems.eq(activeSection).addClass('is-selected');
			}else {
				navigationItems.eq(activeSection).removeClass('is-selected');
			}
		});
	}

	//------- Navigation Menu ---------

	var isLateralNavAnimating = false;
	
	//open/close lateral navigation
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		//stop if nav animation is running 
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			$('body').toggleClass('navigation-is-open');
			$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});

});

