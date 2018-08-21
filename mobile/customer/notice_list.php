<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- snb-menu -->
    <nav id="snb-menu">
        <ul class="snb-list">
            <li><a href="/mobile/customer/faq_list.php">자주묻는질문 <span></span></a></li>
            <li><a href="/mobile/customer/inquiry_write.php">1:1 문의 <span></span></a></li>
            <li><a href="/mobile/customer/genuine.php">정품등록 <span></span></a></li>
            <li><a href="/mobile/customer/manual.php">제품사용설명서 <span></span></a></li>
            <li><a href="/mobile/customer/video_manual.php">동영상설명서 <span></span></a></li>
            <li><a href="/mobile/customer/as_delivery.php">배송 및 A/S안내 <span></span></a>
            <li class="active"><a href="/mobile/customer/notice_list.php">공지사항 <span></span></a></li>
        </ul>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="notice-list">
                <div class="section-header">
                    <h2><span>공지사항</span></h2>
                </div>
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
                            <li>
                                <a href="/mobile/customer/notice_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/customer/notice_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/customer/notice_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/customer/notice_view.php">
                                    <h3>미로 신규회원혜택 이벤트</h3>
                                    <ul>
                                        <li class="date">2018-07-01</li>
                                        <li class="hit">1,234</li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/mobile/customer/notice_view.php">
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