<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub result">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content">
        <section class="search-result">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">SEARCH</h3>
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
                    <article class="result-area">
                        <p class="none-result">검색된 결과가 없습니다.</p>
                        <ul class="row">
                            <li class="col-3">
                                <a href="#">
                                    <small>AIR PURIFIER</small>
                                    <b>AF400</b>
                                    <figure>
                                        <img src="/assets/images/product/img_list_item01.png" alt="">
                                    </figure>
                                    <div class="view-hover"></div>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#">
                                    <small>AIR PURIFIER</small>
                                    <b>AP400</b>
                                    <figure>
                                        <img src="/assets/images/product/img_list_item02.png" alt="">
                                    </figure>
                                    <div class="view-hover"></div>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#">
                                    <small>AIR PURIFIER</small>
                                    <b>AP600</b>
                                    <figure>
                                        <img src="/assets/images/product/img_list_item03.png" alt="">
                                    </figure>
                                    <div class="view-hover"></div>
                                </a>
                            </li>
                            <li class="col-3">
                                <a href="#">
                                    <small>AIR PURIFIER</small>
                                    <b>AP800</b>
                                    <figure>
                                        <img src="/assets/images/product/img_list_item04.png" alt="">
                                    </figure>
                                    <div class="view-hover"></div>
                                </a>
                            </li>
                        </ul>
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
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>