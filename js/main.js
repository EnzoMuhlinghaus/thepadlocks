$(document).ready(function(){
	if( $(window).scrollTop()>200 ){
		$('.main-nav').addClass('fixed-menu');
		$('.navbar-brand').show();
	}

	//Scroll Menu
	function menuToggle()
	{
		var windowWidth = $(window).width();

		if(windowWidth > 767 ) {
			$(window).on('scroll', function () {
				if ($(window).scrollTop() > 200) {
					$('.navbar-brand').show();
					$('.main-nav').addClass('fixed-menu animated zoominDown');
				} else {
					$('.navbar-brand').hide();
					$('.main-nav').removeClass('fixed-menu animated zoominDown');
				}
			});
		}
	}

	menuToggle();

	// Contact form validation
	var form = $('.contact-form');
	form.submit(function () {'use strict',
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	$( window ).resize(function() {
		menuToggle();
	});

	$('.main-nav ul').onePageNav({
		currentClass: 'active',
	    changeHash: false,
	    scrollSpeed: 900,
	    scrollOffset: 0,
	    scrollThreshold: 0.3,
	    filter: ':not(.no-scroll)'
	});

});