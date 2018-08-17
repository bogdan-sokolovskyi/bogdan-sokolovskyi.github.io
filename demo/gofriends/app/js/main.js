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
			title: "Меню"
		}
	});

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
	});
	var api = $("#menu").data("mmenu");
	api.bind("closed", function () {
		$(".toggle-mnu").removeClass("on");
	});

});
