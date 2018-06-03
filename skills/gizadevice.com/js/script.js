jQuery(function ($)
{
	//Choose Drop Menu
	$('.mobile-header .menu').each(function () {
		var $dropdown = $(this);
		// Add open class on click
		$('.mobile-header .menu .buttons').on('click', function () {

			if ($dropdown.hasClass('active-drop')) {
				$dropdown.removeClass('active-drop');
				$('.body').removeClass('overflow');
			} else {
				$dropdown.addClass('active-drop');
				$('.body').addClass('overflow');
			}
		});
		$('.mobile-header .menu ul li a').on('click', function () {
			$dropdown.removeClass('active-drop');
			$('.body').removeClass('overflow');
		});
		// Outer click
		$(document).on("click", function (event) {
			if ($dropdown !== event.target && !$dropdown.has(event.target).length) {
				$dropdown.removeClass('active-drop');
				$('.body').removeClass('overflow');
			}
		});
	});
	// END Choose Drop Menu

	$('#section-7 .items.smart-contract').click(function ()
	{
		$(this).toggleClass('smart');
	});
	$('#section-7 .items .info .btn_js').click(function ()
	{
		$(this).toggleClass('active');
		$('#section-7 .block_info').toggleClass('open');
	});

	/******************Section 3 NEW ********************/
	$('#section-3 .tab ul.tabs li').click(function (g) {
		var tab = $(this).closest('.tab'),
			index = $(this).closest('li').index();

		tab.find('.tabs_item_default').fadeOut(0);

		tab.find('ul.tabs > li').removeClass('current');
		$(this).closest('li').addClass('current');

		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').fadeOut(0);
		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').fadeIn(600);

		g.preventDefault();
	});
	/****************** END Section 3 NEW ********************/

	$('#section-11 .box .top').click(function ()
	{
		if ($(this).parent('#section-11 .box .item').hasClass('open'))
		{
			$(this).parent('#section-11 .box .item').removeClass('open');
		} else
		{
			$(this).parent('#section-11 .box .item').addClass('open');
		}
	});

	$('#section-5 .slaider').owlCarousel(
		{
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items: 1,
			loop: true,
			nav: true,
			mouseDrag: true,
			touchDrag: true,
			pullDrag: true,
			dots: false,
			smartSpeed: 900,
			autoplay: false,

		});

	$('#section-3 .center .slaider').owlCarousel(
		{
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items: 1,
			loop: true,
			nav: true,
			mouseDrag: false,
			touchDrag: false,
			pullDrag: false,
			dots: false,
			smartSpeed: 900,
			autoplay: false,
		});

	$('#section-6 .wrap-slaider-1 .slaider, #section-6 .wrap-slaider-3 .slaider').owlCarousel(
		{
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items: 4,
			loop: true,
			nav: true,
			mouseDrag: true,
			touchDrag: true,
			pullDrag: true,
			dots: false,
			smartSpeed: 900,
			autoplay: false,
			responsiveClass: true,
			responsive:
				{
					200:
						{
							items: 2

						},
					600:
						{
							items: 2

						},
					1000:
						{
							items: 4

						}
				}
		});

	$('#section-6 .wrap-slaider-2 .slaider').owlCarousel(
		{
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items: 4,
			loop: true,
			nav: true,
			mouseDrag: true,
			touchDrag: true,
			pullDrag: true,
			dots: false,
			smartSpeed: 900,
			autoplay: false,
			responsiveClass: true,
			responsive:
				{
					200:
						{
							items: 2

						},
					600:
						{
							items: 2

						},
					1000:
						{
							items: 3

						}
				}
		});


	var $wrapper = $('.tab-wrapper'),
		$allTabs = $wrapper.find('.tab-content > div'),
		$tabMenu = $wrapper.find('.tab-menu li');

	$tabMenu.each(function (i)
	{
		$(this).attr('data-tab', 'tab' + i);
	});

	$allTabs.each(function (i)
	{
		$(this).attr('data-tab', 'tab' + i);
	});

	$tabMenu.on('click', function ()
	{
		var dataTab = $(this).data('tab'),
			$getWrapper = $(this).closest($wrapper);

		$getWrapper.find($tabMenu).removeClass('active');
		$(this).addClass('active');

		$getWrapper.find($allTabs).hide();
		$getWrapper.find($allTabs).filter('[data-tab=' + dataTab + ']').show();
	});
	//end ready



	// scroll-click
	$(".tab-content, .faq-link").on("click", "a", function (event)
	{
		event.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top - 170;
		$('body,html').animate(
			{
				scrollTop: top
			}, 1800);
		if ($(this).parents('#section-4').hasClass('fag'))
		{
			$('#section-11 .box .item').removeClass('open');
			$('#section-11 ' + id).addClass('open');
		}
		if ($(this).parents('#section-02').hasClass('section-2-down'))
		{
			$('#section-11 .box .item').removeClass('open');
			$('#section-11 ' + id).addClass('open');
		}
	});



	// end

	// scroll
	$(window).scroll(function ()
	{
		$top_scroll = $(this).scrollTop();
		if ($top_scroll >= 8)
		{
			$('#menu').addClass('fixed');
		} else
		{
			$('#menu').removeClass('fixed');
		}

		// block
		$height = $('#menu').innerHeight();
		var w_top = $(window).scrollTop();

		var e_top = $('#section-3').offset().top - $height;
		var e_height = $('#section-3').innerHeight();
		var max_e = e_height + e_top;

		if (w_top > e_top)
		{
			$('#menu').addClass('black');
		} else
		{
			$('#menu').removeClass('black');
		}
		if (w_top > max_e)
		{
			$('#menu').removeClass('black');

			var e_top = $('#section-5').offset().top - $height;
			var e_height = $('#section-5').innerHeight();
			var max_e = e_height + e_top;

			if (w_top > e_top)
			{
				$('#menu').addClass('black');
			} else
			{
				$('#menu').removeClass('black');
			}
			if (w_top > max_e)
			{
				$('#menu').removeClass('black');

				var e_top = $('#section-7').offset().top - $height;
				var e_height = $('#section-7').innerHeight();
				var e_height = e_height + $('#section-8').innerHeight();
				var max_e = e_height + e_top;

				if (w_top > e_top)
				{
					$('#menu').addClass('black');
				} else
				{
					$('#menu').removeClass('black');
				}
				if (w_top > max_e)
				{
					$('#menu').removeClass('black');

					var e_top = $('#section-9 .bottom').offset().top - $height;
					var e_height = $('#section-9 .bottom').innerHeight();
					var max_e = e_height + e_top;

					if (w_top > e_top)
					{
						$('#menu').addClass('black');
					} else
					{
						$('#menu').removeClass('black');
					}
					if (w_top > max_e)
					{
						$('#menu').removeClass('black');

						var e_top = $('#section-11').offset().top - $height;
						var e_height = $('#section-11').innerHeight();
						var max_e = e_height + e_top;

						if (w_top > e_top)
						{
							$('#menu').addClass('black');
						} else
						{
							$('#menu').removeClass('black');
						}
						if (w_top > max_e)
						{
							$('#menu').removeClass('black');
						}
					}
				}
			}
		}
	});
	// end

	$(window).scroll(function ()
	{
		var $sections = $('section.section-scroll');
		$sections.each(function (i, el)
		{
			var top = $(el).offset().top - 100;
			var bottom = top + $(el).height();
			var scroll = $(window).scrollTop();
			var id = $(el).attr('id');
			if (scroll > top && scroll < bottom)
			{
				$('a.active1').removeClass('active1');
				$('a[href="#' + id + '"]').addClass('active1');

			}
		})
	});

	$(".list_menu").on("click", "a", function (event)
	{
		event.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top - 50;
		$('body,html').animate(
			{
				scrollTop: top
			}, 1800);
	});

	$(".road-map-js").on("click", "a", function (event)
	{
		event.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top - 1500;
		$('body,html').animate(
			{
				scrollTop: top
			}, 1800);
	});


	//PopUp
	$('.open-popup-link').magnificPopup(
		{
			type: 'inline',
			midClick: true,
			mainClass: 'mfp-fade'
		});

	$("#lang-menu").hover(
		function ()
		{
			$(this).addClass("cls-border-lang");
			$(this).children().eq(0).addClass("cls-borderbottom-lang");
			$("#lang-menu ul").stop().slideToggle(100);
		},
		function ()
		{
			$(this).removeClass("cls-border-lang");
			$(this).children().eq(0).removeClass("cls-borderbottom-lang");
			$("#lang-menu ul").stop().slideToggle(100);
		}
	);
	//Choose Drop Menu
	$('#mob-lang-menu').each(function () {
		var $dropdown = $(this);
		// Add open class on click
		$('#mob-lang-menu').on('click', function () {
			if ($dropdown.hasClass('cls-border-lang')) {
				$dropdown.removeClass("cls-border-lang");
				$dropdown.children().eq(0).removeClass("cls-borderbottom-lang");
				$("#mob-lang-menu ul").stop().slideToggle(100);
			} else {
				$dropdown.addClass("cls-border-lang");
				$dropdown.children().eq(0).addClass("cls-borderbottom-lang");
				$("#mob-lang-menu ul").stop().slideToggle(100);
			}
		});
		// Outer click
		$(document).on("click", function (event) {
			if ($dropdown !== event.target && !$dropdown.has(event.target).length) {
				if ($dropdown.hasClass('cls-border-lang')) {
					$dropdown.removeClass("cls-border-lang");
					$dropdown.children().eq(0).removeClass("cls-borderbottom-lang");
					$("#mob-lang-menu ul").stop().slideToggle(100);
				}
			}
		});
	});
	// END Choose Drop Menu
	/// click languages
	$("#lang-menu ul li, #mob-lang-menu ul li").on("click", function ()
	{
		//select lang and apply changes
		$lang = $(this).html();
		$("#lang-menu div p, #mob-lang-menu div p").html($lang);
	});

	$("#section-10 .chart .item").hover(
		function ()
		{
			$index = $(this).parent(".items").index();
			$(this).parent(".items").addClass("action");
			$('#section-10 .chart-info .info').eq($index).addClass('open');
		},
		function ()
		{
			$(this).parent(".items").removeClass("action");
			$('#section-10 .chart-info .info').eq($index).removeClass('open');
		});




//////////////////////////////////////////////////////////////////////
//PROGRESS BAR when scroll block
	var marker = true;
	var is_progressbar_started = 0;
	//запускаем анимацию индикатора прогрессбара сразу без условий
	if (is_progressbar_started === 0) {
		is_progressbar_started = 1;
		moveProgressBar();
	}
	$(window).resize(function () {
		if (is_progressbar_started === 0) {
			is_progressbar_started = 1;
			moveProgressBar();
		}
	});
	$(document).on('click', '#section-9', function () {
		if (is_progressbar_started === 0) {
			is_progressbar_started = 1;
			moveProgressBar();
		}
	});
	// SIGNATURE PROGRESS
	function moveProgressBar() {

		//Counter
		$('.progress-counter-number').each(function () {
			var decimalCorrect = 10*10;//знаков после запятой выраженных в количестве 10(нолей)
			var $this = $(this);
			var getPercent = ($('.progress-wrap').data('progress-percent') / 100);
			var getProgressWrapWidth = $('.progress-wrap').width();
			var progressTotal = getPercent * getProgressWrapWidth;
			var countTo = $this.attr('data-count');
			var koeficientZamedleniya =1.2;
			var animationLength = ((countTo*100)/koeficientZamedleniya) / decimalCorrect ; //2500;
			console.log(countTo);
			console.log(animationLength);
			console.log($this.parent().parent().find('.progress-bar'));
			// on page load, animate percentage bar to data percentage length
			// .stop() used to prevent animation queueing
			$this.parent().parent().find('.progress-bar').stop().animate({
				left: progressTotal
			}, animationLength);
			$({countNum: $this.text()}).animate({
					countNum: countTo
				},
				{
					duration: animationLength + animationLength * 0.1, /*если к animationLength что-то приплусовать время, то когда индикатор дойдет до конца, то проценты еще будут крутиться т.к. время их нарастания будет дольше чем время анимации индикатора */
					easing: 'linear',
					step: function () {
//                            console.log('step', this.countNum);
						$this.text(Math.floor(this.countNum) / decimalCorrect);/*изменение дробной части прогрессбара*/
					},
					complete: function () {
						$this.text(this.countNum / decimalCorrect);/*изменение дробной части прогрессбара*/
						//alert('finished');
					}
				});
		});
		//END Counter

		marker = false;
	}

	var offset = 530;
	$(window).scroll(function () {
		var scrolltop = $(this).scrollTop();
		$('.progress-wrap').each(function () {
			if (scrolltop >= $(this).offset().top - offset) {
				if (marker) {
					if (is_progressbar_started === 0) {
						is_progressbar_started = 1;
						moveProgressBar();
					}
				}
			}
		});
	});
//END PROGRESS BAR when scroll block


	$(function () {
// setTimout is not necessary
			setTimeout(function () {

				$('.recaptcha').each(function () {
					grecaptcha.render(this.id, {
						'sitekey': '6LePsT8UAAAAAMltMUYkdyKbEdOhJlm6zNfEvzBr',
						"theme": "white",
						'callback': showNextButtonIcoForm1
					});
				});
			}, 2000);
		}
	);
	/*pop up form 1*/
	$(document).ready(function () {
		$('.popup-with-form').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#name',
			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function () {
					if ($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#email';
					}
				}
			}
		});
	});

	function getFormObj(formId) {
		var formObj = {};
		var inputs = $('#' + formId).serializeArray();
		$.each(inputs, function (i, input) {
			formObj[input.name] = input.value;
		});
		return formObj;
	}
	function IcoForm1Check(){
		var formData = getFormObj('ico-form1');
		var checkboxes = {};

		var errorsObj = {};
		console.log('???', $('#g-recaptcha1').is(':checked'));
		var hasError = 0;
		if (formData.email == '') {
			$('#ico-form1 input:text[name="email"]').addClass('warningBorder');
			hasError = 1;
		} else {
			$('#ico-form1 input:text[name="email"]').removeClass('warningBorder');
		}

		if (formData.confirm_not_us != 'on') {
			$('#ico-form1 input:checkbox[name="confirm_not_us"]').parent().addClass('warningText');
			hasError = 1;
		} else {
			$('#ico-form1 input:checkbox[name="confirm_not_us"]').parent().removeClass('warningText');
		}

		if (formData.confirm_not_prc != 'on') {
			$('#ico-form1 input:checkbox[name="confirm_not_prc"]').parent().addClass('warningText');
			hasError = 1;
		} else {
			$('#ico-form1 input:checkbox[name="confirm_not_prc"]').parent().removeClass('warningText');
		}

		if (formData.confirm_ico_taa != 'on') {
			$('#ico-form1 input:checkbox[name="confirm_ico_taa"]').parent().addClass('warningText');
			hasError = 1;
		} else {
			$('#ico-form1 input:checkbox[name="confirm_ico_taa"]').parent().removeClass('warningText');
		}

		if (formData.confirm_ico_pp != 'on') {
			$('#ico-form1 input:checkbox[name="confirm_ico_pp"]').parent().addClass('warningText');
			hasError = 1;
		} else {
			$('#ico-form1 input:checkbox[name="confirm_ico_pp"]').parent().removeClass('warningText');
		}

		if (formData.confirm_ico_wp != 'on') {
			$('#ico-form1 input:checkbox[name="confirm_ico_wp"]').parent().addClass('warningText');
			hasError = 1;
		} else {
			$('#ico-form1 input:checkbox[name="confirm_ico_wp"]').parent().removeClass('warningText');
		}

		if (hasError == 0) {
			console.log('goodddd');
			icoForm1NextHandler(formData);
		}
	}
	function showNextButtonIcoForm1() {
		$('#ico-form1 .ico-form-submit').show();
	}
	function sendIcoForm1(form)
	{
		if (form)
		{
			$.post('/helper/ico-form', {
				'form[is_check]': form.is_check,
				'form[email]': form.email,
				'form[etherium_address]': form.etherium_address,
				'form[confirm_not_us]': form.confirm_not_us,
				'form[confirm_not_prc]': form.confirm_not_prc,
				'form[confirm_ico_taa]': form.confirm_ico_taa,
				'form[confirm_ico_pp]': form.confirm_ico_pp,
				'form[confirm_ico_wp]': form.confirm_ico_wp,
			}, function (d)
			{
				return true;
			}, 'json');
		}
		return false;
	}
	function icoForm1NextHandler(form) {
//    if (sendIcoForm1(form)) {
		$('#popup-ico-contribute .ico-widget-form').hide();
		$('#popup-ico-contribute .ico-widget-calc').show();
//    }
		sendIcoForm1(form);
	}

	$(document).on('click', '#ico-form1 .ico-form-submit', function () {
		IcoForm1Check();
	});


	function onloadRecaptcha()
	{
		grecaptcha.render('recaptcha-top', {
			'sitekey' : '6LePsT8UAAAAAMltMUYkdyKbEdOhJlm6zNfEvzBr',
			'callback' : callTopRecaptcha
		});
		grecaptcha.render('recaptcha-bottom', {
			'sitekey' : '6LePsT8UAAAAAMltMUYkdyKbEdOhJlm6zNfEvzBr',
			'callback' : callBottomRecaptcha
		});
	}

	//Video
	window.onload = function () {

		//Video Customization
		$("#section-2 .vjs-big-play-button").on("click", function () {
			$("#section-2").css('z-index', '155');
			$("#section-2 .wrap").css('display', 'none');
		});

		if (document.getElementById("main-video")) {
			var Video = {
				player: videojs("main-video"),

				togglePlay: function () {
					if (this.player.paused()) {
						this.player.play();
					} else {
						this.player.pause();
					}
				},

				lowerVolume: function () {
					this.player.volume(this.player.volume() - 0.05);
				},

				raiseVolume: function () {
					this.player.volume(this.player.volume() + 0.05);
				},

				toggleMute: function () {
					this.player.muted(!this.player.muted());
				},

				restartVideo: function () {
					this.player.currentTime(0);
				},

				endVideo: function () {
					this.player.currentTime(this.player.duration());
				},

				seekVideo: function (value) {
					this.player.currentTime((this.player.duration() * value) / 100);
				},

				skipVideo: function (value) {
					this.player.currentTime(this.player.currentTime() + value);
				},

				frameForward: function () {
					frameTime = 1 / 29;

					if (this.paused()) {
						this.player.currentTime(Math.min(this.player.duration(), this.player.currentTime() + frameTime));
					}
				},

				frameBack: function () {
					frameTime = 1 / 29;

					if (this.paused()) {
						this.player.currentTime(Math.max(0, this.player.currentTime() - frameTime));
					}
				}
			};

			// key handlers
			window.addEventListener("keydown", function (event) {
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
		//Note: show big play button at the end
		var player = videojs('main-video');
		player.on("ended", function () {
			player.hasStarted(false);
			$("#section-2").css('z-index', '149');
			$("#section-2 .wrap").css('display', 'block');
		});

	};

	//Video

//////////////////////////////////////////////////////////////////////
}); // jQuery END


var Giza = {
	t: {},
	subscribe: function (subscriber)
	{
//		$.post('/mail-chimp/subscribe', {
		$.post('/helper/subscribe', {
			'MailChimpForm[email]': subscriber.email,
			'MailChimpForm[is_check]': subscriber.is_check,
			'MailChimpForm[token]': subscriber.token
		}, function (d)
		{
			if (d.e == true)
			{
				alert(d.m);
				grecaptcha.reset();
				return false;
			}

			$(".white-popup").addClass("visible");
			setTimeout(function () {
				// Done Functions
				$(this).trigger("reset");
				$(".white-popup").removeClass("visible");
				$.magnificPopup.close();
			}, 2000);

			/*$.magnificPopup.close();*/
			subscriber.cb();
			return true;
		}, 'json');
	}
};

/**
 * Calcback for top reCaptcha
 * @param string token reCaptcha
 * @returns bool
 */
function callTopRecaptcha(token)
{
	if (token)
	{
		Giza.subscribe({
			email: $('#subscribe_top_email').val(),
			is_check: $('#subscribe_top_is_check').is(':checked') == true ? 1 : 0,
			token: token,
			cb: function () {
				$('#subscribe_top_email').val('')
			}
		});

		return true;
	}
	return false;
}

/**
 * Calcback for bottom reCaptcha
 * @param string token reCaptcha
 * @returns bool
 */
function callBottomRecaptcha(token)
{
	if (token)
	{
		Giza.subscribe({
			email: $('#subscribe_bottom_email').val(),
			is_check: $('#subscribe_bottom_is_check').is(':checked') == true ? 1 : 0,
			token: token,
			cb: function () {
				$('#subscribe_bottom_email').val('')
			}
		});

		return true;
	}
	return false;
}



/** Timer start */
function CountdownTimer(elm,tl,mes){
	this.initialize.apply(this,arguments);
}
CountdownTimer.prototype={
	initialize:function(elm,tl,mes) {
		this.elem = document.getElementById(elm);
		this.tl = tl;
		this.mes = mes;
	},countDown:function(){
		var timer='';
		var today=new Date();
		var day=Math.floor((this.tl-today)/(24*60*60*1000));
		var hour=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*60*1000));
		var min=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*1000))%60;
		var sec=Math.floor(((this.tl-today)%(24*60*60*1000))/1000)%60%60;
		if (day<10){
			day = '0'+day;
		};
		if (hour<10){
			hour = '0'+hour;
		};
		if (min<10){
			min = '0'+min;
		};
		if (sec<10){
			sec = '0'+sec;
		};
		var me=this;


		if( ( this.tl - today ) > 0 ){
			timer += '<div class="number-wrapper"><span class="number day">'+day+'</span><div class="caption">Days</div></div>';
			timer += '<div class="number-wrapper"><span class="number hour">'+hour+'</span><div class="caption">Hours</div></div>';
			timer += '<div class="number-wrapper"><span class="number min">'+this.addZero(min)+'</span><div class="caption">Minutes</div></div><div class="number-wrapper"><span class="number sec">'+this.addZero(sec)+'</span><div class="caption">Seconds</div></div>';
			this.elem.innerHTML = timer;
			tid = setTimeout( function(){me.countDown();},10 );
		}else{
			this.elem.innerHTML = this.mes;
			return;
		}
	},addZero:function(num){ return ('0'+num).slice(-2); }
}
function CDT(){
	// Set countdown limit
	var tl = new Date('2020/12/31 00:00:00');

	// You can add time's up message here
	var timer = new CountdownTimer('CDT',tl,'<div class="number-wrapper"><span class="number end">Time is over!!!</span></div>');
	timer.countDown();
}
window.onload=function(){
	CDT();
}
/** Timer end */