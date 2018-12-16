(function(){
	'use strict';

	//On Scroll Functionality
	$(window).scroll( () => {
		let windowTop = $(window).scrollTop();
		windowTop > 10 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 10 ? $('ul').css('top','100px') : $('ul').css('top','160px');
	});

	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});

	//Smooth Scrolling Using Navigation Menu

	function slidePage(obj, className, offset) {
		obj.preventDefault();
		$(".burger-menu").removeClass("active");
		$(".slide-menu").slideUp(250);

		$('html, body').animate({
			scrollTop: $(className).offset().top - offset
		}, 500);
	}

	$('.banner-demo a').on('click', function(e){
		slidePage(e, ".registration form", 100);
	});

	$('.in-click').on('click', function(e){
		slidePage(e, ".table", 100);
	});

	$('.sh-click').on('click', function(e){
		slidePage(e, ".score", 100);
	});

	$('.sv-click').on('click', function(e){
		slidePage(e, ".control", 170);
	});

	$('.os-click').on('click', function(e){
		slidePage(e, ".registration", 100);
	});

    $(".slide-menu .slide-menu__links a").click(function(e) {
    	e.preventDefault();
        $(".slide-menu .slide-menu__links a").removeClass("active");
        $(this).addClass("active");
        $(".burger-menu").removeClass("active");
        $(".slide-menu").slideUp(250);
	});

	//Toggle Menu
	$('#menu-toggle').on('click', () => {
		$('#menu-toggle').toggleClass('closeMenu');
		$('ul').toggleClass('showMenu');

		$('li').on('click', () => {
			$('ul').removeClass('showMenu');
			$('#menu-toggle').removeClass('closeMenu');
		});
	});

	$(".td-name .table-nav").click(function() {
        $(".td-name .table-nav").removeClass("active");
        $(this).addClass("active");
        console.log();

        if($(".table-stats.table-stats--first").css("display") != "none") {
        	$(".table-stats.table-stats--first .table-in-table .table-show-content").css("display", "none");
        	$(".table-stats.table-stats--first .table-in-table .table-show-content").eq($(this).data("tab")).css("display", "block");
		} else {
			$(".table-stats.table-stats--second .table-in-table .table-show-content").css("display", "none");
        	$(".table-stats.table-stats--second .table-in-table .table-show-content").eq($(this).data("tab")).css("display", "block");
		}
	});

    $(window).on("load",function(){
        $(".content-scroll").mCustomScrollbar();
    });

    var input = document.querySelector("#phone");
    window.intlTelInput(input);

    $(".iti-arrow").text(">");

    AOS.init();

    $(".lang .lang__link").click(function(e) {
    	e.preventDefault();
    	$(".lang-show").show(100);
    });

    $(".lang-show .lang-show__link").click(function(e) {
		e.preventDefault();
		$(".lang-show .lang-show__link").removeClass("active");
		$(this).addClass("active");
		$(".lang .lang__link b").text($(this).text());
		$(".lang-show").hide(100);
    });

    $(".burger-menu").click(function() {
    	$(this).toggleClass("active");
    	$(".slide-menu").slideToggle(250);
	});

    var hash = window.location.hash;

    function changeClassLang(lang, langClass, titleText, descriptionText) {
        $(".lang .lang__link b").text(lang);
        $(".lang-show .lang-show__link" + langClass).addClass("active");
        $(".slide-menu .slide-menu__links " + langClass).addClass("active");
        $("title").text(titleText);
        $("meta[name='description']").attr("content", titleText);
	}

    console.log(hash);
    if(hash == "#en") {
        changeClassLang("EN", ".en-lang", "Trading with Gerchik & Co", "The best trading terms in the financial markets with Gerchik & Co, the real STP broker");
	} else {
        changeClassLang("RU", ".ru-lang", "Торговля с компанией Gerchik & Co", "Лучшие условия торговли на финансовых рынках с Gerchik & Co - реальным STP брокером");
	}

	$(".lang-show__link.ru-lang").click(function() {
        $("title").text("Торговля с компанией Gerchik & Co");
        $("meta[name='description']").attr("content", "Торговля с компанией Gerchik & Co\", \"Лучшие условия торговли на финансовых рынках с Gerchik & Co - реальным STP брокером");
	});

    $(".lang-show__link.en-lang").click(function() {
        $("title").text("Trading with Gerchik & Co");
        $("meta[name='description']").attr("content", "Trading with Gerchik & Co\", \"The best trading terms in the financial markets with Gerchik & Co, the real STP broker");
    });

}());
