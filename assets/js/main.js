(function($){
    // jumbo slider
    $(window).ready(function(){
        $('.jumbotron ul').slick({
            fade: true,
            infinite: true,
            speed: 1200,
            autoplaySpeed: 7000,
            dots: true,
            autoplay: true,
            arrows: false,
            cssEase: 'linear'
        });
    });
    $('.jumbotron ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-list').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
    $('.jumbotron ul').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });


    // promotional scroll event
    $(window).on('load',function(){
        $('.promotional').mCustomScrollbar({
            horizontalScroll: true
        });
    });

    // promotional effect event 
    $(window).on('scroll', function() {
        $('.promotional').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('active');
            }
        });
    });

    // news-list slider
    $(window).ready(function(){
        $('.news-slider').slick({
            infinite: true,
            focusOnSelect: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button class="slick-prev" type="button"><i class="icon-left"></i></button>',
            nextArrow: '<button class="slick-next" type="button"><i class="icon-right"></i></button>'
        });
    });
})(jQuery);