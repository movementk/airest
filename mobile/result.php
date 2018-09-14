<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
</head>
<body class="sub result">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="search-result">
                <div class="section-header">
                    <h2>SEARCH</h2>
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
                    <article class="result-area">
                        <p class="none-result">검색된 결과가 없습니다.</p>
                        <ul class="row">
                            <li class="col-6">
                                <a href="#">
                                    <div class="model-info">
                                        <small>AIR PURIFIER</small>
                                        <b>AF400</b>
                                    </div>
                                    <div class="figure-item">
                                        <img src="/mobile/assets/images/product/img_list_item01.png" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#">
                                    <div class="model-info">
                                        <small>AIR PURIFIER</small>
                                        <b>AF400</b>
                                    </div>
                                    <div class="figure-item">
                                        <img src="/mobile/assets/images/product/img_list_item02.png" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#">
                                    <div class="model-info">
                                        <small>AIR PURIFIER</small>
                                        <b>AF400</b>
                                    </div>
                                    <div class="figure-item">
                                        <img src="/mobile/assets/images/product/img_list_item03.png" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6">
                                <a href="#">
                                    <div class="model-info">
                                        <small>AIR PURIFIER</small>
                                        <b>AF400</b>
                                    </div>
                                    <div class="figure-item">
                                        <img src="/mobile/assets/images/product/img_list_item04.png" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </article>
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