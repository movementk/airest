<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="prizewinner-view">
                <div class="section-header">
                    <nav class="tab-menu">
                        <ul>
                            <li><a href="/entry_event/event_list.php">진행중 이벤트</a></li>
                            <li><a href="/entry_event/end_event_list.php">종료 이벤트</a></li>
                            <li class="active"><a href="/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                            <li><a href="/entry_event/present_login.php">나의 응모현황</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="article-header">
                            <h4>당첨자 발표 제목이 노출되는 영역입니다.</h4>
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
                                당첨자 발표 내용이 노출되는 영역입니다.<br>
                                당첨자 발표 내용이 노출되는 영역입니다.<br>
                                당첨자 발표 내용이 노출되는 영역입니다.
                            </p>
                        </div>
                        <ul class="attach">
                            <li><a href="#">123.jpg</a></li>
                            <li><a href="#">123.jpg</a></li>
                        </ul>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/entry_event/prizewinner_list.php" class="btn btn-md btn-black" role="button">목록으로</a>
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