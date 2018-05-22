/* Table of Content 
1. TOP BAR SEARCH
2. HOME BANNER
3. WELCOME BANNER
4. ISOTOPE GALLERY ELITE
5. FILTERABLE START
6. PRETTY PHOTO
7. TAB SLIDER
8. TESTIMONIALS STYLE 1
9. TESTIMONIALS STYLE 2
10. ISOTOPE GALLERY CLASSIC
11. BLOG BANNER
12. SIDEBAR RECENT PROJECT
13. EQUALHEIGHTS
14. VIDEO SECTION LIGHTBOX
15. PORTFOLIO
End of Table of Conten*/

jQuery(document).ready(function($) {
    "use strict";
    //For Pretty Photo Validation
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });

    //TOP BAR SEARCH
    if ($('#search-push').length) {
        $('#search-push').on('click', function() {
            var $navigacia = $('#cp-slide-search');
            var $val = ($navigacia.width());
            if ($val == '0') {
                $val = '100%';
                $('#cp-slide-search form input[type="text"]').css({
                    padding: '0 30px',
                });
            } else {
                $val = '0';
                $('#cp-slide-search form input[type="text"]').css({
                    padding: '0',
                    transition: 'all ease-in-out 0.8s',
                });

            }
            $navigacia.animate({
                width: $val
            }, 600)
        });
    }

    //HOME BANNER
    if ($('#home-banner').length) {
        $("#home-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: false,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    //WELCOME BANNER
    if ($('#welcome-banner').length) {
        $("#welcome-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    //ISOTOPE GALLERY ELITE
    if ($(".cp-gallery-metro-2 .isotope").length) {
        var $container = $('.cp-gallery-metro-2 .isotope');
        $container.isotope({
            itemSelector: '.item',
            transitionDuration: '0.6s',
            masonry: {
                columnWidth: $container.width() / 12
            },
            layoutMode: 'masonry'
        });
        $(window).resize(function() {
            $container.isotope({
                masonry: {
                    columnWidth: $container.width() / 12
                }
            });
        });
    }

    //FILTERABLE START
    if ($('.portfolioContainer').length) {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').on('click',function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    //PRETTY PHOTO
    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }

    //TAB SLIDER
    if ($('#tab-slider').length) {
        $("#tab-slider").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    //TESTIMONIALS STYLE 1
    if ($('#testimonial-style-1').length) {
        $("#testimonial-style-1").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    //TESTIMONIALS STYLE 2
    if ($('.bxslider').length) {
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    //ISOTOPE GALLERY CLASSIC	
    if ($(".filter-gallery-metro-1 .isotope").length) {
        var $container = $('.filter-gallery-metro-1 .isotope');
        $container.isotope({
            itemSelector: '.item',
            transitionDuration: '0.6s',
            masonry: {
                columnWidth: 3
            },
            layoutMode: 'masonry'
        });

        $(window).resize(function() {
            $container.isotope({
                masonry: {
                    columnWidth: $container.width() / 12
                }
            });
        });

    }


    //BLOG BANNER
    if ($('#blog-banner').length) {
        $("#blog-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    //SIDEBAR RECENT PROJECT
    if ($('#recent-project').length) {
        $("#recent-project").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }

    if ($('.single-project').length) {
        $('.single-project').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }

    if ($('#defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('#defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }

    //EQUALHEIGHTS
    $(".services-style-1 .services-style-1-box").equalHeights();
    $(".skill-section .equal-h").equalHeights();



    //VIDEO SECTION LIGHTBOX
    $('#video-lightbox').cubeportfolio({
        gridAdjustment: 'alignCenter',
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxShowCounter: false
    });

    //Function End
});


/* -------------------
 PORTFOLIO
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
