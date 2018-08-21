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
                <li><a href="/customer/genuine.php">정품등록<span></span></a></li>
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
            <section class="notice-list">
                <div class="section-header">
                    <h3 class="section-title"><span>공지사항</span></h3>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" id="search" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search" class="sr-only">검색영역</label>
                            </div>
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </form>
                    </div>
                    <article class="board-type4">
                        <ul>
                            <li>
                                <a href="/customer/notice_view.php">
                                    <ul class="row">
                                        <li class="col-1">
                                            <i class="icon-volume">
                                                <span class="sr-only">전체공지</span>
                                            </i>
                                        </li>
                                        <li class="col-8">
                                            <p class="content">
                                                미로 신규회원혜택 이벤트
                                            </p>
                                        </li>
                                        <li class="col-2">
                                            <p class="date">
                                                <i class="icon-calendar-empty">
                                                    <span class="sr-only">날짜</span>
                                                </i>
                                                2018-07-01
                                            </p>
                                        </li>
                                        <li class="col-1">
                                            <p class="hit">
                                                <i class="icon-eye">
                                                    <span class="sr-only">조회수</span>
                                                </i>
                                                1,234
                                            </p>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/customer/notice_view.php">
                                    <ul class="row">
                                        <li class="col-1">
                                            <p class="num">123</p>
                                        </li>
                                        <li class="col-8">
                                            <p class="content">
                                                팩트체크 3편 - 수돗물 미세먼지 괴소문
                                            </p>
                                        </li>
                                        <li class="col-2">
                                            <p class="date">
                                                <i class="icon-calendar-empty">
                                                    <span class="sr-only">작성일</span>
                                                </i>
                                                2018-07-01
                                            </p>
                                        </li>
                                        <li class="col-1">
                                            <p class="hit">
                                                <i class="icon-eye">
                                                    <span class="sr-only">조회수</span>
                                                </i>
                                                1,234
                                            </p>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/customer/notice_view.php">
                                    <ul class="row">
                                        <li class="col-1">
                                            <p class="num">123</p>
                                        </li>
                                        <li class="col-8">
                                            <p class="content">
                                                팩트체크 3편 - 수돗물 미세먼지 괴소문
                                            </p>
                                        </li>
                                        <li class="col-2">
                                            <p class="date">
                                                <i class="icon-calendar-empty">
                                                    <span class="sr-only">작성일</span>
                                                </i>
                                                2018-07-01
                                            </p>
                                        </li>
                                        <li class="col-1">
                                            <p class="hit">
                                                <i class="icon-eye">
                                                    <span class="sr-only">조회수</span>
                                                </i>
                                                1,234
                                            </p>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/customer/notice_view.php">
                                    <ul class="row">
                                        <li class="col-1">
                                            <p class="num">123</p>
                                        </li>
                                        <li class="col-8">
                                            <p class="content">
                                                팩트체크 3편 - 수돗물 미세먼지 괴소문
                                            </p>
                                        </li>
                                        <li class="col-2">
                                            <p class="date">
                                                <i class="icon-calendar-empty">
                                                    <span class="sr-only">작성일</span>
                                                </i>
                                                2018-07-01
                                            </p>
                                        </li>
                                        <li class="col-1">
                                            <p class="hit">
                                                <i class="icon-eye">
                                                    <span class="sr-only">조회수</span>
                                                </i>
                                                1,234
                                            </p>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="/customer/notice_view.php">
                                    <ul class="row">
                                        <li class="col-1">
                                            <p class="num">123</p>
                                        </li>
                                        <li class="col-8">
                                            <p class="content">
                                                팩트체크 3편 - 수돗물 미세먼지 괴소문
                                            </p>
                                        </li>
                                        <li class="col-2">
                                            <p class="date">
                                                <i class="icon-calendar-empty">
                                                    <span class="sr-only">작성일</span>
                                                </i>
                                                2018-07-01
                                            </p>
                                        </li>
                                        <li class="col-1">
                                            <p class="hit">
                                                <i class="icon-eye">
                                                    <span class="sr-only">조회수</span>
                                                </i>
                                                1,234
                                            </p>
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </article>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-first icon-angle">
                                        <span class="sr-only">first</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-prev icon-angle">
                                        <span class="sr-only">Previous</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a class="page-link" href="#">1<span></span></a></li>
                            <li><a class="page-link" href="#">2<span></span></a></li>
                            <li><a class="page-link" href="#">3<span></span></a></li>
                            <li><a class="page-link" href="#">4<span></span></a></li>
                            <li><a class="page-link" href="#">5<span></span></a></li>
                            <li><a class="page-link" href="#">6<span></span></a></li>
                            <li><a class="page-link" href="#">7<span></span></a></li>
                            <li><a class="page-link" href="#">8<span></span></a></li>
                            <li><a class="page-link" href="#">9<span></span></a></li>
                            <li><a class="page-link" href="#">10<span></span></a></li>
                            <li class="next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-next icon-angle">
                                        <span class="sr-only">Next</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-last icon-angle">
                                        <span class="sr-only">last</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>