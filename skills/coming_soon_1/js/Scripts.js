
$(document).ready(function() { 

	/* Loader */
	setTimeout(function() {
        $('body').addClass('loaded');
    }, 3000);

	/* Slideshow with Ken Burns effect */
	$(".background").kenburnsy({
		fullscreen: true
	});

	/* Show sidebar */
	$("[data-toggle=offcanvas]").click(function() {
		$(".offcanvas").toggleClass("active");
		$(".canvas").toggleClass("active");
	});

}); 

$(window).resize(function() {
    
});