<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/story.css">
</head>
<body class="sub story">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2>
                <img src="/mobile/assets/images/story/do_airest.png" alt="do airest">
                에어레스트 하세요
            </h2>
            <hr>
            <p>
                쉴 틈 없이 일상을 살고 있는 우리들은 휴식이 필요합니다.<br>
                에어레스트로 최소한의 확실한 휴식을 누리세요.
            </p>
        </div>
    </div>
    
    <!-- Sub Content Start -->
    <main id="content" class="brand-story">
        <section class="section-1">
            
        </section>
        <section class="section-1">
            
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
        (function($){
            // page-header effect
            $(window).load(function(){
                setTimeout(function(){
                    $('.page-header').addClass('on');
                }, 300);
            });
            
        })(jQuery);
    </script>
</body>
</html>