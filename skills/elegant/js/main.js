////////////////////////////////////////////////////////////////
//jQuery to collapse the navbar on scroll
////////////////////////////////////////////////////////////////

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse menu-coll");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse menu-coll");
    }
});

////////////////////////////////////////////////////////////////
//jQuery for page scrolling feature - requires jQuery Easing plugin
////////////////////////////////////////////////////////////////

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

////////////////////////////////////////////////////////////////
// CHANGE OPACITY ON SCROLL
////////////////////////////////////////////////////////////////

$(function(){
    var fadeBegin = 100, 
    fadeFinish = 750, 
    fadingElement = $('header');

/*$(window).on('scroll', function(){
    var offset = $(document).scrollTop(), opacity = 0; 
    console.log(offset);
    if( offset <= fadeBegin ){
        opacity = 1; 
    } else if( offset <= fadeFinish ){
        opacity = 1 - offset / fadeFinish;

    }
    fadingElement.stop().animate({opacity: opacity}, 200);
}); */
});

////////////////////////////////////////////////////////////////
// CHANGE MARGIN OF HEADER ELEMENTS ON SCROLL
////////////////////////////////////////////////////////////////

$(window).scroll(function(){  
    var $scrollTop = $(window).scrollTop();
    
    if($scrollTop < 1000 && $scrollTop > 0){
        $(".mt90").css({
          'paddingTop': $scrollTop + "px",
        });
    }
});

////////////////////////////////////////////////////////////////
// SHOPING CARD TOOGLE
////////////////////////////////////////////////////////////////

$('#cart').click(function () {
   $('.shopping-cart').slideDown("300");
});

$('.shopping-cart').mouseleave(function(){
   $('.shopping-cart').slideUp("100");
});

////////////////////////////////////////////////////////////////
// SEARCH TOOGLE
////////////////////////////////////////////////////////////////

$('.search-menu').click(function () {
    $('.search').fadeIn(500);
});

 $('.close-search').click(function(){
        $('.search').fadeOut(500);
 });

////////////////////////////////////////////////////////////////
// NEW ARRIVALS
////////////////////////////////////////////////////////////////

    $(document).ready(function() {
     
      $("#new-arrivals-slider").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3],
		  pagination : false,
		  center:true
     
      });
     
    });

////////////////////////////////////////////////////////////////
// MAGNIFIC POPUP
////////////////////////////////////////////////////////////////

$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
});

////////////////////////////////////////////////////////////////
// MixItUp
////////////////////////////////////////////////////////////////

$(function () {
        var filterList = {
            init: function () {
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                });                
            
            },
        };
        filterList.init(); 
}); 


////////////////////////////////////////////////////////////////
// USER QUOTES
////////////////////////////////////////////////////////////////

    $(document).ready(function() {
     
      $("#slide-quotes").owlCarousel({
     
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          singleItem :true,
		  dots : true
      });
     
    });

////////////////////////////////////////////////////////////////
// PARTNERS SLIDER
////////////////////////////////////////////////////////////////

    $(document).ready(function() {
     
      $("#partners-slider").owlCarousel({
     	autoPlay: 2500,
        stopOnHover: true,
        items: 6,
        itemsDesktop: [1170, 5],
        itemsDesktopSmall: [1024, 4],
        itemsTabletSmall: [768, 3],
        itemsMobile: [480, 1],
        pagination: !1,
        navigation: !1
      });
     
    });

////////////////////////////////////////////////////////////////
// SCROLL TO TOP
////////////////////////////////////////////////////////////////

$(window).scroll(function() {
	if ($(this).scrollTop() > 100) {
		$('.scroll-top').fadeIn();
	} else {
		$('.scroll-top').fadeOut();
	}
});

	$('a[href="#totop"]').click(function() {
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		return false;
});

////////////////////////////////////////////////////////////////
// PRELOADER 
////////////////////////////////////////////////////////////////

$(window).load(function(){
    // will first fade out the loading animation
    $(".preloader").delay(1300).fadeOut();
    // will fade out the whole DIV that covers the website.
    $("#preloader").delay(1400).fadeOut("slow");

});

////////////////////////////////////////////////////////////////
// TOOLTIP
////////////////////////////////////////////////////////////////

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

////////////////////////////////////////////////////////////////
// HOME SLIDER
////////////////////////////////////////////////////////////////

    $(document).ready(function() {
     
      $("#header-slider").owlCarousel({
     
          autoPlay: 4000, //Set AutoPlay to 3 seconds
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          singleItem :true,
        pagination: !1,
        navigation: !1
      });
     
    });

////////////////////////////////////////////////////////////////
// PROGRESS BARS
////////////////////////////////////////////////////////////////

$(function() {
$('.progress-bar').each(function(i) {
			$(this).appear(function() {
				var percent = $(this).attr('aria-valuenow');
				$(this).animate({'width' : percent + '%'});
				$(this).find('span').animate({'opacity' : 1}, 900);
				$(this).find('span').countTo({from: 0, to: percent, speed: 900, refreshInterval: 30});
			});
		});
});

////////////////////////////////////////////////////////////////
// COUNTER
////////////////////////////////////////////////////////////////

$(function() {
$('.counter-stats').each(function(i) {
			$(this).appear(function() {
				var stats = $(this).find('h3').text();
				$(this).find('h3').countTo({from: 0, to: stats, speed: 1400, refreshInterval: 30});
			});
		});
});

