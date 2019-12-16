/**
 * Created by Sergey Kudryashov on 19.09.2018.
 */
verification();
$(window).on('load', function () {
    var flag_menu = false;
    afterLoadSite();
    initFullpage();
    $(window).unload(function(){
        initFullpage();
    });
    initSliders();
    showTitleSite();
    scrollBgWithSlider();
    sendAjaxForm();
    open_sm_menu(flag_menu);
    hiddenDotsSlider();
});
// Расчёт высоты блока тени для видео (не используется)
function heightVideoWrp() {
    var height_video = $('.itemPromo video').height() - 5;
    $('.bgPromoVideo').css('height', height_video);
}
// Инициализация слайдеров
function initSliders() {
    if($(window).width() < 576 ){
        $('.slider_features').slick({
            dots: true
        });
        $('.listImg').slick({
            dots: true
        });
    } else {
        $('.slider_features').slick({
            vertical: true
        });
    }
    $('.slider_video').slick({
        dots: true
    });
    $('.slier_promo').slick({
        dots: true
    });

}
// Инициализация плагина fullpage
function initFullpage() {
    var idSection = ['section-1', 'section-2', 'section-3', 'section-4', 'section-5', 'section-6'],
        bgPosSlides = [],       // Переменная для сохранения начальногозначеия background-position
        lastIndex = 0;
    for(i = 0; i < idSection.length; i++){
        // Запись начальных значений background-position
        bgPosSlides.push( $('#' + idSection[i] + '').css('background-position') );
    }
    new fullpage('#fullpage', {
        navigation: true,
        slidesNavigation: true,
        anchors: ['onePage', 'twoPage', 'threePage', 'fourPage', 'fivePage', 'sixPage'],
        onLeave: function(index, destination){
            // Не отрабатывать для первого слайда
            if(idSection[destination.index] != 'section-3'){
                $('#' + idSection[lastIndex] + '').css('background-position', '');
                $('#' + idSection[destination.index] + '').css('background-position', '50% 100%');
                lastIndex = destination.index;
            }
            if(idSection[destination.index] === 'section-3'){
                $('#' + idSection[lastIndex] + '').css('background-position', '');
                $('#' + idSection[destination.index] + '').css('background-position', '50% 100%');
                lastIndex = destination.index;
            }
        }
    });
    $('#moveSectionUp').click(function(e){
        e.preventDefault();
        $.fn.fullpage.moveSectionUp();
    });
    $('#moveSectionDown').click(function(e){
        e.preventDefault();
        $.fn.fullpage.moveSectionDown();
    });
}
// Анимация появления заголовков на главном слайде
function showTitleSite() {
    setTimeout(function() {
        $('.main_headline').css('color', '#fff');
        $('.decs_headline').css('color', '#fff');
    }, 5000);
    setTimeout(function() {
        $('#section-1 .group_btn').animate({margin: "20px auto"}, 2000);
    }, 2000);
}
// Пролистование фонового изображения по нажатию на кнопки прокрутки слайдера
function scrollBgWithSlider(){
    // Событие клик по слайдеру вниз
    $('#section-3 .slick-next').click(function () {
        // Получить значение background-position
        var positionX = $('#section-3').css('background-position-x'),
            positionY = $('#section-3').css('background-position-y');
        // Переводим из строки в число, удаляя при этом знак % в конце
        var value = Number(positionY.substring(0, positionY.length - 1));
        // Увеличить значение на 20
        value += 15;
        // Ограничение крайних значений 0 и 100
        if(value >= 100) positionYnew = '100%';
        else positionYnew = value + '%';
        // Быстро прокрутить фон
        $('#section-3').css({
            'background-position-x' : positionX,
            'background-position-y' : positionYnew,
            'transition' : 'background-position 1s linear'
        });
        // Установить новое значение background-position
        setTimeout(function() {
            $('#section-3').css({
                'background-position-x': '50%',
                'background-position-y' : '100%',
                '-webkit-transition': '',
                'transition': '',
            });
        }, 1000);
    });
    $('#section-3 .slick-prev').click(function () {
        // Получить значение background-position
        var positionX = $('#section-3').css('background-position-x'),
            positionY = $('#section-3').css('background-position-y');
        // Переводим из строки в число, удаляя при этом знак % в конце
        var value = Number(positionY.substring(0, positionY.length - 1));
        // Увеличить значение на 20
        value -= 15;
        // Ограничение крайних значений 0 и 100
        if(value <= 0) positionYnew = '0%';
        else positionYnew = value + '%';
        // Быстро прокрутить фон
        $('#section-3').css({
            'background-position-x' : positionX,
            'background-position-y' : positionYnew,
            'transition' : 'background-position 1s linear'
        });
        // Установить новое значение background-position
        setTimeout(function() {
            $('#section-3').css({'background-position-x': '50%', 'background-position-y' : '100%', 'transition': ''});
        }, 1000);
    })
}
// Функция для редактирования строки
String.prototype.replaceAt = function(index, replacement) {
    return this.substr(0, index) + replacement+ this.substr(index + replacement.length);
}
// Адаптивная высота слайдера
function adaptiveHeightSlider() {
    var height_window = $(window).height(),
        heigt_header = 80,
        height_footer = 50,
        height_slide = height_window - 130;
    $('.slider_features').css('height', height_slide);
}
// Закрытие прелоадера после полной загрузки сайта
function afterLoadSite() {
    var $preloader = $('#preloader'),
        $spinner   = $('#loader'),
        $progress   = $('#progress_load');
    $progress.fadeOut();
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
}
// Отправка данных из формы с помощью Ajax
function sendAjaxForm() {
    $(".form").submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "http://freshflow.su/wp-content/themes/artrange/send.php",
            data: form_data,
            success: function () {
                alert("Ваше сообщение отпрвлено!");
                $('.leftBtnSend input').val('');
            }
        });
    });
}
// Открытие меню на экранах среднего разрешения
function open_sm_menu(flag) {
    $('.fa-bars').click(function () {
        if(($(window).width() <= 767) && ($(window).width() >= 576)){
            $('.sm-menu').fadeToggle();
        }
        if($(window).width() < 576){
            var height_header = $('#header').height(),
                height_window = $(window).height(),
                height_menu   = (height_window - height_header) + 5,
                width_menu = $(window).width();
            $('.xs-menu').css({
                'height' : height_menu,
                'width' : width_menu,
                'margin-top' : '-5px'
            });
            $('.xs-menu').fadeToggle();
            if(flag){
                $('#header').css({
                    'background' : 'none',
                    'opacity' : '1',
                    'height' : '80px'
                });
                flag = false;
            } else {
                $('#header').css({
                    'background' : '#000',
                    'opacity' : '0.7',
                    'height' : 'auto'
                });
                flag = true;
            }
        }
    });
    $('.xs-menu li a').click(function () {
        $('.xs-menu').fadeToggle();
        $('#header').css({
            'background' : 'none',
            'opacity' : '1',
            'height' : '80px'
        });
        flag = false;
        console.log(flag);
    });
    $('.sm-menu li a').click(function () {
        $('.xs-menu').css('display', 'none');
        $('#header').css({
            'background' : 'none',
            'opacity' : '1',
            'height' : '80px'
        });
        flag = false;
    });
}
// Обработка подтверждения возраста
function verification() {
    if((sessionStorage.getItem('age') != 'true') && (sessionStorage.getItem('age') != 'none')) {
        sessionStorage.setItem('age', 'none');
        window.location.href = 'http://freshflow.su/age_limit/';
    }
    $('#verification .leftBtnSend button').click(function () {
        sessionStorage.setItem('age', 'true');
        window.location.href = 'http://freshflow.su/';
    });
    $('#verification .rightBtnSend button').click(function () {
        console.log('1');
        sessionStorage.setItem('age', 'false');
        $('.info_block_verif').css('display','none');
        $('.error_message').css('display','block');
    });
}
function hiddenDotsSlider() {
    var i = 0;
    $('.itemPromo').each(function () {
        i++;
    });
    console.log(i);
    if(i < 2) {
        $('.slier_promo .slick-dots').css('display', 'none');
    }
}
