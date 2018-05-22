/*********************************************
 [Table of contents]

 1. Magnific PopUp Form
 2. Callback settings
 3. Add and remove class MegaMenu
 4. Breadcrumb pannel
 5. Parallax
 6. Slider Owl-Carousel
 7. Button Slider Owl-Carousel
 8. Scroll up on click button indicator
 9. Responsive equal heights plugin
 10. Animated section
 11. Special effect for section
 12. SVG Fallback
 13. E-mail Ajax Send
 14. Chrome Smooth Scroll
 15. IE Smooth Scroll
 16. Drag images and links
 17. Auto height slider image
 18. Load Preloader
 *********************************************/

$(function() {
	"use strict";

	/* Magnific PopUp Form
	 ********************************************/
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

	/* Callback settings
	 ********************************************/
	$("a[href=#callback]").click(function(){
		$("form#callback .formname").val($(this).data("form"));
	});

	/* Add and remove class MegaMenu
	 ********************************************/
	$("nav ul li ul li:has(a + ul) ").addClass("arrows-tog").addClass("plus-tog");

	$(".sf-mega").find('.mega-sub').clone().insertBefore(".sf-mega");
	$("li:nth-child(4)").children("ul").removeClass("mega-sub").easyPie();

	/* Breadcrumb pannel
	 ********************************************/
	$(".page-title li:last-child").addClass("active");

	/* Parallax
	 ********************************************/
	$.stellar({
		responsive: true
	});

	/* Slider Owl-Carousel
	 ********************************************/
	var owl= $(".slider-top, .slider");
	owl.owlCarousel({
		items: 1,
		loop: false,
		nav: true,
		navText: "",
		autoplay: false,
		autoplayHoverPause: true,
		fluidSpeed: 600,
		autoplaySpeed: 600,
		navSpeed: 600,
		dotsSpeed: 600,
		dragEndSpeed: 600
	});
	$(".next").click(function(){
		owl.trigger('next.owl.carousel');
	})
	$('.prev').click(function(){
		owl.trigger('prev.owl.carousel');
	});

	/* Button Slider Owl-Carousel
	 ********************************************/
	$(".home .button-slider").click(function() {
		$("html, body").animate({ scrollTop: $(".section_2").height() }, "slow");
		return false;
	});

	/* Scroll up on click button indicator
	 ********************************************/
	$(".indicator-container").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

	/* Responsive equal heights plugin
	 ********************************************/
	$(".section-title .section-content .info-item").equalHeights();
	$(".section_3 .section-content .info-item").equalHeights();
	$(".s1-bottom .info-item").equalHeights();
	$(".s2-item").equalHeights();
	$(".s2-item .img-wrap").equalHeights();
	$(".section_2 .service-item h4").equalHeights();
	$(".no-home .service-item-blog h3").equalHeights();
	$(".no-home .service-item-blog p").equalHeights();
	$(".link-partner").equalHeights();
	$(".section-theme-photo .service-item p").equalHeights();
	$(".no-home .service-item h4").equalHeights();

	/* Animated section
	 ********************************************/
	$(".section-title h3").animated("fadeInUp", "fadeOut");
	$(".section-head h2, .section-head p").animated("fadeIn");
	$(".section_1_review .section-head h2").animated("fadeInLeft");
	$(".section_1_review .section-head p").animated("fadeInUp");
	$(".info-item-wrap").animated("zoomIn");
	$(".slider .slide").animated("fadeIn");
	$(".homesect.section_1").animated("fadeIn");
	$(".main-footer .pannel-category h4").animated("fadeInUp");
	$(".main-footer .pannel-category ul").animated("fadeIn");

	//body .no-home
	$(".no-home .content .section-theme h2, .no-home .content .section-theme p, .no-home .content .sec-mission h3").animated("fadeInLeft");
	$(".content article h2, .content article p").animated("fadeInLeft");
	$(".no-home .contacts-top").animated("fadeInUp");
	$(".no-home .first-col").animated("fadeInLeft");

	/* Special effect for section
	 ********************************************/
	//Section Financial Services
	$(".section_4").waypoint(function() {
		$(".s2-item-wrap").each(function(index) {
			var ths = $(this);
			setInterval(function() {
				ths.addClass("on");
			}, 200*index);
		});
	}, {
		offset : "30%"
	});

	//Section Dark (triangles SVG)
	var waypointsvg = new Waypoint({

		element: $(".section_5"),
		handler: function(dir) {

			if (dir === "down") {

				$(".section_5 .tc-item").each(function(index) {
					var ths = $(this);
					setTimeout(function() {
						var myAnimation = new DrawFillSVG({
							elementId: "tc-svg-" + index
						});
						ths.children(".tc-content").addClass("tc-content-on");
					}, 500*index);
				});

			}
			this.destroy();
		},
		offset: '35%'
	});

	//Section Employees
	$(".section_6").waypoint(function() {

		$(".section_6 .team").each(function(index) {
			var ths = $(this);
			setInterval(function() {
				ths.removeClass("team-off").addClass("team-on");
			}, 200*index);
		});

	}, {
		offset : "35%"
	});

	/* SVG Fallback
	 ********************************************/
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	}

	/*** E-mail Ajax Send
	 * Documentation &amp; Example: https://github.com/agragregra/uniMail
	 *****************************************************************/
	$(".callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".success").addClass("visible");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
				$(".success").removeClass("visible");
				$.magnificPopup().close();
			}, 3000);
		});
		return false;
	});

	/* Chrome Smooth Scroll
	 ********************************************/
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {
	}

	/* IE Smooth Scroll
	 ********************************************/
	if(navigator.userAgent.match(/Trident\/7\./)) {
		$("body").on("mousewheel", function () {
			event.preventDefault();

			var wheel_Delta = event.wheelDelta;
			var currentScrollPosition = window.pageYOffset;

			var e = window.event || e;
			var delta = Math.max(-1, Math.min(1, (e.wheelDelta || - e.detail)));

			if(delta < 0){
				window.scrollTo(0, currentScrollPosition - wheel_Delta - 80);
			}
			else{
				window.scrollTo(0, currentScrollPosition - wheel_Delta + 80);
			}

		});
		//keydown
		$("body").keydown(function (e) {

			var currentScrollPosition = window.pageYOffset;

			switch (e.which) {

				case 38: // up
					e.preventDefault(); // prevent the default action (scroll / move caret)
					window.scrollTo(0, currentScrollPosition - 30);
					break;

				case 40: // down
					e.preventDefault(); // prevent the default action (scroll / move caret)
					window.scrollTo(0, currentScrollPosition + 30);
					break;

				default: return; // exit this handler for other keys
			}
		});
	}

	/* Don't drag images and links
	 ********************************************/
	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	/* Auto height section slider
	 ********************************************/
	function heightDetect() {
		$(".home .slide").css("height", $(window).height() - $(".main-head").height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});

});

/* Load Preloader
 ********************************************/
$(window).load(function() {
	"use strict";

	$(".loader").fadeOut();
	$(".loading").delay(400).fadeOut("slow");
});