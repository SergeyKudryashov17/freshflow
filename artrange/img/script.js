/**
 * Created by Sergey Kudryashov on 19.09.2018.
 */
$(document).ready(function () {
    $('.slider_features').slick({
        vertical: true
    });
    $('.slider_video').slick({
        dots: true
    });
    $('.slier_promo').slick({
        dots: true
    });
    var height_video = $('.itemPromo video').height() - 5;
    $('.bgPromoVideo').css('height', height_video);
});