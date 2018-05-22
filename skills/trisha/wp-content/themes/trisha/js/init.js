/*-----------------------------------------------------------------------------
 Table of Contents:

1. ANIMATION SECTION
2. AUTO HEIGHT DISPLAY
3. MENU NAVIGATION
4. TEAM MEMBERS
5. PORTFOLIO SINGLE PROJECT
6. TESTIMONIALS
7. BUTTON SCROLL UP
8. DOUBLE NAV MENU
9. PORTFOLIO
 -----------------------------------------------------------------------------*/

jQuery(document).ready(function(){
	"use strict";

	//ANIMATION SECTION
	if(!Modernizr.touch){
		//Animation.css calling
		new WOW().init();
	}
	//END ANIMATION SECTION

	//AUTO HEIGHT DISPLAY
	jQuery('html').css({height:'auto'});
	jQuery('#intro').css({height:jQuery(window).height()});

	jQuery(window).bind('resize',function() {
		jQuery('#intro').css({height:jQuery(window).height()});
	});
	//END AUTO HEIGHT DISPLAY

	// MENU NAVIGATION
	jQuery('.menu li a[href*=#], a.goto[href*=#]').on('click',function() {
		var headerH = jQuery('.nav-bar').height() - 1;
		jQuery("html, body").animate({
			scrollTop: jQuery(jQuery(this.hash)).offset().top - headerH - 75  + "px"
		}, {
			duration: 1000,
			easing: "easeInOutExpo"
		});
		return false;
	});
	// END MENU NAVIGATION

	// TEAM MEMBERS
	jQuery('.flexslider-team').flexslider({
		animation: "slide",
		slideshow: true,
		slideshowSpeed: 5000,
		animationSpeed: 600,
		controlNav: false,
		useCSS: false
	});
	// TEAM MEMBERS	

	//PORTFOLIO SINGLE PROJECT
	jQuery('#portfolio-items li .view-project a').on('click',function() {
		jQuery('.project-close').fadeOut(500);
		jQuery('html, body').animate({scrollTop:jQuery('.portfolio-bkg-ajax').position().top}, 500);

		var toLoad = jQuery(this).attr('href');
		var loader= jQuery('#project-loader');
		loader.fadeIn();
		jQuery('.project-content').slideUp(500);
		jQuery('.project-content').load( toLoad , function(){
			loader.fadeOut();
			jQuery(this).slideDown(500);
			jQuery('.flexslider-project').flexslider({
				animation: "fade",
				slideshow: true,
				slideshowSpeed: 5000,
				animationSpeed: 600,
				directionNav: false,
				useCSS: false
			});
			jQuery('.project-close').delay(500).fadeIn(500);
		});
		return false;
	});

	jQuery(".project-close").on('click', function() {
		jQuery('.project-content').slideUp(500);
		jQuery(this).fadeOut(500);
		jQuery('html, body').animate({scrollTop:jQuery('.portfolio-bkg-ajax').position(-200).top-70},1000);
	});
	//END PORTFOLIO SINGLE PROJECT

	// TESTIMONIALS
	jQuery('.flexslider-testimonials').flexslider({
		animation: "fade",
		slideshow: true,
		slideshowSpeed: 5000,
		animationSpeed: 600,
		directionNav: false,
		useCSS: false
	});
	// TESTIMONIALS

  //BUTTON SCROLL UP
	jQuery.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	// END BUTTON SCROLL UP

}); //END DOCUMENT READY


jQuery(window).on('scroll', function(){
	"use strict";

	//DOUBLE NAV MENU
	if (jQuery(this).scrollTop() > 5){
		jQuery('.navbar').addClass("navbar-small")
	}
	else{
		jQuery('.navbar').removeClass("navbar-small")
	}
	//END DOUBLE NAV MENU

});//END DOCUMENT SCROLL


jQuery(window).on('load', function() {
	"use strict";

	// PORTFOLIO
	// cache container
	var portfolioItems = jQuery('#portfolio-items');
	// initialize isotope
	portfolioItems.isotope({
		itemSelector : '.portfolio-item',
		layoutMode : 'fitRows'
	});
	// filter items when filter link is clicked
	jQuery('#portfolio-filter a').on('click', function(){
		var selector = jQuery(this).attr('data-filter');
		portfolioItems.isotope({ filter: selector });
		return false;
	});
	jQuery(".view-larger a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		autoplay_slideshow: true,
		slideshow: 3000
	});
	// END PORTFOLIO

}); //END DOCUMENT LOAD