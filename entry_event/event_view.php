<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="event-view">
                <div class="section-header">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="/entry_event/event_list.php">진행중 이벤트</a></li>
                            <li><a href="/entry_event/end_event_list.php">종료 이벤트</a></li>
                            <li><a href="/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                            <li><a href="/entry_event/present_login.php">나의 응모현황</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>LG U+ 영상 속 미로 가습기를 찾아라</h4>
                            <p>11월 미로 공기청정기 구매하고 리뷰쓰고 응모하면 추첨을 통해 경품을 증정해드립니다.</p>
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
                        <div class="event-information">
                            <div class="row">
                                <div class="col-5">
                                    <dl>
                                        <dt>이벤트 기간</dt>
                                        <dd class="roboto">2018.08.01 ~ 2018.08.31</dd>
                                        <dt>마감일</dt>
                                        <dd class="roboto">2018.09.07</dd>
                                        <dt>추첨일</dt>
                                        <dd class="roboto">2018.09.07</dd>
                                        <dt>마감인원</dt>
                                        <dd class="roboto">제한없음</dd>
                                        <dt>추첨인원</dt>
                                        <dd class="roboto">제한없음</dd>
                                    </dl>
                                </div>
                                <div class="col-7">
                                    <dl>
                                        <dt>참여방법</dt>
                                        <dd>
                                            <ol>
                                                <li>
                                                    <span>1</span>11월 이벤트를 진행하는 온라인SHOP 에서 행사 제품 구매
                                                </li>
                                                <li>
                                                    <span>2</span>제품 수령 후 제품에 대한 리뷰 작성
                                                </li>
                                                <li>
                                                    <span>3</span>airest.co.kr에 접속
                                                </li>
                                                <li>
                                                    <span>4</span>해당 이벤트 선택 후 응모 
                                                </li>
                                            </ol>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>
                                이벤트 상세 내용이 노출되는 영역입니다.<br>
                                이벤트 상세 내용이 노출되는 영역입니다.<br>
                                이벤트 상세 내용이 노출되는 영역입니다.
                            </p>
                        </div>
                        <ul class="attach">
                            <li><a href="#">123.jpg</a></li>
                            <li><a href="#">123.jpg</a></li>
                        </ul>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/entry_event/event_list.php" class="btn btn-md btn-black" role="button">목록으로</a>
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