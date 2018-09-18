<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/story.css">
</head>
<body class="sub story">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="slogan">
                <div class="details">
                    <h2>
                        <img src="/assets/images/story/do_airest.png" alt="do airest">
                        에어레스트 하세요
                    </h2>
                    <hr>
                    <p>
                        쉴 틈 없이 일상을 살고 있는 우리들은 휴식이 필요합니다.<br>
                        에어레스트로 최소한의 확실한 휴식을 누리세요.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sub Content Start -->
    <main id="content" class="brand-story">
        <section class="section-1">
            <div class="container">
                <div class="section-header">
                    <h3>
                        지친 일상에서의 아주 작은 여유,<br>
                        에어레스트는 작지만 확실한 여유를.<br>
                        만들어드리기 위해 노력합니다.
                    </h3>
                    <hr>
                    <div class="summary">
                        <p class="effect-txt-1">
                            공부, 아르바이트, 일, 취미, 운동 등<br>
                            지금 우리는 너무나도 복잡하고 바쁜 하루를 보내고 있습니다
                        </p>
                        <strong>그 속에서 정작 나를 위한 시간은 얼마나 될까요?</strong>
                        <p class="effect-txt-2">
                            사람들을 행복하게 만드는 노력, 그 안에서 숨은 가치를 만들어내는 일<br>당신이 원하는 모든 곳에서 부담 없이 에어레스트 할 수 있도록 꼭 필요한 기능에 최대의  성능을 담았습니다
                        </p>
                    </div>
                    <figure>
                        <img src="/assets/images/story/bg_story01.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="section-content">
                <figure class="effect-1">
                    <img src="/assets/images/story/img_story01.jpg" class="img-fluid" alt="">
                </figure>
                <figure class="effect-2">
                    <img src="/assets/images/story/img_story02.jpg" class="img-fluid" alt="">
                </figure>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <div class="details">
                    <h4>
                        당신의 삶을 위하여<br>
                        <strong>에어레스트 하세요</strong>
                    </h4>
                    <div class="btn-area">
                        <a href="#" class="btn btn-default" role="button">
                            <p>제품 보러가기</p>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            // page-header
            $(window).load(function(){
                setTimeout(function(){
                    $('.page-header').addClass('on');
                }, 200);
            });
            
            // section effect
            $(window).on('scroll', function() {
                $('section').each(function(index, elem) {
                    if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                        $(elem).addClass('action');
                    }
                });
            });
        })(jQuery);
    </script>
</body>
</html>