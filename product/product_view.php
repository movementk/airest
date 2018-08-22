<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/product.css">
</head>
<body class="sub product">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content" class="product-view">
        <section class="product-intro">
            <article class="product-detail">
                <ul class="details-slider">
                    <li>
                        <figure>
                            <img src="/assets/images/product/img_product_slide01.jpg" class="img-fluid" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/product/img_product_slide01.jpg" class="img-fluid" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/product/img_product_slide01.jpg" class="img-fluid" alt="">
                        </figure>
                    </li>
                </ul>
                <ul class="slider-nav">
                    <li class="nav-img">
                        <figure>
                            <img src="/assets/images/product/img_slide_nav01.jpg" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/product/img_slide_nav02.jpg" alt="">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="/assets/images/product/img_slide_nav03.jpg" alt="">
                        </figure>
                    </li>
                </ul>
            </article>
            <article class="product-info">
                <h3>
                    <small>공기청청기</small>
                    AP1100-H13
                </h3>
                <p class="summary">
                    에어레스트의 미니멀하며 심플한 디자인으로 제품을 더 감성적으로 다가갈수 있는 디자인을 추구합니다. 에어레스트의 미니멀하며 심플한 디자인으로 제품을 더 감성적으로 다가갈수 있는 디자인을 추구합니다.
                </p>
                <h4>SPEC</h4>
                <dl>
                    <dt>사용면적(㎡)</dt>
                    <dd>101.6㎡ (30.8평)</dd>
                    <dt>필터 유지등급</dt>
                    <dd>P4 (최고등급)</dd>
                    <dt>조도센터</dt>
                    <dd>O</dd>
                    <dt>소비전력</dt>
                    <dd>33W</dd>
                    <dt>제품크기</dt>
                    <dd>360 x 360 x 780 ㎜</dd>
                </dl>
                <div class="btn-area">
                    <p>
                        <a href="https://smartstore.naver.com/miro2017" class="btn btn-md btn-black" target="_blank" role="button">구매하기</a>
                        <a href="/product/product_list.php" class="btn btn-md btn-white" role="button">제품목록</a>
                    </p>
                </div>
            </article>
        </section>
        <div class="container">
            <article class="details-img">
                <figure>
                    <img src="/assets/images/product/img_particulars.jpg" class="img-fluid" alt="">
                </figure>
            </article>
            <article class="related-products">
                <div class="article-header">
                    <h3>RELATED PRODUCTS</h3>
                </div>
                <div class="article-content">
                    <ul class="row">
                        <li class="col-3">
                            <a href="#">
                                <h4>
                                    <small>AIR PURIFIER</small>
                                    AF400
                                </h4>
                                <figure>
                                    <img src="/assets/images/product/img_related_products01.png" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-3">
                            <a href="#">
                                <h4>
                                    <small>AIR PURIFIER</small>
                                    AP400
                                </h4>
                                <figure>
                                    <img src="/assets/images/product/img_related_products02.png" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-3">
                            <a href="#">
                                <h4>
                                    <small>AIR PURIFIER</small>
                                    AP600
                                </h4>
                                <figure>
                                    <img src="/assets/images/product/img_related_products03.png" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-3">
                            <a href="#">
                                <h4>
                                    <small>AIR PURIFIER</small>
                                    AP800
                                </h4>
                                <figure>
                                    <img src="/assets/images/product/img_related_products04.png" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            // product-item 관련
            $(window).ready(function(){
                $('.details-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    touchMove: false,
                    draggable: false,
                });
                $('.slider-nav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.details-slider',
                    focusOnSelect: true
                });
            });
        })(jQuery);
    </script>
</body>
</html>