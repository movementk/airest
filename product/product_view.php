<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/product.css">
</head>
<body class="sub product">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content" class="product-view">
        <section class="view-header">
            <article class="details-slide">
                
            </article>
            <article class="product-info">
                
            </article>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            // product-item 관련
            $(window).ready(function(){
                $('.product-item .sub-slider').slick({
                    autoplay: true,
                    infinite: true,
                    speed: 1200,
                    autoplaySpeed: 7000,
                    dots: true,
                    arrows: false
                });
            });
        })(jQuery);
    </script>
</body>
</html>