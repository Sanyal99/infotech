(function () {

	"use strict";

	var Prysm = {
		init: function () {
			this.Basic.init();
		},

		Basic: {
			init: function () {
				this.preloader();
				this.BackgroundImage();
				this.Animation();
				this.Pr3ScrollTop();
			},
			preloader: function () {
				$(window).on('load', function () {
					$(".loading-preloader").fadeOut();
				});
			},

			BackgroundImage: function () {
				$('[data-background]').each(function () {
					$(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
				});
			},

			Animation: function () {
				$(window).on("load", function () {
					if ($('.wow').length) {
						new WOW({
							offset: 100,
							mobile: true
						}).init()
					}
				});

			},

			Pr3ScrollTop: function () {
				$(window).on("scroll", function () {
					var scrollBarOffset = $(this).scrollTop();
					if (scrollBarOffset > 300) {
						$(".pr3-scroll-top").fadeIn();
					} else {
						$(".pr3-scroll-top").fadeOut();
					}
				});

				$(".pr3-scroll-top").on("click", function (e) {
					e.preventDefault();
					$("body,html").animate({
						scrollTop: 0,
					}, 1800, 'easeInQuart');
				});
			},



		}
	}
	jQuery(document).ready(function () {
		Prysm.init();
	});

	$('.app-gym-testimonial-slider').owlCarousel({
		margin: 8,
		responsiveClass: true,
		nav: false,
		dots: true,
		loop: true,
		autoplay: true,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 1,
			},
			400: {
				items: 1,
			},
			600: {
				items: 2,
			},
			700: {
				items: 2,
			},
			900: {
				items: 3,
			},
			1000: {
				items: 3,

			}
		},
	});

	$(window).on("scroll", function(){
		var ScrollOffset = $(this).scrollTop();
		var HeaderOffset = $(".pr3-header-section").outerHeight();
		if ( ScrollOffset > HeaderOffset ) {
			$(".pr3-header-section").addClass("pr3-sticky-on"); 
		} else {
			$(".pr3-header-section").removeClass("pr3-sticky-on");
		}
	}); 

	
	var btn = $('#scrollup');

	$(window).scroll(function () {
		if ($(window).scrollTop() > 700) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, '300');
	});

	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});



})();
