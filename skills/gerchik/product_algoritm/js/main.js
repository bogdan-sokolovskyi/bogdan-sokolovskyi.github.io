
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


$(document).ready(function() {
    $('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        var cont_top = window.pageYOffset ? window.pageYOffset : document.body.scrollTop;

        $('body').animate({
            scrollTop: $(el).offset().top + cont_top
        }, 1000);

        return false;
    });
});