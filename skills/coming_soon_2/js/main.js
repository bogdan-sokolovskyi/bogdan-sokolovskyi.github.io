/* ==============================================

-------------------------------------------
	TABLE OF CONTENTS
-------------------------------------------
1.0 BOOTSTRAP FIX FOR WINPHONE 8 AND IE10
2.0 PRELOADER
3.0 CUSTOM ANIMATIONS
4.0 FULLSCREEN ELEMENTS
5.0 NAVIGATION
6.0 MOVE TO SECTION
7.0 KEYBOARD SUPPORT
9.0 BACKGROUNDS
10.0 PLUGINS
11.0 COUNTDOWN
12.0 MAILCHIMP
13.0 CONTACT FORM
14.0 WINDOW LOAD FUNCTION
15.0 DOCUMENT READY FUNCTION
16.0 DOCUMENT RESIZE
17.0 POPUP SCRIPT
18.0 COUNTDOWN FUNCTION START
19.0 AUTO CENTER SCRIPT
20.0 FLEXSLIDER

============================================== */

(function($) {
	"use strict";
	
	$('.site-nav ul li a').click(function() { 
        var id = $(this).attr('href');
		myfunction(id);
		return false; 
	}); 
	
	var winHeight = $(window).height();
	function myfunction(x){
		if(x != "#home"){
			$("#large-header").css('z-index','-1');
		}
		else{
			$("#large-header").css('z-index','9');
		}
	}
	
/* ======================================
	 1.0 BOOTSTRAP FIX FOR WINPHONE 8 AND IE10
============================================== */

	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement('style');
		msViewportStyle.appendChild(
			document.createTextNode(
				'@-ms-viewport{width:auto!important}'
			)
		);
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
	}

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('body').addClass('mobile');
	}

	function detectIE() {
		if (navigator.userAgent.indexOf('MSIE') != -1)
			var detectIEregexp = /MSIE (\d+\.\d+);/ //test for MSIE x.x
		else // if no "MSIE" string in userAgent
			var detectIEregexp = /Trident.*rv[ :]*(\d+\.\d+)/ //test for rv:x.x or rv x.x where Trident string exists

		if (detectIEregexp.test(navigator.userAgent)){ //if some form of IE
			var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
			if (ieversion >= 9) {
				return true;
			}
		}
		return false;
	}

	function getWindowWidth() {
		return Math.max( $(window).width(), window.innerWidth);
	}

	function getWindowHeight() {
		return Math.max( $(window).height(), window.innerHeight);
	}
	
	function isTouchSupported() {
		var msTouchEnabled = window.navigator.msMaxTouchPoints;
		var generalTouchEnabled = "ontouchstart" in document;
		if (msTouchEnabled || generalTouchEnabled) {
			return true;
		}
		return false;
	}
	
/* ==================================================
	2.0 PRELOADER
===================================================*/
	function initPreloader() {
		var preloaderDelay = 350;
		var	preloaderFadeOutTime = 800;

		function hidePreloader() {
			var loadingAnimation = $('#loading-animation');
			var	preloader = $('#preloader');

			loadingAnimation.fadeOut();
			preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
		}

		hidePreloader();
	}
	
	
/* ==================================================
	3.0 CUSTOM ANIMATIONS
===================================================*/
	function initAnimations() {
		if( !$('body').hasClass('mobile') ) {
			if( detectIE() ) {
				$('.animated').css({
					'display':'block',
					'visibility': 'visible'
				});
			} else {			
				// Starting Animation on Load
				$('.animated').each( function() {
					var elem = $(this);
					if ( !elem.hasClass('visible') ) {
						var animationDelay = elem.data('animation-delay');
						var animation = elem.data('animation');
						if ( animationDelay ) {
							setTimeout(function(){
								elem.addClass( animation + ' visible' );
							}, animationDelay);
						} else {
							elem.addClass( animation + ' visible' );
						}
					}
				});				
			}
		}
	}
	
/* ===================================================
	4.0 FULLSCREEN ELEMENTS
===================================================== */
	function fullscreenElements() {
		$('.fullscreen-element').each(function(){
			$(this).css('min-height', getWindowHeight());
		});
	}
	fullscreenElements();
	
/* ===================================================	
	5.0 NAVIGATION
===================================================== */
	function initNavigation() {
		
		$('.site-nav a').tooltip({
			placement: 'left'
		});
		
		var section = $('section.on-menu');
		section.css({
			'opacity': '0',
			'visibility': 'hidden',
			'display': 'none'	
		});
		
		$('#home').css({
			'opacity': '1',
			'display': 'block',
			'visibility': 'visible'
		});
		
		
		$('.nav-close').on( 'click', function(e) {
			e.preventDefault();
			if( !$('#somedialog').hasClass('dialog--open') ) {
				$("#nav").toggleClass("fadeInLeftBig");
				$("#right-nav").toggleClass("fadeInRightBig");
				$("#nav-menu").toggleClass("visible");
				$("#back-face").toggleClass("appear");						
			}
			else{
			 	/*$(
				document
				
				) */
			}
			if( $('#nav-menu').hasClass('visible') ) {
				$(".site-footer").css("display","none");
				$("body").css("overflow-y","hidden");	
			}
			else{
				$(".site-footer").css("display","block");
				$("body").css("overflow-y","scroll");
			}
		});
		
		
/* ===================================================	
	6.0 MOVE TO SECTION
===================================================== */
		$('a.move-to').on( 'click', function(e) {
			e.preventDefault();
			$(".site-nav").removeClass("fadeInLeftBig");
			$(".site-nav").addClass("fadeOutLeftBig");
			$("#back-face").toggleClass("appear");
			$(".backface").css("z-index","-1");
			$(".backface").css("opacity","0");
			//$(".backface").css("transition","6.5s");
			$(".backface").css("transition","all 2s cubic-bezier(0.6, 0.04, 0.98, 0.335)");
			$(".right-section").removeClass("fadeInRightBig");
			$(".right-section").addClass("fadeOutRightBig");
			$('#nav-menu').removeClass("visible");
			$("#navigation-icon").removeClass("open");
			var elem = $(this);
			var currentSection = $(this).attr('href').substring(1);
			var section = $('section.on-menu');
			var customBackground = elem.data('section-background');
			$('.site-nav a').removeClass('active');
			$('.site-nav').find('[href="#'+ currentSection + '"]').addClass('active');
			$(".site-footer").css("display","block");
			$("body").css("overflow-y","scroll");
			section.animate({
				opacity: 0
			},{
				duration: 500,
				easing: 'easeOutQuad',
				queue: true,
				complete: function() {
					$(this).css({
						'visibility': 'hidden',
						'display': 'none'	
					});
					
					if( !$('body').hasClass('mobile') ) {
						if( detectIE() ) {
							$('.animated').css({
								'display': 'block',
								'visibility': 'visible'
							});
						} else {			
							// Remove Animations
							$('.animated').each( function() {
								var elem = $(this);
								var animation = elem.data('animation');
								if ( elem.hasClass('visible') ) {
									elem.removeClass( animation + ' visible' );
								}
							});
						}
					}
					
				}
			});
			
			$('#'+ currentSection + '').animate({
				opacity: 1
			},{
				duration: 700,
				easing: 'easeOutQuad',
				queue: true,
				start: function() {
					$(this).css({
						'display': 'block',
						'visibility': 'visible'
					});
					
					if(customBackground){
						$('.background-layer').removeClass (function (index, css) {
							return (css.match (/(^|\s)image\S+/g) || []).join(' ');
						});
						$('.background-layer').addClass(customBackground);
					}
					
					if( !$('body').hasClass('mobile') ) {
						if( detectIE() ) {
							$('.animated').css({
								'display': 'block',
								'visibility': 'visible'
							});
						} else {
							// Starting Animation on Load
							$('#'+ currentSection + '').find('.animated').each( function() {
								var elem = $(this);
								var animation = elem.data('animation');
								if ( !elem.hasClass('visible') ) {
									var animationDelay = elem.data('animation-delay');
									if ( animationDelay ) {
										setTimeout(function(){
											elem.addClass( animation + ' visible' );
										}, animationDelay);
									} else {
										setTimeout(function(){
											elem.addClass( animation + ' visible' );
										}, 0);
									}
								}
							});
						}
					}
					
				}
			});
		});


		 $('.site-nav').each(function() {
			var menu = $(this).find('ul');
			var menuHeight = menu.innerHeight();
			//menu.css('margin-top', -(menuHeight/2));
			menu.css('margin-top', ((winHeight - menuHeight)/2));
			$('.line.vertical.top').css('margin-bottom', menuHeight/2);
			$('.line.vertical.top').css('margin-bottom', menuHeight/2);
			$('.line.vertical.bottom').css('margin-top', menuHeight/2);			
		}); 	
		
		
		$('.socials-icons').each(function() {
			var socialIcons = $(this).find('ul');
			var socialIconsWidth = socialIcons.innerWidth() + 15;
			$('.line.horizontal.left').css('margin-right', socialIconsWidth);
		});
		
/* ===================================================	
	7.0 KEYBOARD SUPPORT
===================================================== */
		$(document).keydown(function(e) {
			if(e.keyCode == 38 || e.keyCode == 39) { 
				e.preventDefault();
				$('.site-nav a.active').closest('li').next('li').find('a.move-to').trigger('click');			
			} else if(e.keyCode == 37 || e.keyCode == 40) { 
				e.preventDefault();
				$('.site-nav a.active').closest('li').prev('li').find('a.move-to').trigger('click');			
			}
		});
	}

/* ===================================================		
	9.0 BACKGROUNDS
===================================================== */
	function initPageBackground() {
		
		if($('body').hasClass('mobile')) {
			$('.video-wrapper, .player').css('display', 'none');	
		}
		
		if( $('body').hasClass('slideshow-background') ) { // SLIDESHOW BACKGROUND

			$("body").backstretch([
				"images/background/black_slide1.jpg",
				"images/background/black_slide1.jpg",
				"images/background/black_slide1.jpg"
			], {duration: 3000, fade: 1200});

		} else if( $('body').hasClass('kenburns-background') ) { // KENBURNS BACKGROUND

			var displayBackdrops = false;
			var backgrounds = [
				{ src: 'images/background/black_slide1.jpg', valign: 'top' },
				{ src: 'images/background/black_slide1.jpg', valign: 'top' },
				{ src: 'images/background/black_slide1.jpg', valign: 'top' }
			];

			$('body').vegas({
				preload: true,
				transition: 'swirlLeft2',
				transitionDuration: 4000,
				timer: false,
				delay: 10000,
				slides: backgrounds,
				walk: function (nb) {
					if (displayBackdrops === true) {
						var backdrop;

						backdrop = backdrops[nb];
						backdrop.animation  = 'kenburns';
						backdrop.animationDuration = 20000;
						backdrop.transition = 'fade';
						backdrop.transitionDuration = 1000;

						$('body')
							.vegas('options', 'slides', [ backdrop ])
							.vegas('next');
					}
				}
			});

		} else if($('body').hasClass('youtube-background')) { // YOUTUBE VIDEO BACKGROUND
			if($('body').hasClass('mobile')) {

				// Default background on mobile devices
				$("body").backstretch([
					"demo/video/video.jpg"
				]);

			} else {
				$(".player").each(function() {
					$(".player").mb_YTPlayer();
				});
			}
		} else if($('body').hasClass('youtube-list-background')) { // YOUTUBE LIST VIDEOS BACKGROUND
			if($('body').hasClass('mobile')) {

				// Default background on mobile devices
				$("body").backstretch([
					"images/background/black_slide1.jpg"
				]);

			} else {

				var videos = [
					{videoURL: "0pXYp72dwl0",containment:'body',autoPlay:true, mute:true, startAt:0,opacity:1, loop:false, ratio:"4/3", addRaster:true},
					{videoURL: "9d8wWcJLnFI",containment:'body',autoPlay:true, mute:true, startAt:0,opacity:1, loop:false, ratio:"4/3", addRaster:false},
					{videoURL: "nam90gorcPs",containment:'body',autoPlay:true, mute:true, startAt:0,opacity:1, loop:false, ratio:"4/3", addRaster:true}
				];

				$(".player").YTPlaylist(videos, true);

			}
		} else if($('body').hasClass('mobile')) { // MOBILE BACKGROUND - Image background instead of video on mobile devices
			if($('body').hasClass('video-background')) {

				// Default background on mobile devices
				$("body").backstretch([
					"images/background/black_slide1.jpg"
				]);

			}	
		} else if($('body').hasClass('animated-gradient')) { // MOBILE BACKGROUND - Image background instead of video on mobile devices
			animatedGradient();
		}
	}
	
	
/* ===================================================	
	10.0 PLUGINS
===================================================== */
	function initPlugins() {
		
		// NivoLightbox
		$('.nivoLightbox').nivoLightbox({
			effect: 'fade',                             // The effect to use when showing the lightbox
			theme: 'default',                           // The lightbox theme to use
			keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
			clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
			errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
		});

		// RESPONSIVE VIDEO - FITVIDS
		$(".video-container").fitVids();


/* ===================================================
		11.0 COUNTDOWN
=================================================== */
		$('#clock').countdown('2017/06/06 12:00:00').on('update.countdown', function(event) {
			var $this = $(this).html(event.strftime('<div class="counter-container"><div class="counter-box first"><div class="number">%-D</div><span>Day%!d</span></div><div class="counter-box"><div class="number">%H</div><span>Hours</span></div><div class="counter-box"><div class="number">%M</div><span>Minutes</span></div><div class="counter-box last"><div class="number">%S</div><span>Seconds</span></div></div>'
			));
		});

/* ===================================================
		12.0 MAILCHIMP
=================================================== */
		$('.mailchimp').ajaxChimp({
			callback: mailchimpCallback,
			url: "//graycellsweb.us11.list-manage.com/subscribe/post?u=7d7063c9084f1ebe0a8504973&amp;id=d339ba89cc" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
		});

		function mailchimpCallback(resp) {
			 if (resp.result === 'success') {
				$('.success-message').html(resp.msg).fadeIn(1000);
				$('.error-message').fadeOut(500);

			} else if(resp.result === 'error') {
				$('.error-message').html(resp.msg).fadeIn(1000);
			}  
		}

		$('#email').focus(function(){
			$('.error-message').fadeOut();
			$('.success-message').fadeOut();
		});

		$('#email').keydown(function(){
			$('.error-message').fadeOut();
			$('.success-message').fadeOut();
		});

		$("#email").on( 'click', function() {
			$("#email").val('');
		});

		// PLACEHOLDER
		$('input, textarea').placeholder();

	}
	
/* ===================================================
	13.0 CONTACT FORM
===================================================  */
	function initContactForm() {

		var scrollElement = $('html,body'),
			contactForm = $('.contact-form'),
			form_msg_timeout;

		contactForm.on( 'submit', function() {
			var requiredFields = $(this).find('.required'),
				formFields = $(this).find('input, textarea'),
				formData = contactForm.serialize(),
				formAction = $(this).attr('action'),
				formSubmitMessage = $('.response-message');

			requiredFields.each(function() {
				if( $(this).val() === "" ) {
					$(this).addClass('input-error');
				} else {
					$(this).removeClass('input-error');
				}

			});

			function validateEmail(email) { 
				var exp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return exp.test(email);
			}

			var emailField = $('.contact-form-email');

			if( !validateEmail(emailField.val()) ) {

				emailField.addClass("input-error");

			}

			if ($(".contact-form :input").hasClass("input-error")) {
				return false;
			} else {

				clearTimeout(form_msg_timeout);

				$.post(formAction, formData, function(data) {
					formSubmitMessage.text(data);

					formFields.val('');

					form_msg_timeout = setTimeout(function() {
						formSubmitMessage.slideUp();
					}, 5000);
				});

			}

			return false;

		});

	}
	initContactForm();
	
/* ===================================================	
	14.0 WINDOW LOAD FUNCTION
=================================================== */
	$(window).load(function() {
		initPreloader();
		menuCenter();		
	});

/* ===================================================	
	15.0 DOCUMENT READY FUNCTION
=================================================== */
	jQuery(document).ready(function($) {
		initAnimations();
		fullscreenElements();
		initPageBackground();
		initNavigation();
		initPlugins();
		initContactForm();
	});
	
	
/* ===================================================		
	16.0 DOCUMENT RESIZE
=================================================== */
	$(window).on('resize', function () {
		fullscreenElements();
		menuCenter();		
		rightCenter();	
		leftCenter();				
	});

})(jQuery);

/* ===================================================
	17.0 POPUP SCRIPT 
=================================================== */

$('#subscribe-btn, #subscribe-btn2').on( 'click', function(e) {
	e.preventDefault();
	$("#nav").removeClass("fadeInLeftBig");
	$("#right-nav").removeClass("fadeInRightBig");
	$("#somedialog").addClass("dialog--open");
	$(".dialog__content").addClass("fadeInUp2");
	window.location.href = id;			
});

$('#close-me').on( 'click', function(e) {
	e.preventDefault();
	$("#somedialog").removeClass("dialog--open");
	//$(".dialog__content").removeClass("shake");
	$(".dialog__content").removeClass("fadeInUp2");
	$(".site-nav").removeClass("fadeInLeftBig");
	$(".right-section").removeClass("fadeInRightBig");
	$('#nav-menu').removeClass("visible");
	$('.nav-close .exit').css("display","none");
	$('.nav-close .menu').css("display","block");
	$("#back-face").removeClass("appear");
	$(".backface").css("opacity","0");
	$(".backface").css("z-index","-1");
	$(".backface").css("transition","3.5s");	
});

$('.nav-close').on( 'click', function(e) {
	e.preventDefault();
	if( $(".dialog__content").hasClass("fadeInUp2")){
		//$(".dialog__content").addClass("shake");		
	}	
});

/* ==================================
   	18.0 COUNTDOWN FUNCTION START
==================================== */
   var countDownDate = "11/30/2018 05:00:00";
   
   $('.countdown').downCount({
		date: ' '+ countDownDate +''
	});
    
	
	function home_page_counter()
	{
		$('.days').each(function () 
		{
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
			});
		});
		
		$('.hours').each(function () 
		{
    		$(this).prop('Counter',0).animate({
				Counter: $(this).text()}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
			});
		});
		
		$('.minutes').each(function () 
		{
    		$(this).prop('Counter',0).animate({
				Counter: $(this).text()}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
			});
		});	
	}
/* ==================================	
	19.0 AUTO CENTER SCRIPT
==================================== */
function menuCenter(){
	var winHeight = $(window).height();
	var menuMargin = (winHeight - 95)/2;
	$('.nav-close').css("top",menuMargin + "px");			
}
menuCenter();

function rightCenter(){
	var WinInHeight = $(window).innerHeight();
	var rightHeight = $('.countdown-div').innerHeight();			
	$('.countdown-div').css('margin-top', (WinInHeight - rightHeight)/2);				
}
rightCenter();

function leftCenter(){
	var WinInHeight2 = $(window).innerHeight();
	var leftHeight = $('#nav ul').innerHeight();			
	$('#nav ul').css('margin-top', (WinInHeight2 - leftHeight)/2);				
}
leftCenter();

$('.nav-close').one( 'click', function(e) {
	e.preventDefault();
	home_page_counter();
});

/* ===================================================
	20.0 FLEXSLIDER
=================================================== */
  $('.flexslider').flexslider({
	  animation: "fade",
	  animationLoop: true,
	  slideshowSpeed: 7000,
	  animationSpeed: 600,
	  controlNav: false,
	  directionNav: false,
	  keyboard: false,
	  start: function(slider){
		  $('body').removeClass('loading');
	  }
  });
