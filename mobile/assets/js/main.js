(function($){
    // visual slide
    $(window).ready(function(){
        $('.jumbotron').slick({
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
    $('.jumbotron').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-slide').addClass('action'); 
        });
    });
    $('.jumbotron').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-slide').addClass('action'); 
        });
    });

    // best-slide
    $(window).ready(function(){
        $('.best-product ul').slick({
            dots: false,
            infinite: false,
            slidesToShow: 3,
            prevArrow: '<button class="slick-prev"><i class="icon-left"></i></button>',
            nextArrow: '<button class="slick-next"><i class="icon-right"></i></button>',
            responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.3,
                }
            }
        ]
        });
    });

    // promotional scroll event
    var detail_position = 863 - ($(window).width() - 1200);
    if(detail_position > 863) detail_position = 863;

    $(window).on('load',function(){
        $('.promotional').mCustomScrollbar({
            horizontalScroll: true,
            callbacks:{
                onInit:function(){
                    $('.promotional').each(function(index, elem) {
                        if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                            $(elem).addClass('active');
                            setTimeout(function(){ $(".product-1").addClass("action"); }, 1000);
                            setTimeout(function(){ $(".product-2").addClass("action"); }, 1800);
                            setTimeout(function(){ $(".promotional .details").addClass("action").css("padding-right",detail_position+"px"); }, 2200);
                            if($(window).width() > 1700){
                                setTimeout(function(){ $(".product-3").addClass("action"); }, 2600);
                                setTimeout(function(){ $(".product-4").addClass("action"); }, 3400);
                            }
                        }
                    });
                },
                onTotalScroll:function(){
                },
                whileScrolling: function(){
                    var leftPct = this.mcs.leftPct; // 가로스크롤바가 이동한 퍼센트
                    var leftPst = this.mcs.left; // 컨텐츠가 이동한 거리
                    $(".promotional .details").css({"padding-right": detail_position - Math.abs(leftPst)+"px"});

                    if(leftPct > 50){
                        $(".product-3").addClass("action");
                    }

                    if(leftPct > 80){
                        setTimeout(function(){ $(".product-4").addClass("action"); }, 500);
                    }
                }
            }
        });
    });

    // promotional effect event 
    $(window).on('scroll', function() {
        $('.promotional').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                if(!$(elem).hasClass("active")){
                    $(elem).addClass('active');
                    setTimeout(function(){ $(".product-1").addClass("action"); }, 1000);
                    setTimeout(function(){ $(".product-2").addClass("action"); }, 1800);
                    setTimeout(function(){ $(".promotional .details").addClass("action").css("padding-right",detail_position+"px"); }, 2200);
                    if($(window).width() > 1700){
                        setTimeout(function(){ $(".product-3").addClass("action"); }, 2600);
                        setTimeout(function(){ $(".product-4").addClass("action"); }, 3400);
                    }

                }
            }
        });
    });

    // promotional circle effect
    setInterval(function(){
        $('.product .item .circle').toggleClass('on');
    },500);

    // 유튜브 팝업 종료관련
    $("#videoModal").on('hidden.bs.modal', function(e) {
        $iframe = $(this).find( "iframe" );
        $iframe.attr("src", $iframe.attr("src"));
    });

    // 팝업 슬라이드 관련
    $('.product-modal').on('show.bs.modal', function (e) {
        setTimeout(function(){
            $('.product-modal .modal-body .product-sldier > ul').slick({
                autoplay: true,
                infinite: true,
                autoplaySpeed: 5000,
                dots: true,
                arrows: false,
                cssEase: 'linear'
            });
        }, 200);
    });

})(jQuery);