(function($){
    // nav 관련
    $(document).on('click','#header .btn-nav', function(){
        $('body').addClass('opened');
    });
    $(document).on('click','#nav .btn-close', function(){
        $('body').removeClass('opened');
    });

    // gnb 메뉴 관련
    $(document).on('click', '#nav .nav-body .gnb > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });

    // global-search
    $(document).on('click','.global-search .btn-search', function(){
        $('.global-search').addClass('action');
        $('.global-search .form-group').addClass('d-block');
        $('.global-search .form-group').removeClass('d-none');
    });
    $(document).on('click','#content, .product-item, .page-header', function(){
        $('.global-search').removeClass('action');
        $('.global-search .form-group').removeClass('d-block');
        $('.global-search .form-group').addClass('d-none');
    });

    // header scroll
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
})(jQuery);