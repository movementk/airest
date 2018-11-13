<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="event-list">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/mobile/entry_event/event_list.php">진행중 이벤트</a></li>
                        <li><a href="/mobile/entry_event/end_event_list.php">종료 이벤트</a></li>
                        <li><a href="/mobile/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                        <li><a href="/mobile/entry_event/present_login.php">나의 응모현황</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <ul class="default-list">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h3>LG U+ 영상 속 미로 가습기를 찾아라<br>LG U+ 영상 속 미로 가습기를 찾아라</h3>
                                <p class="date">2018.08.01 ~ 2018.08.31 <b>D-123</b></p>
                                <hr>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-md btn-entry" role="button">응모하기</a>
                                        <a href="#" class="btn btn-md btn-gray" role="button">자세히보기</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h3>LG U+ 영상 속 미로 가습기를 찾아라<br>LG U+ 영상 속 미로 가습기를 찾아라</h3>
                                <p class="date">2018.08.01 ~ 2018.08.31 <b>D-123</b></p>
                                <hr>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-md btn-entry" role="button">응모하기</a>
                                        <a href="#" class="btn btn-md btn-gray" role="button">자세히보기</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h3>LG U+ 영상 속 미로 가습기를 찾아라<br>LG U+ 영상 속 미로 가습기를 찾아라</h3>
                                <p class="date">2018.08.01 ~ 2018.08.31 <b>D-123</b></p>
                                <hr>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-md btn-entry" role="button">응모하기</a>
                                        <a href="#" class="btn btn-md btn-gray" role="button">자세히보기</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
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