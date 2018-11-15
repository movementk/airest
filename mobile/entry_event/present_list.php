<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="present-list">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/mobile/entry_event/event_list.php">진행중 이벤트</a></li>
                        <li><a href="/mobile/entry_event/end_event_list.php">종료 이벤트</a></li>
                        <li><a href="/mobile/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                        <li class="active"><a href="/mobile/entry_event/present_login.php">나의 응모현황</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <!--
                        진행중: ongoing
                        당점: prizewinner
                        비당첨: not-prizewinner
                    -->
                    <ul>
                        <li>
                            <h3>이벤트 당첨자 제목이 노출되는 영역입니다.<br>이벤트 당첨자 제목이 노출되는 영역입니다.</h3>
                            <dl>
                                <dt>응모일</dt>
                                <dd class="roboto">2018.09.07</dd>
                                <dt>당첨현황</dt>
                                <dd>
                                    <p class="ongoing">이벤트 진행중</p>
                                </dd>
                            </dl>
                            <hr>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">수정하기</a>
                                    <a href="#" class="btn btn-md btn-white" role="button">삭제하기</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>이벤트 당첨자 제목이 노출되는 영역입니다.<br>이벤트 당첨자 제목이 노출되는 영역입니다.</h3>
                            <dl>
                                <dt>응모일</dt>
                                <dd class="roboto">2018.09.07</dd>
                                <dt>당첨현황</dt>
                                <dd>
                                    <p class="prizewinner">당첨! 축하합니다</p>
                                </dd>
                            </dl>
                            <hr>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-gray" role="button">응모내역</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>이벤트 당첨자 제목이 노출되는 영역입니다.<br>이벤트 당첨자 제목이 노출되는 영역입니다.</h3>
                            <dl>
                                <dt>응모일</dt>
                                <dd class="roboto">2018.09.07</dd>
                                <dt>당첨현황</dt>
                                <dd>
                                    <p class="not-prizewinner">비당첨 - 다음 이벤트에 도전 해보세요</p>
                                </dd>
                            </dl>
                            <hr>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-gray" role="button">응모내역</a>
                                </p>
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