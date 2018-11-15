<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="prizewinner-list">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/mobile/entry_event/event_list.php">진행중 이벤트</a></li>
                        <li><a href="/mobile/entry_event/end_event_list.php">종료 이벤트</a></li>
                        <li class="active"><a href="/mobile/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                        <li><a href="/mobile/entry_event/present_login.php">나의 응모현황</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search-form" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search-form" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="board-list-type4">
                        <ul>
                            <li class="delegate-notice">
                                <a href="/mobile/entry_event/prizewinner_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/entry_event/prizewinner_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/entry_event/prizewinner_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/entry_event/prizewinner_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/entry_event/prizewinner_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
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