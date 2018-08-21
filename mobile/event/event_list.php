<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/event.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="event-list">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">진행중 이벤트</a></li>
                            <li><a href="#">종료 이벤트</a></li>
                        </ul>
                    </nav>
                    <div class="event-board">
                        <ul>
                            <!--
                                종료된 이벤트 end-event
                            -->
                            <li>
                                <a href="/mobile/event/event_view.php">
                                    <div class="item">
                                        <img src="/mobile/assets/images/event/img_event01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>
                                            <span class="label">진행중</span>
                                            LG U+ 영상 속 미로 가습기를 찾아라
                                        </h3>
                                        <dl>
                                            <dt>참여기간</dt>
                                            <dd>2018.08.01 ~ 2018.08.31</dd>
                                            <dt>당첨자 발표</dt>
                                            <dd>2018.09.07</dd>
                                        </dl>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/event/event_view.php">
                                    <div class="item">
                                        <img src="/mobile/assets/images/event/img_event01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>
                                            <span class="label">진행중</span>
                                            LG U+ 영상 속 미로 가습기를 찾아라
                                        </h3>
                                        <dl>
                                            <dt>참여기간</dt>
                                            <dd>2018.08.01 ~ 2018.08.31</dd>
                                            <dt>당첨자 발표</dt>
                                            <dd>2018.09.07</dd>
                                        </dl>
                                    </div>
                                </a>
                            </li>
                            <li class="end-event">
                                <a href="/mobile/event/event_view.php">
                                    <div class="item">
                                        <img src="/mobile/assets/images/event/img_event01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>
                                            <span class="label">종료</span>
                                            LG U+ 영상 속 미로 가습기를 찾아라
                                        </h3>
                                        <dl>
                                            <dt>참여기간</dt>
                                            <dd>2018.08.01 ~ 2018.08.31</dd>
                                            <dt>당첨자 발표</dt>
                                            <dd>2018.09.07</dd>
                                        </dl>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span class="sr-only">첫페이지</span>
                                </a>
                            </li>
                            <li class="prev">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span class="sr-only">이전 페이지</span>
                                </a>
                            </li>
                            <li class="active"><a class="page-link" href="#">1</a></li>
                            <li><a class="page-link" href="#">2</a></li>
                            <li><a class="page-link" href="#">3</a></li>
                            <li><a class="page-link" href="#">4</a></li>
                            <li><a class="page-link" href="#">5</a></li>
                            <li class="next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="sr-only">다음 페이지</span>
                                </a>
                            </li>
                            <li class="last">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="sr-only">끝페이지</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>