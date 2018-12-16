(function(){
	'use strict';

	//On Scroll Functionality

	$(window).scroll( () => {
		if(window.screen.width > 767){
			let windowTop = $(window).scrollTop();

			windowTop > 10 ? $('header').addClass('headerShadow') : $('header').removeClass('headerShadow');
			windowTop > 10 ? $('.header-menu ul').css('top','100px') : $('.header-menu ul').css('top','130px');
		}
	});


	//Smooth Scrolling Using Navigation Menu
	$('.header a[href*="#"]').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		},500);
		e.preventDefault();
	});


	//Start Video YouTube
	$(".youtube").each(function() {
		// Based on the YouTube ID, we can easily find the thumbnail image
		$(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
		// Overlay the Play icon to make it look like a video player
		$(this).append($('<div/>', {'class': 'play'}));
		$(document).delegate('#'+this.id, 'click', function() {
			// Create an iFrame with autoplay set to true
			var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1"; //&mute=1
			if ($(this).data('params')) iframe_url+='&'+$(this).data('params');
			// The height and width of the iFrame should be the same as parent
			var iframe = $('<iframe/>', { 'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })
			// Replace the YouTube thumbnail with YouTube HTML5 Player
			$(this).replaceWith(iframe);
		});
	});
	$(".youtube .play").append('<i class="fa fa-youtube-play"></i>');
	//End Start Video YouTube


	//reviews desktope
	let settings = {
		slideWidth: 380,
		slideMargin: 6,
		minSlides: 1,
		maxSlides: 3,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 3,
	};
	$('.bxslider-ul').bxSlider(settings);

	//MOB TESTIMONIAL
	let testimonials = {
		//slideWidth: 410,
		slideMargin: 0,
		minSlides: 1,
		maxSlides: 1,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 1,
	};
	$('.bxslider-mob-ul').bxSlider(testimonials);
	//END MOBILE SLIDER

	let partners = {
		//slideWidth: 400,
		slideMargin: 0,
		minSlides: 1,
		maxSlides: 1,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 1,
		nextText: '',
		prevText: '',
	};
	$('.speakersM').bxSlider(partners);

	let sponsors = {
		slideWidth: 400,
		slideMargin: 0,
		minSlides: 2,
		maxSlides: 2,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 1,
		nextText: '',
		prevText: '',
	};
	$('.partners-mob').bxSlider(sponsors);

	/*EqualHeights*/
	window.onload = function(){
		$('.speakersM-item .description').equalHeights();
	};

		//COUNTER DATA
		const countdown = document.querySelector('#countdown');
		const countdownM = document.querySelector('#countdownM');

		function countData(countdown){
			const launchDate = new Date('Dec 1, 2018 10:00:00').getTime();
			const intvl = setInterval(() => {
				const now = new Date().getTime();
				const distance = launchDate - now;
				// Time calculation
				const days = Math.floor(distance / (1000 * 60 * 60 * 24));
				const hours = Math.floor(
					(distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
				);
				const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				/*const seconds = Math.floor((distance % (1000 * 60)) / 1000);*/

				countdown.innerHTML = `
  <div><p>${(days < 10 ? '0' : '') + days}<span>Дней</span></p></div>
  <div><p>${(hours < 10 ? '0' : '') + hours}<span>Часов</span></p></div>
  <div><p>${(mins < 10 ? '0' : '') + mins}<span>Минут</span></p></div>
  `;
				// If launch date is reached
				if (distance < 0) {
					// Stop countdown
					clearInterval(intvl);
				}
			}, 1000);
		}
		window.screen.width > 767 ? countData(countdown) : countData(countdownM);



	//SHOW MORE
	$(".speakers-item").slice(0, 5).show();
	$("#load-more").on('click', function (e) {

		if ($(".speakers-item:hidden").length == 0) {
			$(this).css('display', 'none');
		}
		e.preventDefault();
		$(".speakers-item:hidden").slice(0).slideDown();
		if ($(".speakers-item:hidden").length == 0) {
			$(this).fadeOut('slow');
		}
	});
	//END SHOW MORE



}());
