<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <h2 class="page-title">SUPPORT</h2>
            <!-- page-path- -->
            <nav class="page-path" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item roboto"><a href="/">HOME</a></li>
                    <li class="breadcrumb-item roboto">SUPPORT</li>
                    <li class="breadcrumb-item active">공지사항</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- snb-menu -->
    <nav id="snb-menu">
        <div class="container">
            <ul>
                <li><a href="/customer/faq_list.php">자주묻는질문<span></span></a></li>
                <li><a href="/customer/inquiry_write.php">1:1 문의하기<span></span></a></li>
                <li><a href="#">정품등록<span></span></a></li>
                <li><a href="/customer/manual.php">제품사용설명서<span></span></a></li>
                <li><a href="/customer/video_manual.php">동영상설명서<span></span></a></li>
                <li><a href="/customer/as_delivery.php">배송 및 A/S안내<span></span></a></li>
                <li class="active"><a href="/customer/notice_list.php">공지사항<span></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="notice-view">
                <div class="section-header">
                    <h3 class="section-title"><span>공지사항</span></h3>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>미로 신규회원혜택 이벤트</h4>
                            <ul>
                                <li>
                                    <i class="icon-calendar-empty">
                                        <span class="sr-only">작성일</span>
                                    </i>
                                    2018-07-01
                                </li>
                                <li>
                                    <i class="icon-eye">
                                        <span class="sr-only">조회수</span>
                                    </i>
                                    1,234
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <p>
                                이벤트 페이지 블로그 공유해주시고, 동영상 속 미로 가습기를 캡쳐하셔서 <br>댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                            </p>
                        </div>
                        <ul class="attach">
                            <li><a href="#">123.jpg</a></li>
                            <li><a href="#">123.jpg</a></li>
                        </ul>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/customer/notice_list.php" class="btn btn-md btn-black" role="button">목록으로</a>
                        </p>
                    </div>
                    <ul class="page-more">
                        <li>
                            <dl>
                                <dt>이전글</dt>
                                <dd>
                                    <a href="#">
                                        이전글 제목이 노출되는 영역입니다.
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>다음글</dt>
                                <dd>
                                    <a href="#">
                                        다글 제목이 노출되는 영역입니다.
                                    </a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>