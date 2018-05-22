/*-----------------------------------------------------------------------------
 Table of Contents:

 1) Owl Sliders
 2) Owl Slider callings
 3) AJAX project slider
 4) Parallax Sections
 5) Animated progress bars
 6) Fun facts counter
 7) Video section lightbox
 8) Scroll functions
 9) E-mail Ajax Send
 10) Contact form
 11) Subscribe form
 12) Bootstrap Tooltip, Alert, Tabs
 13) ScrollUp
 14) Preloader
 15) Portfolio
 -----------------------------------------------------------------------------*/

(function($) {
    "use strict";

    /* -------------------
     Owl Sliders
     ---------------------*/
    function homeSlider() {
        var owl = $("#home-slider");
        owl.owlCarousel({
            itemsCustom : [
                [0, 1],
                [450, 1],
                [600, 1],
                [700, 1],
                [1000, 1],
                [1200, 1],
                [1400, 1],
                [1600, 1]
            ],
            navigation : false,
            pagination : false,
            autoPlay: true,
            stopOnHover: true,
            transitionStyle : "fade"
        });
        $(".about-next").on('click',function(){
            owl.trigger('owl.next');
        });
        $(".about-prev").on('click',function(){
            owl.trigger('owl.prev');
        });
    }

    homeSlider();



    
    /* -------------------
    Owl Slider callings
    ---------------------*/
    
    $("#client-slider").owlCarousel({
        autoPlay : true,
        minSlides: 1,
        maxSlides: 5,
        moveSlides:1,
        responsive:true,
        controls: false,
        pagination: false,
        navigation: false
    });
    $("#quote-slider").owlCarousel({
        autoPlay : false,
        singleItem : true,
        pagination: false,
        navigation: false
    });
    $("#owl-testimonials").owlCarousel({
        autoPlay : true,
        singleItem : true,
        pagination: true,
        navigation: false
    });
    // AJAX project slider
    $(document).ajaxComplete(function(){
        $("#project-slider").owlCarousel({
            autoPlay : true,
            singleItem : true,
            pagination: true,
            navigation: false,
        });
    });
    $("#owl-slider").owlCarousel({
        autoPlay : true,
        singleItem : true,
        pagination: true,
        navigation: false,
        navigationText : ['<i class="icon ion-chevron-left"></i>','<i class="icon ion-chevron-right"></i>'],
    });
    /* -------------------
    Parallax Sections
    ---------------------*/
    if(!Modernizr.touch){
        /* -------------------
        Animation.css calling
        ---------------------*/
        new WOW().init(); 
    }

    /* -------------------
    Animated progress bars
    ---------------------*/
    $('.progress-bars').waypoint(function() {
       $('.progress').each(function(){
            $(this).find('.progress-bar').animate({
                width:$(this).attr('data-percent')
            },800);
        });
        }, { offset: '100%',
             triggerOnce: true 
    });
    /* -------------------
    Fun facts counter
    ---------------------*/
    $('.counter').counterUp({
        delay: 8,
        time: 1400
    });
    /* -------------------
    Video section lightbox
    ---------------------*/
    $('#video-lightbox').cubeportfolio({
        gridAdjustment: 'alignCenter',
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxShowCounter: false
    });


    /* -------------------
    Scroll functions
    ---------------------*/
    $(window).on('scroll', function(){
        //parallax();
        /* -------------------
        Header Animation
        ---------------------*/
        if ($(this).scrollTop() > 5){
            $('nav').addClass("navbar-small")
        }
        else{
            $('nav').removeClass("navbar-small")
        }
    });

	/* -------------------
	 E-mail Ajax Send
	 ---------------------*/
	$("form").on('submit', function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
    /* -------------------
    Contact form
    ---------------------*/
    $('#contactform').on('submit', function(){
		var action = $(this).attr('action');
		$("#message").slideUp(250,function() {
            $('#message').hide();
            $('#submit')
                .after('<img src="img/assets/cbp-loading.gif" class="loader" />')
                .attr('disabled','disabled');
            $.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                comments: $('#comments').val(),
            },
                function(data){
                    document.getElementById('message').innerHTML = data;
                    $('#message').slideDown(250);
                    $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
                    $('#submit').removeAttr('disabled');
                    if(data.match('success') != null) $('#contactform').slideUp(850, 'easeInOutExpo');
                }
            );
		});
		return false;
	});
    /* -------------------
    Subscribe form
    ---------------------*/
    $( '#subscribe-form' ).on( 'submit', function( e ) {
        e.preventDefault();
        var $el = $( this ),
            $alert = $el.find( '.form-validation' ),
            $submit = $el.find( 'button' ),
            action = $el.attr( 'action' );
        $submit.button( 'loading' );
        $alert.removeClass( 'alert-danger alert-success' );
        $alert.html( '' );
        $.ajax({
            type     : 'POST',
            url      : action,
            data     : $el.serialize() + '&ajax=1',
            dataType : 'JSON',
            success  : function( response ) {
                if ( response.status == 'error' ) {
                    $alert.html( response.message );
                    $alert.addClass( 'alert-danger' ).fadeIn( 500 );
                }
                else {
                    $el.trigger( 'reset' );
                    $alert.html( response.message );
                    $alert.addClass( 'alert-success' ).fadeIn( 500 );
                }
                $submit.button( 'reset' );
            },
        })
    });
    /* -------------------
    Bootstrap Tooltip, Alert, Tabs
    ---------------------*/
    $(function () { $("[data-toggle='tooltip']").tooltip();  
        $(".alert").alert()
    });
    $(function () {
        var active = true;
        $('#collapse-init').on('click', function () {
            if (active) {
                active = false;
                $('.panel-collapse').collapse('show');
                $('.panel-title').attr('data-toggle', '');
                $(this).text('Close All');
            } else {
                active = true;
                $('.panel-collapse').collapse('hide');
                $('.panel-title').attr('data-toggle', 'collapse');
                $(this).text('Open All');
            }
        });
        $('#accordion').on('show.bs.collapse', function () {
            if (active) $('#accordion .in').collapse('hide');
        });
    });
    $('#myTab a').on('click', function (e) {
      e.preventDefault();
      $(this).tab('show');
    });


    /*--------------------------
     ScrollUp
     ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="ion-ios-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /* -------------------
     Preloader
     ---------------------*/
    /*$(window).on('load', function(){
        // Preloader
        $('#loader').fadeOut('slow');
        $('.circles').fadeOut('slow');
    });*/ // End Window Load

})(jQuery);

/* -------------------
Portfolio
 ---------------------*/
(function($, window, document, undefined) {
    "use strict";

    var gridContainer = $('#grid-container-fullwidth'),
        filtersContainer = $('#filters-container-fullwidth'),
        wrap, filtersCallback;

    gridContainer.cubeportfolio({
        defaultFilter: '*',
        animationType: 'fadeOut',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'zoom',
        displayType: 'lazyLoading',
        displayTypeSpeed: 100,
        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 5000
            })
                .done(function(result) {
                    t.updateSinglePage(result);
                })
                .fail(function() {
                    t.updateSinglePage("Error! Please refresh the page!");
                });
        },
        // single page inline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePage Inline content use the following method: this.updateSinglePageInline(yourContent)
        }
    });
    /* add listener for filters */
    if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');
        wrap.on({
            'mouseover.cbp': function() {
                wrap.addClass('cbp-l-filters-dropdownWrap-open');
            },
            'mouseleave.cbp': function() {
                wrap.removeClass('cbp-l-filters-dropdownWrap-open');
            }
        });
        filtersCallback = function(me) {
            wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
            wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
            me.addClass('cbp-filter-item-active');
            wrap.trigger('mouseleave.cbp');
        };
    } else {
        filtersCallback = function(me) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        };
    }
    filtersContainer.on('click.cbp', '.cbp-filter-item', function() {
        var me = $(this);
        if (me.hasClass('cbp-filter-item-active')) {
            return;
        }
        // get cubeportfolio data and check if is still animating (reposition) the items.
        if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
            filtersCallback.call(null, me);
        }
        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function() {});
    });
    /* activate counter for filters */
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function() {
        // read from url and change filter active
        var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
            item;
        if (match !== null) {
            item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
            if (item.length) {
                filtersCallback.call(null, item);
            }
        }
    });
    /* add listener for load more */
    $('.cbp-l-loadMore-button-link').on('click.cbp', function(e) {
        e.preventDefault();
        var clicks, me = $(this),
            oMsg;
        if (me.hasClass('cbp-l-loadMore-button-stop')) {
            return;
        }
        // get the number of times the loadMore link has been clicked
        clicks = $.data(this, 'numberOfClicks');
        clicks = (clicks) ? ++clicks : 1;
        $.data(this, 'numberOfClicks', clicks);
        // set loading status
        oMsg = me.text();
        me.text('LOADING...');
        // perform ajax request
        $.ajax({
            url: me.attr('href'),
            type: 'GET',
            dataType: 'HTML'
        }).done(function(result) {
            var items, itemsNext;
            // find current container
            items = $(result).filter(function() {
                return $(this).is('div' + '.cbp-loadMore-block' + clicks);
            });
            gridContainer.cubeportfolio('appendItems', items.html(),
                function() {
                    // put the original message back
                    me.text(oMsg);
                    // check if we have more works
                    itemsNext = $(result).filter(function() {
                        return $(this).is('div' + '.cbp-loadMore-block' + (clicks + 1));
                    });

                    if (itemsNext.length === 0) {
                        me.text('NO MORE WORKS');
                        me.addClass('cbp-l-loadMore-button-stop');
                    }
                });
        }).fail(function() {
            // error
        });
    });
})(jQuery, window, document);
