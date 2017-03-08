/*
 * jQuery One Page Nav Plugin
 * http://github.com/davist11/jQuery-One-Page-Nav
 *
 * Copyright (c) 2010 Trevor Davis (http://trevordavis.net)
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://jquery.org/license
 *
 * @version 2.2.0
 *
 * Example usage:
 * $('#nav').onePageNav({
 *   currentClass: 'current',
 *   changeHash: false,
 *   scrollSpeed: 750
 * });
 */

$(document).ready(function(){
	//on remonte

	if( $(window).scrollTop()>200 ){
		$('.main-nav').addClass('fixed-menu');
		$('.navbar-brand').show();
	}

	var galerie = $('.wonderplugingridgallery');
	galerie.delay(1000).slideUp();
	$("#toggleGalerie").click(function () {
		if( galerie.css("display") == "block" ){
			galerie.slideUp();
		}
		else{
			galerie.slideDown();
		}
	});



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
		else{
			$('.navbar-brand').show();
			$('.main-nav').addClass('fixed-menu animated zoominDown');
		}
	}

	menuToggle();

	// Contact form validation
	var form = $('.contact-form');
	form.submit(function () {'use strict',
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
			$(".contact-form input, .contact-form textarea").each(function(idx, val) {
				$(this).val("");
			});
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

	if ($(window).scrollTop() < 700) {
		$(window).scroll( function(){
			$('.hideme, .hideme__f, .hideme__r, .hideme__u').each( function(){
				var bottom_of_object = $(this).offset().top + $(this).outerHeight();
				var bottom_of_window = $(window).scrollTop() + $(window).height() - 50;

				console.log(bottom_of_object);
				console.log(bottom_of_window);

				if( bottom_of_window > bottom_of_object ){
					if ($(this).attr("class").indexOf("hideme__f") != -1){
						$(this).addClass("fadeInLeftBig");
					}
					else if ($(this).attr("class").indexOf("hideme__r") != -1){
						$(this).addClass("fadeInRightBig");
					}
					else if ($(this).attr("class").indexOf("hideme__u") != -1){
						$(this).addClass("fadeInUpBig");
					}
					else if ($(this).attr("class").indexOf("hideme") != -1){
						$(this).addClass("fadeInDown");
					}
				}
			});
		});
	}
	else{
		$('.hideme, .hideme__f, .hideme__r, .hideme__u').each( function(){
			$(this).css("opacity", 1);
		});
	}

});

//backtotop
$(function(){
	$(document).ready(function() {
		return $(window).scroll(function() {
			return $(window).scrollTop() > 200 ? $("#backtotop").addClass("show") : $("#backtotop").removeClass("show")
		}), $("#backtotop").click(function() {
			return $("html,body").animate({
				scrollTop: "0"
			})
		})
	})
});