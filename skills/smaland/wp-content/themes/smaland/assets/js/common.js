$(function() {
    "use strict";

    /*--------------------------------
     Magnific Popup
     ---------------------------------- */

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });

    /*--------------------------------
     jQuery Menu
     ---------------------------------- */
    /*
    $(window).on('scroll', function(){
        // Header Animation
        if ($(window).width() <= 768) {
            if ($(this).scrollTop() > 5){
                $('.home nav').addClass("navbar-small");
                $('.home .pageWrapper').removeClass("hidden-menu");
                $('.home .navbar-default').css("position", "fixed");
                $('.home .navbar-small').slideDown('slow');
                $('.home .mainNav').slideUp('slow').fadeOut(600);
            }
            else{
                $('.home nav').removeClass("navbar-small");
                $('.home .pageWrapper').addClass("hidden-menu");
                $('.home .navbar-default').css("position", "relative");
                $('.home .navbar-small').slideUp('slow');
                $('.home .mainNav').slideDown('slow').fadeIn(600);
            }
        }
    });
    */
    
	if ($(window).width() <= 768) {
		$('.page .pageWrapper nav').addClass("navbar-small");
		$('.page .navbar-default').css("position", "fixed");
  }

    /*--------------------------------
     Height block
    ----------------------------------*/
    function heightDetect() {
        $(".flex-sidebar .flex-slider li").css("height", $(window).height() - 78);
        $(".flex-sidebar-block .current-number").css("bottom", $(".flex-slider .item-description").height());
    }
    heightDetect();
    $(window).resize(function() {
        heightDetect();
    });

    /*--------------------------------
     Create the FlexSlider
     ----------------------------------*/
    var $sliderItemTotal = $(".slider-item-total"),
        $sliderItemCurrent = $(".slider-item-current");

    $('.flex-sidebar-block').flexslider({
        selector: ".flex-slider > li",
        animation: "slide",
        controlNav: false,
        slideshow: true,
        smoothHeight: true,
        start: function(item){
            $('.flex-slider').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
            slideCounter(item);
        },
        after: function(item){
            slideCounter(item);
        },
        /*controlsContainer: $(".custom-controls-container"),*/
        customDirectionNav: $(".custom-navigation a")
    });
    function slideCounter(item){
        $sliderItemCurrent.text(item.currentSlide + 1);
        $sliderItemTotal.text(item.count);
    }
     // Create Image Home
    $('flex-image-block').flexslider({
      controlNav: false,
      slideshow: false,
      touch: false
    });

    /*--------------------------------
     Create the Gallery slider
     ----------------------------------*/
    $('.flex-gallery').each(function() {
        $(this).flexslider({
            selector: ".gallery-slides > li",
            animation: "slide",
            controlNav: false,
            slideshow: false,
            /*smoothHeight: true,*/
            customDirectionNav: $(this).find(".gallery-navigation a")
        });
    });

  /*--------------------------------
   Fix bootstrap float: left
   ----------------------------------*/
    $(".row.equal-block").each(function(indx, el){
      $(".eq-block", el).each(function(i, elem){
        !(++i % 2) && $("<div>",{"class": "clearfix visible-xs-block visible-sm-block"}).insertAfter(elem);
      })
    });

    /*--------------------------------
     E-mail Ajax Send
     ----------------------------------*/
     $(".callback").submit(function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "/wp-content/themes/smaland/mail.php",
            data: th.serialize()
        }).done(function() {
            $(".success").addClass("visible");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
                $(".success").removeClass("visible");
            }, 5000);
        });
        return false;
    });

});