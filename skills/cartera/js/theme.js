/*
 ===========================================================
 Table of Contents
 -----------------------------------------------------------
 1. Smooth Scroll
 2. Mobile Menu Show/Hide
 3. Main Menu Effect On Scroll
 4. Header Banner Parallax Blur
 		4.1 Home Banner Size
 		4.2 Overlay Blur Effect
 		4.3 Banner Content Parallax
 5. Wow Js Initailize
 6. About Carousel Slider
 7. Portfolio MixitUp Js Initialize
 8. Portfolio Modal Project View
 9. Team Carousel Slider
 10. Testimonial Carousel Slider
 11. About Carousel Slider
 12. Counter
 13. ScrollUp
 14. Ajax Contact Form
 15. EqualHeights
 16. Preloader

 ===========================================================
 ===========================================================
 */

jQuery(document).ready(function ($) {


	/*
	 -----------------------------------------------
	 1. Smooth Scroll
	 -----------------------------------------------
	 */
	$('.smoothscroll').on('click', function (e) {
		e.preventDefault();

		var target = this.hash;
		$target = $(target);
		console.log($target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 75
		}, 1200);

	});

	/*
	 -----------------------------------------------
	 2. Mobile Menu Show/Hide
	 -----------------------------------------------
	 */
	function mobileMenu() {
		jQuery("#btn-mobile-nav").on("click", function () {
			$(".mobile-menu").toggle();
		})
	}

	mobileMenu();

	/*
	 -----------------------------------------------
	 3. Main Menu Effect On Scroll
	 -----------------------------------------------
	 */
	$(window).scroll(function () {
		var wScroll = $(this).scrollTop();
		var wh = $(window).height();

		if (wScroll > 40) {
			$(".header-area").addClass('dark-header-area');
		} else {
			$(".header-area").removeClass('dark-header-area');
		}
	});

	/*
	 -----------------------------------------------
	 4. Header Banner Parallax Blur
	 -----------------------------------------------
	 */
	// Adjust Home Banner Size with the Current Window Height
	$('.home-parallax-banner-area').css({'height': $(window).height()});
	$(window).on('resize', function () {
		$('.home-parallax-banner-area').css({'height': $(window).height()});
		$('body').css({
			'width': $(window).width()
		})
	});


	// Overlay Blur Effect
	(function () {
		$(window).scroll(function () {
			$('.home-parallax-banner-overlay').show();
			var oVal;
			oVal = $(window).scrollTop() / 90;
			return $(".home-parallax-banner-overlay").css("opacity", oVal);
		});

	}).call(this);

	// Banner Content Parallax
	$(window).scroll(function (e) {
		parallax();
	});

	function parallax() {
		var scrollPosition = $(window).scrollTop();
		$('.home-parallax-banner-area-wrapper').css('margin-top', (0 - (scrollPosition * .2)) + 'px');
	}

	/*
	 -----------------------------------------------
	 5. Wow Js Initailize
	 -----------------------------------------------
	 */
	new WOW().init();

	/*
	 -----------------------------------------------
	 6. About Carousel Slider
	 -----------------------------------------------
	 */
	function aboutSlider() {
		var owl = $("#about-slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[600, 1],
				[700, 1],
				[1000, 1],
				[1200, 1],
				[1400, 1],
				[1600, 1]
			],
			navigation: false,
			pagination: false,
			autoPlay: false,
			stopOnHover: true,
			transitionStyle: "fade"
		});
		$(".about-next").click(function () {
			owl.trigger('owl.next');
		});
		$(".about-prev").click(function () {
			owl.trigger('owl.prev');
		});
	}

	aboutSlider();

	/*
	 -----------------------------------------------
	 7. Portfolio MixitUp Js Initialize
	 -----------------------------------------------
	 */
	function portfolioSorting() {
		$(function () {
			$('#Container').mixItUp();
		});
	}

	portfolioSorting();
	/*
	 -----------------------------------------------
	 8. Portfolio Modal Project View
	 -----------------------------------------------
	 */
	/* Portfolio Button Active Color Change */
	$('.btn-portfolio-navigator').on('click', function () {
		$('.portfolio-navigator button').removeClass('port-active');
		$(this).addClass('port-active');
		$('.portfolio-area').animate({height: 'auto'}, 1000);
	});

	/*
	 -----------------------------------------------
	 9. Team Carousel Slider
	 -----------------------------------------------
	 */
	function teamSlider() {
		var owl = $("#team-slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 2],
				[600, 2],
				[700, 3],
				[1000, 4],
				[1200, 4],
				[1400, 4],
				[1600, 4]
			],
			navigation: false,
			pagination: false,
			autoPlay: true,
			stopOnHover: true
		});
		$(".team-next").on('click', function () {
			owl.trigger('owl.next');
		});
		$(".team-prev").on('click', function () {
			owl.trigger('owl.prev');
		});
	}

	teamSlider();

	/*
	 -----------------------------------------------
	 10. Testimonial Carousel Slider
	 -----------------------------------------------
	 */
	function testimonialSlider() {
		var owl = $("#testimonial-slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[600, 1],
				[700, 1],
				[1000, 1],
				[1200, 1],
				[1400, 1],
				[1600, 1]
			],
			navigation: false,
			pagination: false,
			autoPlay: true,
			stopOnHover: true,
			pagination: true,
			transitionStyle: "backSlide"
		});
		$(".testimonial-next").on('click', function () {
			owl.trigger('owl.next');
		});
		$(".testimonial-prev").on('click', function () {
			owl.trigger('owl.prev');
		});
	}

	testimonialSlider();

	/*
	 -----------------------------------------------
	 11. About Carousel Slider
	 -----------------------------------------------
	 */
	function homeSlider() {
		var owl = $("#home-slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[600, 1],
				[700, 1],
				[1000, 1],
				[1200, 1],
				[1400, 1],
				[1600, 1]
			],
			navigation: false,
			pagination: false,
			autoPlay: true,
			stopOnHover: true,
			transitionStyle: "fade"
		});
		$(".about-next").on('click', function () {
			owl.trigger('owl.next');
		});
		$(".about-prev").on('click', function () {
			owl.trigger('owl.prev');
		});
	}

	homeSlider();


	/* -------------------
	 12. Counter
	 ---------------------*/

	$(".s-adv").waypoint(function () {

		$({blurRadius: 5}).animate({blurRadius: 0}, {
			duration: 4000,
			easing: 'swing',
			step: function () {
				$(".s-adv-item h3 span").css({
					"-webkit-filter": "blur(" + this.blurRadius + "px)",
					"filter": "blur(" + this.blurRadius + "px)"
				});
			}
		});
		var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(' ');
		$(".s-adv-item h3 span").each(function () {
			var tcount = $(this).data("count");
			$(this).animateNumber({
					number: tcount,
					easing: 'easeInQuad',
					"font-size": "42px",
					numberStep: comma_separator_number_step
				},
				4000);
		});
		this.destroy();

	}, {
		offset: '70%'
	});

	/*--------------------------
	 13. ScrollUp
	 ---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-chevron-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

	/*
	 -----------------------------------------------
	 14. Ajax Contact Form
	 -----------------------------------------------
	 */
	$("form").submit(function () { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function () {
			alert("Thank you!");
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});


	/*
	 -----------------------------------------------
	 15. EqualHeights
	 -----------------------------------------------
	 */
	$(".about-area .equal-h").equalHeights();


	/*
	 -----------------------------------------------
	 16. Preloader
	 -----------------------------------------------
	 */

	$(window).load(function () {
		$('#loader').fadeOut('slow');
		$('.spinner').delay(350).fadeOut('slow');
		$('body').delay(350);
	}); // End Window Load

});