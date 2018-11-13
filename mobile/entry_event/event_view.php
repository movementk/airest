<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="event-view">
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
                    <div class="board-view">
                        <div class="view-header">
                            <h3>진행중인 이벤트 제목이 노출되는 영역입니다. 길어질 경우 두 줄로 떨어집니다.</h3>
                            <p>11월 미로 공기청정기 구매하고 리뷰쓰고 응모하면 추첨을 통해 경품을 증정해드립니다.</p>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="hit">1,234</li>
                            </ul>
                        </div>
                        <dl class="event-information">
                            <dt>이벤트 기간</dt>
                            <dd class="roboto">2018.08.01 ~ 2018.08.31</dd>
                            <dt>마감일</dt>
                            <dd class="roboto">2018.09.07</dd>
                            <dt>추첨일</dt>
                            <dd class="roboto">2018.09.07</dd>
                            <dt>마감인원</dt>
                            <dd>제한없음</dd>
                            <dt>추첨인원</dt>
                            <dd>제한없음</dd>
                            <dt>참여방법</dt>
                            <dd>
                                <ol>
                                    <li>① 11월 이벤트를 진행하는 온라인SHOP 에서 행사 제품 구매</li>
                                    <li>② 제품 수령 후 제품에 대한 리뷰 작성</li>
                                    <li>③ airest.co.kr에 접속</li>
                                    <li>④ 해당 이벤트 선택 후 응모 </li>
                                </ol>
                            </dd>
                        </dl>
                        <div class="view-content">
                            <p>이벤트 페이지 블로그 공유해주시고, <br>
                            동영상 속 미로 가습기를 캡쳐하셔서 <br>
                            댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~</p>
                            <div class="attach">
                                <a href="#">123.jpg</a>
                                <a href="#">123.jpg</a>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-black" role="button">목록으로</a>
                            </p>
                        </div>
                        <div class="page-move">
                            <ul>
                                <li class="prev">
                                    <a href="#">이전글 제목이 노출되는 영역입니다.</a>
                                </li>
                                <li class="next">
                                    <a href="#">다음글이 없습니다.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>