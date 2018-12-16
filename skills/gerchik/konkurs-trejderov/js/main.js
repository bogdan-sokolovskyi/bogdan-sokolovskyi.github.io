/*********** START Setting up equal height to the blocks********************/

function setEqualHeight(blocks, etalon, correction) {
    blocks = $(blocks);
    if (blocks.length > 1) { // Проверяем наличие блоков
        var tallest = 0;
        blocks.each(function () { // Проходим по всем блокам и находим самый высокий
            var height = $(this).outerHeight(true);
            if (tallest < height) tallest = height;
        });
        if (etalon && tallest < etalon) { // Сравниваем с эталоном
            result = etalon;
        } else {
            result = tallest;
        }
        if (correction) result = result + correction; // Подгоняем
        blocks.height(result); // Выравниваем
    }
}
setEqualHeight('.last_section div');


/*********** END Setting up equal height to the blocks********************/

$(document).ready(function () {
    $(".carousel-reviews").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        navText: [
            '<div class="arrow-left"></div>    ',
            '<div class="arrow-right"><div/>'
        ],
        /*autoplay:true,
         autoplayTimeout:10000,
         autoplayHoverPause:true*/
    });
});
// $('.jquery-background-video').bgVideo({
//     fadeIn: 2000 ,
//     loop :true
// });
$(document).ready(function () {
    // Add smooth scrolling to all links
    /*$("a.anchor").on('click', function(event) {

     // Prevent default anchor click behavior
     event.preventDefault();

     // Store hash
     var hash = this.hash;

     // Using jQuery's animate() method to add smooth page scroll
     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
     $('html, body').animate({
     }, 800, function(){

     // Add hash (#) to URL when done scrolling (default click behavior)
     window.location.hash = hash;
     });
     });*/


});


var anchor = document.querySelectorAll('a[href="#form-section"]');
var anchorM = document.querySelectorAll('a[href="#form-sectionM"]');

for (var i = 0; i < anchor.length; i++) {
    anchor[i].addEventListener('click', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 2000);
    });
};
for (var i = 0; i < anchorM.length; i++) {
    anchorM[i].addEventListener('click', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 2000);
    });
};

checkingPresentHash(768);

function checkingPresentHash(maxWidth) {
    if ($(window).width() < maxWidth) {
        fixingHashInDependencyOfWidth(true);
    }
    if ($(window).width() > maxWidth) {
        fixingHashInDependencyOfWidth();
    }

    $(window).resize(function(maxWidth) {
        if ($(window).width() < maxWidth) {
            fixingHashInDependencyOfWidth(true);
        }
        if ($(window).width() > maxWidth) {
            fixingHashInDependencyOfWidth();
        }
    });
}

function fixingHashInDependencyOfWidth(flag = false) {
    var presentHash = window.location.hash,
        newHash = presentHash,
        lastSymbolOfHash = presentHash.slice(-1);

    if (flag && lastSymbolOfHash !=='M') {
        newHash += 'M';
    }
    if (!flag && lastSymbolOfHash ==='M') {
        newHash = presentHash.substr(0, window.location.hash.length - 1);
    }

    if (presentHash !== newHash) {
        window.location.hash = newHash;
    }
}

// window.onbeforeunload = function () {
//     window.scrollTo(0, 0);
// };


AOS.init({
    duration: 2000,
    once: true
});
// $(document).ready(function () {
//     $('a.lang-change ').('on' ,click(function(e)){
//         var _this= $(this);
//         e.preventDefault();
//         if (_this.hasClass('active')) {
//             _this.removeClass('active');
//         }
//         else {
//             _this.addClass('active');
//         }
//     })
// });
// $('#video_sectionss').vide('../video/afon_demo.mp4');
// $("a.lang-change").on("click", function (e) {
//     // e.preventDefault();
//     var _this = $(this);
//     // if (_this.hasClass('active')) {
//     //     _this.removeClass('active');
//     // }
//     // else {
//     //     _this.addClass('active');
//     // }
//     _this.closest('a.lang-change').removeClass('active');
//     _this.addClass('active');
// });
$('.choose_language a').click(function () {
    $('a.toggle').toggleClass('active passive');
});


// store the hash (DON'T put this code inside the $() function, it has to be executed
// right away before the browser can start scrolling!
// var target = window.location.hash,
//     target = target.replace('#', '');

// delete hash so the page won't scroll to it
// window.location.hash = "";

// now whenever you are ready do whatever you want
// (in this case I use jQuery to scroll to the tag after the page has loaded)
// $(window).on('load', function() {
//     if (target) {
//         $('html, body').animate({
//             scrollTop: $("#" + target).offset().top
//         }, 700, 'swing', function () {});
//     }
// });

var p = $(".popup__overlay");

$("#popup__toggle").click(function () {
    p.css("display", "block");
    p.css("visibility", "visible").css("opacity", "1");
});
$("#popup__toggleM").click(function () {
    p.css("display", "block");
    p.css("visibility", "visible").css("opacity", "1");
});
p.click(function (event) {
    e = event || window.event;
    if (e.target == this) {
        $(p).css("display", "none");
        $("#popup__toggle iframe").css("display", "none");
    }
});
$(".popup__close").click(function () {
    p.css("display", "none");
});

//video popup
function toggleVideo(state) {
    // if state == 'hide', hide. Else: show video
    var div = document.getElementById("popupVid");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    //div.style.display = state == 'hide' ? 'none' : '';
    func = state == "hide" ? "pauseVideo" : "playVideo";
    iframe.postMessage(
        '{"event":"command","func":"' + func + '","args":""}',
        "*");

}
//video popup
function toggleVideo(state) {
    // if state == 'hide', hide. Else: show video
    var div = document.getElementById("popupVidM");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    //div.style.display = state == 'hide' ? 'none' : '';
    func = state == "hide" ? "pauseVideo" : "playVideo";
    iframe.postMessage(
        '{"event":"command","func":"' + func + '","args":""}',
        "*");

}

/*$("#popup__toggle").click(function () {
    p.css("visibility", "visible").css("opacity", "1");
});
$("#popup__toggleM").click(function () {
    p.css("visibility", "visible").css("opacity", "1");
});*/

p.click(function (event) {
    e = event || window.event;
    if (e.target == this) {
        $(p).
        css("visibility", "hidden").
        css("opacity", "0");
        toggleVideo("hide");
    }
});
$(".popup__close").click(function() {
    p.css("display", "none");
});

$(".popup__close").click(function () {
    p.css("visibility", "hidden").css("opacity", "0");
    toggleVideo("hide");
});
$(".popup__close").click(function() {
    p.css("visibility", "hidden").css("opacity", "0");
    toggleVideo("hide");
});
//Pause iframe head video when click other
var player;
var playerMob;
function onYouTubePlayerAPIReady() {
    player = new YT.Player('videoIframe', {	events: { 'onReady': onPlayerReady }});
}
function onPlayerReady(event) {
    var pauseButton = document.querySelector(".popup__overlay");
    pauseButton.addEventListener("click", function() {
        player.pauseVideo();
    });
}

function onYouTubePlayerAPIReady() {
    playerMob = new YT.Player('videoIframeM', {	events: { 'onReady': onPlayerReady }});
}
function onPlayerReady(event) {
    var pauseButton = document.querySelector(".popup__overlay");
    pauseButton.addEventListener("click", function() {
        playerMob.pauseVideo();
    });
}
