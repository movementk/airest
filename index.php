<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/scrollbar-plugin/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="/assets/css/main.css">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
<body>        
    <!-- Main Content Start -->
    <main id="content">
        <!-- jumbo slider -->
        <div class="jumbotron">
            <ul class="jumbo-slider">
                <li>
                    <div class="figbox">
                        <figure>
                            <img src="/assets/images/main/img_jumboslider01.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                </li>
                <li>
                    <div class="figbox">
                        <figure>
                            <img src="/assets/images/main/img_jumboslider01.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                </li>
                <li>
                    <div class="figbox">
                        <figure>
                            <img src="/assets/images/main/img_jumboslider01.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-- promotional -->
        <section class="promotional">
            <img src="/assets/images/main/img_promotional.gif" class="img-promotional" alt="">
        </section>
        
        <!-- product-list -->
        <section class="product-list">
            <div class="container">
                <ul class="tab-menu">
                    <li class="active"><a href="#">가습기 <span></span></a></li>
                    <li><a href="#">공기청정기 <span></span></a></li>
                    <li><a href="#">선풍기 <span></span></a></li>
                </ul>
                <div class="section-content">
                    <div class="row">
                        <div class="col-7">
                            <div class="details">
                                <span class="label">BEST</span>
                                <h3>아로마 가습기</h3>
                                <p class="product-name">AIREST AR01</p>
                                <p class="summary">
                                    기존 간편세척 가습기와 아로마 가습기의 비위생적인 단점을<br>
                                    모두 해결한 에어레스트 간편세척 가습기 에어레스트 간접 발향 <br>
                                    아로마 박스 보존제는 남고 깨끗한 향기만 경험할 수 있습니다
                                </p>
                            </div>
                            <ul class="selection-product">
                                <li class="active">
                                    <a href="#">
                                        <div class="model-img">
                                            <img src="/assets/images/main/img_product_small01.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="model-name">AR01</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="model-img">
                                            <img src="/assets/images/main/img_product_small02.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="model-name">AR02</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="model-img">
                                            <img src="/assets/images/main/img_product_small03.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="model-name">AR03</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="model-img">
                                            <img src="/assets/images/main/img_product_small04.png" class="img-fluid" alt="">
                                        </div>
                                        <p class="model-name">AR04</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="/assets/images/main/img_product.png" alt="">
                                </div>
                                <div class="btn-area">
                                    <a href="#" class="btn btn-black" role="button">구매하기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- sns-issue -->
        <article class="sns-issue">
            <div class="container">
                <ul class="row">
                    <li class="col-4">
                        <a href="#">
                            <figure>
                                <img src="/assets/images/main/img_issue01.jpg" class="img-fluid" alt="">
                            </figure>
                            <p class="icon-sns icon-facebook"></p>
                        </a>
                    </li>
                    <li class="col-4">
                        <a href="#" class="naver-blog">
                            <div class="blog-content">
                                <small>@mirocleanpot</small>
                                <h3>미로가 알려드리는 미세먼지<br>제거 대박 꿀팁!</h3>
                                <p class="summary">
                                    미세먼지로부터 집안을 지키자!<br>
                                    가장 쉽고 간편한 꿀팁은 무엇일까요?<br>
                                    미로가 알려주는 미세먼지 꿀팁!
                                </p>
                            </div>
                            <p class="icon-sns icon-naver"></p>
                        </a>
                    </li>
                    <li class="col-4">
                        <a href="#">
                            <figure>
                                <img src="/assets/images/main/img_issue03.jpg" class="img-fluid" alt="">
                            </figure>
                            <p class="icon-sns icon-insta"></p>
                        </a>
                    </li>
                </ul>
            </div>
        </article>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/assets/scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
    <script>
        (function($){
            // header scroll
            $(window).on('scroll', function(){
                if ($(this).scrollTop() > 0) {
                    $('body').addClass('scrolled');
                } else {
                    $('body').removeClass('scrolled');
                }
            });
            
            // jumbo slider
            $(window).ready(function(){
                $('.jumbotron ul').slick({
                    fade: true,
                    speed: 1200,
                    dots: true,
                    autoplay: true,
                    arrows: false
                });
            });
            
            // product-list
            $(window).ready(function(){
                $('.product-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.product-nav'
                });
                $('.product-nav').slick({
                    asNavFor: '.product-for',
                    dots: false,
                    centerMode: true,
                    focusOnSelect: true
                });
            });
            
            // promotional scroll event
            $(window).on('load',function(){
                $('.promotional').mCustomScrollbar({
                    horizontalScroll: true
                });
            });
        })(jQuery)
    </script>
</body>
</html>