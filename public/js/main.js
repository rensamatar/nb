'use strict';

jQuery(window).load(function() {
    jQuery(".loader-container").delay(600).fadeOut(600);
    jQuery("#pageloader").delay(1200).fadeOut(800);
});

//---- Fit Video
jQuery('.fitvid').each(function() {
    jQuery(this).fitVids();
});


jQuery(document).ready(function($) {

	//wow animation init
	new WOW().init();

    // CountTo init
    $('.timer').countTo();

    // Fancybox
    $('.work-box').fancybox();

    // Play Video

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


