$(function() {

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	// jQuery MeanMenu
	jQuery('#mobile-nav').meanmenu();

	//Portfolio Isotope
	var $window = $(window);

	function portfolioInit() {
		var portfolio = $('.portfolio-items'),
			portfolioItems = portfolio.children('.portfolio-item'),
			filters = $('.portfolio-filter li'),
			gridSize = 10000,
			gridSizeIndex = 0,
			gridSizeItem,
			ratio = portfolio.data('ratio') ? portfolio.data('ratio').split('/') : [4,3];

		ratio = ratio[1]/ratio[0];

		if(!portfolio.length) return false;

		portfolioItems.each(function(index) {
			if($(this).outerWidth() < gridSize) {
				gridSize = $(this).outerWidth();
				gridSizeIndex = index;
			}
		});

		gridSizeItem = portfolioItems.eq(gridSizeIndex);
		gridSizeItem.addClass('grid-sizer');

		$window.on('resized', function() {
			gridSize = gridSizeItem.outerWidth();

			portfolioItems.each(function() {
				var self = $(this);

				self.css({height: gridSize * ratio});

				if(self.hasClass('height2')) {
					self.css({height: gridSize * ratio * 2});
				}

				if(self.hasClass('height3')) {
					self.css({height: gridSize * ratio * 3});
				}

				if(self.hasClass('height4')) {
					self.css({height: gridSize * ratio * 4});
				}

				if(self.hasClass('height5')) {
					self.css({height: gridSize * ratio * 5});
				}
			});

			portfolio.isotope('layout');
		});

		portfolio.isotope({
			layoutMode: 'packery',
			transitionDuration: '1s',
			getSortData: {
				category: '[data-category]'
			},
			packery: {
				columnWidth: '.grid-sizer'
			},
			percentPosition: true
		});

		portfolio.imagesLoaded().progress(function() {
			portfolio.isotope('layout');
		});

		filters.on('click', function(e) {
			e.preventDefault();

			var self = $(this),
				option = self.data('category');

			filters.removeClass('active');
			self.addClass('active');

			var search = option ? function() {
				var $item = $(this),
					name = $item.data('category') ? $item.data('category') : '';
				return name.match(new RegExp(option));
			} : '*';

			portfolio.isotope({filter : search});
		});
	};
	portfolioInit();

	//EQUALHEIGHTS
	$(".tc-item span").equalHeights();
	/*$(".testim-desc p").equalHeights();*/

	//Select Custom Menu
	$('select').each(function(){
		var $this = $(this), numberOfOptions = $(this).children('option').length;

		$this.addClass('select-hidden');
		$this.wrap('<div class="select"></div>');
		$this.after('<div class="select-styled"></div>');

		var $styledSelect = $this.next('div.select-styled');
		$styledSelect.text($this.children('option').eq(0).text());

		var $list = $('<ul />', {
			'class': 'select-options'
		}).insertAfter($styledSelect);

		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				text: $this.children('option').eq(i).text(),
				rel: $this.children('option').eq(i).val()
			}).appendTo($list);
		}

		var $listItems = $list.children('li');

		$styledSelect.click(function(e) {
			e.stopPropagation();
			$('div.select-styled.active').not(this).each(function(){
				$(this).removeClass('active').next('ul.select-options').hide();
			});
			$(this).toggleClass('active').next('ul.select-options').toggle();
		});

		$listItems.click(function(e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass('active');
			$this.val($(this).attr('rel'));
			$list.hide();
			//console.log($this.val());
		});

		$(document).click(function() {
			$styledSelect.removeClass('active');
			$list.hide();
		});

	});


	// GOOGLE MAPS API V3
	// https://developers.google.com/maps/
	// https://developers.google.com/maps/documentation/javascript/examples/
	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	var map;
	var image = 'img/search-map.png';
	// Sites
	var vinnitca = new google.maps.LatLng(49.234734,28.4696339);
	var sweeden = new google.maps.LatLng(59.879368, 14.252522);
	var usa = new google.maps.LatLng(39.960473, -75.180525);

	function initialize() {
		directionsDisplay = new google.maps.DirectionsRenderer();
		var ukraine = new google.maps.LatLng(50.071486, 14.433346);
		var mapOptions = {
			zoom:3,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: ukraine
		};
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var vinnitcaMarker = new google.maps.Marker({
			position: vinnitca,
			map: map,
			icon: image,
			title: 'Delight Commerce'
		});
		var sweedenMarker = new google.maps.Marker({
			position: sweeden,
			map: map,
			icon: image,
			title: 'Delight Commerce'
		});
		var usaMarker= new google.maps.Marker({
			position: usa,
			map: map,
			icon: image,
			title: 'Delight Commerce'
		});

		directionsDisplay.setMap(map);
		// Enables Distance Calc
		google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
			computeTotalDistance(directionsDisplay.directions);
		});
	}

	function calcRoute() {
		var start = document.getElementById('start').value;
		var end = document.getElementById('end').value;
		var request = {
			origin:start,
			destination:end,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		directionsService.route(request, function(response, status) {
			if (status == google.maps.DirectionsStatus.OK) {
				directionsDisplay.setDirections(response);
			}
		});
	}

	function computeTotalDistance(result) {
		var total = 0;
		var myroute = result.routes[0];
		for (i = 0; i < myroute.legs.length; i++) {
			total += myroute.legs[i].distance.value;
		}
		total = total / 1000.
		document.getElementById("total").innerHTML = total + " km";
	}

	google.maps.event.addDomListener(window, 'load', initialize);


	//Counter Numbers
	$(".tg-counter").waypoint(function () {
		/*$({blurRadius: 5}).animate({blurRadius: 0}, {
			duration: 1200,
			easing: 'swing',
			step: function() {
				$(".tg-counter .tg-second").css({
					"-webkit-filter": "blur("+this.blurRadius+"px)",
					"filter": "blur("+this.blurRadius+"px)"
				});
			}
		});*/
		var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(' ');
		$(".tg-counter .tg-second").each(function() {
			var tcount = $(this).data("count");
			$(this).animateNumber({ number: tcount,
					easing: 'easeInQuad',
					"font-size": "20px",
					numberStep: comma_separator_number_step},
				1400);
		});
		this.destroy();
	},{
		offset: '70%'
	});

	//Carousel Slider
	if ($('.bxslider').length) {
		$('.bxslider').bxSlider({
			captions: true,
			auto: true
		});
	}

	// Mobile menu
	$("#menu").mmenu({
		extensions		: [
			'widescreen',
			'theme-white',
			'effect-menu-slide',
			'pagedim-black',
			"effect-menu-zoom",
			"effect-listitems-slide"
		],
		navbar: {
			title: "Menu"
		}
	});

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
	});
	var api = $("#menu").data("mmenu");
	api.bind("closed", function () {
		$(".toggle-mnu").removeClass("on");
	});
	var headerH = $('.header-area').height();
	$( ".mm-menu" ).css( "margin-top", headerH + "px" );

});