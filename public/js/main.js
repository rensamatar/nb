'use strict';

jQuery(document).ready(function($) {

	//wow animation init
	new WOW().init();

    // CountTo init
    $('.timer').countTo();

    // Fancybox
    $('.work-box').fancybox();

	//------- Navigation Menu ---------
	var toggleNav   = $('.nb-nav-trigger');
	var menuPanel   = $('#menu');
	var mainContent = $('#main');

            //open/close the menu and cover layers
            toggleNav.on('click', function() {
            	if(!toggleNav.hasClass('close-nav')) {
            //it means navigation is not visible yet - open it and animate navigation layer
            toggleNav.addClass('close-nav');
            menuPanel.toggleClass('slide');
            mainContent.toggleClass('slide');
        } else {
            //navigation is open - close it and remove navigation layer
            toggleNav.removeClass('close-nav');

            menuPanel.removeClass('slide');
            mainContent.removeClass('slide');
        }
    });
});