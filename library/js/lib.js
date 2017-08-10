jQuery(document).ready(function($) {

	// open and close menu when clicking the menu button
	$(function() {

		var menuTrigger = $('#menu-trigger'),
			menu = $('#main-nav-wrap'),
			header = $('#header'),
			speed = 300;

		menuTrigger.on('click', function() {

			if( header.hasClass('open') ) {
				header.removeClass('open');
				menu.stop().slideUp(speed);
			} else {
				header.addClass('open');
				menu.stop().slideDown(speed);
			}

		});

		$(window).on('resize', function() {
			if( $(window).width() >= 1070 ) {
				header.addClass('open');
				menu.show();
			}
		});

	});

});