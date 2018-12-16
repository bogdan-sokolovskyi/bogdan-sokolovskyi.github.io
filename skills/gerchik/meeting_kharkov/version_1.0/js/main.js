(function($) {

	//SHOW MORE
	$(".portfolio-item").slice(0, 4).show();
	$("#load-more").on('click', function (e) {

		if ($(".portfolio-item:hidden").length == 0) {
			$(this).css('display', 'none');
		}
		e.preventDefault();
		$(".portfolio-item:hidden").slice(0, 2).slideDown();
		if ($(".portfolio-item:hidden").length == 0) {
			$(this).fadeOut('slow');
		}
		// $('html,body').animate({
		// 	scrollTop: $(this).offset().top - 100
		// }, 1500);
	});
	//END SHOW MORE

	//FOOTER Triangle responsive
	function triangle(){
		let windowWidth = $(window).width();
		let containerWidth = $('.footer-top').width();
		let footerBottom = $('.footer-bottom').innerHeight();
		$(".triangle").css({
			"border-bottom": footerBottom + 'px solid rgba(107, 47, 179, 1)',
			"border-right": (windowWidth - containerWidth) / 2 + 'px solid transparent',
			"right": '-' + (windowWidth - containerWidth) / 2 + 'px',
			"bottom": '-' + footerBottom + 'px',
		});
	}
	$(window).on('load', function () {
		triangle();
	});
	$(window).resize(function () {
		triangle();
	});
	//END FOOTER Triangle responsive


	//Button to scroll in section
	$(".head-anchor").on("click","a[href^='#']", function (event) {
		event.preventDefault();
		let id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});
	//END Button to scroll in section


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


	//MOBILE SLIDER
	//agents
	$(".bxslider").each(function(){
		$(this).bxSlider({
			nextText: '',
			prevText: '',
		});
	});

	//reviews desktope
	var settings = {
		slideWidth: 401,
		slideMargin: 6,
		minSlides: 1,
		maxSlides: 3,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 3,
		//hideControlOnEnd: true,
	};
	$('.bxslider-ul').bxSlider(settings);

	//MOB TESTIMONIAL
	var testimonials = {
		slideWidth: 410,
		slideMargin: 0,
		minSlides: 1,
		maxSlides: 1,
		infiniteLoop: true,
		responsive: true,
		controls: true,
		pager: false,
		moveSlides: 1,
		//hideControlOnEnd: true,
	};
	$('.bxslider-mob-ul').bxSlider(testimonials);
	//END MOBILE SLIDER


})(jQuery);


//Pause iframe head video when click other
let player;
let playerMob;
function onYouTubePlayerAPIReady() {
	player = new YT.Player('videoIframe', {	events: { 'onReady': onPlayerReady }});
	playerMob = new YT.Player('videoIframeMob', {	events: { 'onReady': onPlayerReady }});
}
function onPlayerReady(event) {
	let pauseButton = document.querySelector(".bxslider-ul");
	let pauseButtonMob = document.querySelector(".bxslider-mob-ul");
	pauseButton.addEventListener("click", function() {
		player.pauseVideo();
	});
	pauseButtonMob.addEventListener("click", function() {
		playerMob.pauseVideo();
	});
}
