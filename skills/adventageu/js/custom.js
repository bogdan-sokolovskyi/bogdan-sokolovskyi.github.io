$(function() {

	// Mobile menu
	$("#menu").mmenu({
		extensions: [
			'widescreen',
			'theme-white',
			'effect-menu-slide',
			'pagedim-black',
			"effect-menu-zoom",
			"effect-listitems-slide"
		],

		offCanvas: {
			position: 'left',
			zposition: 'front',
		},

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


	// Owl Slider callings
	function footerSlider() {
		var owl =$("#client-slider");
		owl.owlCarousel({
		itemsCustom : [
			[0, 1],
			[480, 2],
			[600, 2],
			[768, 3],
			[992, 3],
			[1200, 4],
			[1400, 5],
			[1590, 6]
		],
		autoPlay : true,
		minSlides: 1,
		moveSlides:1,
		loop:true,
		autoWidth:true,
		responsive:true,
		controls: false,
		pagination: false,
		navigation: false,
		});
		$(".about-next").on('click',function(){
			owl.trigger('owl.next');
		});
		$(".about-prev").on('click',function(){
			owl.trigger('owl.prev');
		});
	}
	footerSlider();

	var fixOwl = function(){
		var $stage = $('.owl-stage'),
			stageW = $stage.width(),
			$el = $('.owl-item'),
			elW = 0;
		$el.each(function() {
			elW += $(this).width()+ +($(this).css("margin-right").slice(0, -2))
		});
		if ( elW > stageW ) {
			$stage.width( elW );
		};
	};

	// Owl Slider callings
	function videoSlider() {
		var owl =$("#video-slider");
		owl.owlCarousel({
			itemsCustom : [
				[0, 1],
				[480, 1],
				[600, 1],
				[768, 2],
				[992, 3],
				[1200, 3],
				[1400, 3],
				[1590, 3]
			],
			autoPlay : false,
			minSlides: 1,
			moveSlides:1,
			loop:true,
			autoWidth: true,
			responsive: true,
			controls: false,
			pagination: false,
			navigation: false,
			onInitialized: fixOwl,
			onRefreshed: fixOwl
		});
		$(".about-next").on('click',function(){
			owl.trigger('owl.next');
		});
		$(".about-prev").on('click',function(){
			owl.trigger('owl.prev');
		});
	}
	videoSlider();


	$('.open-popup-link').magnificPopup({
		type: 'inline',
		midClick: true,
		mainClass: 'mfp-fade'
	});
	$('.open-popup-link2').magnificPopup({
		type: 'inline',
		midClick: true,
		mainClass: 'mfp-fade'
	});
	$('.open-popup-link3').magnificPopup({
		type: 'inline',
		midClick: true,
		mainClass: 'mfp-fade'
	});

	//GET MATCHED POPUP
	setTimeout(function(){$('.matched-popup').fadeIn().css({
		"transition": "all 2s ease",
		"transform": "scale(1)",
		"transform-origin": "center center"
	});}, 2000);
	setTimeout(function(){$('.matched-popup .rectangle').fadeIn().css({
		"top": "-8px",
		"transition": "all 1s ease"
	});}, 4000);
	$('.matched-close').on('click',function(){
		$('.matched-popup').css({"display": "none"});
	});


	//Choose Drop Menu
	$('.cityChoose').each(function(){
		var $dropdown = $(this);
		// Add open class on click
		$('.cityChoose .click-text').on('click',function(){
			if($dropdown.hasClass('active-drop')){
				$dropdown.removeClass('active-drop');
			} else{
				$dropdown.addClass('active-drop');
			}
		});
		$('.cityChoose-close').on('click',function(){
			$dropdown.removeClass('active-drop');
		});
		// Outer click
		$(document).on("click", function(event){
			if($dropdown !== event.target && !$dropdown.has(event.target).length){
				$dropdown.removeClass('active-drop');
			}
		});
	});
	// END Choose Drop Menu

	//TOP SEARCH
	$(".top-select2.size-1").select2({ placeholder: 'Buy, sell or rent'});
	$(".top-select2.size-2").select2({ placeholder: 'Select'});
	$(".top-select2.size-3").select2();

	//SEARCH SIDEBARE
	$(".js-select2.select-1").select2();
	$(".js-select2.select-2").select2({ placeholder: 'Family house'});
	$(".js-select2.select-3").select2({ placeholder: '$250,000'});
	$(".js-select2.select-4").select2({ placeholder: 'ASAP'});
	$(".js-select2.select-5").select2({ placeholder: '17, East Squire Drive'});

	//PopUp Profile
	$(".form-menu-select.account1").select2({		placeholder: 'I’m a (an)*'	});

	//Tab PopUP
	var $wrapper = $('.tab-wrapper'),
		$allTabs = $wrapper.find('.tab-content > div'),
		$tabMenu = $wrapper.find('.tab-menu li');
	$allTabs.not(':first-of-type').hide();
	$tabMenu.filter(':first-of-type').find(':first').width('100%')
	$tabMenu.each(function(i) {
		$(this).attr('data-tab', 'tab'+i);
	});
	$allTabs.each(function(i) {
		$(this).attr('data-tab', 'tab'+i);
	});
	$tabMenu.on('click', function() {
		var dataTab = $(this).data('tab'),
			$getWrapper = $(this).closest($wrapper);
		$getWrapper.find($tabMenu).removeClass('active');
		$(this).addClass('active');
		$getWrapper.find($allTabs).hide();
		$getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
	});


	//Video Slider
	window.onload = function(){
		if (document.getElementsByClassName("main-video")) {
			var Video = {
				player : videojs("main-video"),

				togglePlay : function () {
					if (this.player.paused()) {
						this.player.play();
					} else {
						this.player.pause();
					}
				},

				lowerVolume : function () {
					this.player.volume(this.player.volume() - 0.05);
				},

				raiseVolume : function () {
					this.player.volume(this.player.volume() + 0.05);
				},

				toggleMute : function () {
					this.player.muted(!this.player.muted());
				},

				restartVideo : function () {
					this.player.currentTime(0);
				},

				endVideo : function () {
					this.player.currentTime(this.player.duration());
				},

				seekVideo : function (value) {
					this.player.currentTime((this.player.duration() * value) / 100);
				},

				skipVideo : function (value) {
					this.player.currentTime(this.player.currentTime() + value);
				},

				fullscreen : function () {
					this.player.requestFullscreen();
				},

				frameForward : function () {
					frameTime = 1 / 29;

					if (this.paused()) {
						this.player.currentTime(Math.min(this.player.duration(), this.player.currentTime() + frameTime));
					}
				},

				frameBack : function () {
					frameTime = 1 / 29;

					if (this.paused ()) {
						this.player.currentTime(Math.max(0, this.player.currentTime() - frameTime));
					}
				}
			};

			// key handlers
			window.addEventListener("keydown", function(event) {
				if (event.target.tagName.toLowerCase() !== 'input' &&
					event.target.tagName.toLowerCase() !== 'textarea') {
					switch (event.keyCode) {
						case 75: // k
							Video.togglePlay();
							break;
						case 32: // space
							Video.togglePlay();
							break;
						case 37: // left arrow
							Video.skipVideo(-5);
							break;
						case 74: // j
							Video.skipVideo(-10);
							break;
						case 39: // right arrow
							Video.skipVideo(5);
							break;
						case 76: // l
							Video.skipVideo(10);
							break;
						case 70: // f
							Video.fullscreen();
							break;
						case 36: // home
							Video.restartVideo();
							break;
						case 35: // end
							Video.endVideo();
							break;
						case 38: // up arrow
							Video.raiseVolume();
							break;
						case 40: // down arrow
							Video.lowerVolume();
							break;
						case 190: // .
							Video.frameForward();
							break;
						case 188: // ,
							Video.frameBack();
							break;
						case 77: // m
							Video.toggleMute();
							break;
						case 48: // 0
							Video.restartVideo();
							break;
						case 49: // 1
							Video.seekVideo(10);
							break;
						case 50: // 2
							Video.seekVideo(20);
							break;
						case 51: // 3
							Video.seekVideo(30);
							break;
						case 52: // 4
							Video.seekVideo(40);
							break;
						case 53: // 5
							seekVideo(50);
							break;
						case 54: // 6
							Video.seekVideo(60);
							break;
						case 55: // 7
							Video.seekVideo(70);
							break;
						case 56: // 8
							Video.seekVideo(80);
							break;
						case 57: // 9
							Video.seekVideo(90);
							break;
						default:
							return;
					}
				}
			}, true);
		}
	};


	//Resize Top Background
	function heightDetect() {
		$(".area").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});

	//Sticky Search Panel
	function fixedHeaders() {
		var fix = $(".fixit");
		var el = $(".area"),
			offset = el.offset(),
			elHeight = el.height(),
			scrollTop = $(window).scrollTop();
		if ((offset.top < scrollTop - elHeight)) {
			fix.addClass('fixedElement');
		}
		if (scrollTop <= elHeight) {
			fix.removeClass('fixedElement');
		}
	}
	$(window).scroll(fixedHeaders).trigger("scroll");
	//END Sticky Search Panel



});