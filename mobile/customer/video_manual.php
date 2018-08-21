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
            <li class="active"><a href="/mobile/customer/video_manual.php">동영상설명서 <span></span></a></li>
            <li><a href="/mobile/customer/as_delivery.php">배송 및 A/S안내 <span></span></a>
            <li><a href="/mobile/customer/notice_list.php">공지사항 <span></span></a></li>
        </ul>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="video-manual">
                <div class="section-header">
                    <h2><span>동영상설명서</span></h2>
                </div>
                <div class="section-content">
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">공기청정기</a></li>
                            <li><a href="#">가습기</a></li>
                            <li><a href="#">서큘레이터</a></li>
                        </ul>
                    </nav>
                    <div class="board-list-type3">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/mobile/assets/images/customer/img_video01.jpg" class="img-fluid" alt="">
                                        <figcaption>NEW 2018 아기선풍기 베이비 팬</figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/mobile/assets/images/customer/img_video01.jpg" class="img-fluid" alt="">
                                        <figcaption>NEW 2018 아기선풍기 베이비 팬</figcaption>
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/mobile/assets/images/customer/img_video01.jpg" class="img-fluid" alt="">
                                        <figcaption>NEW 2018 아기선풍기 베이비 팬</figcaption>
                                    </figure>
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
                </div>
            </section>
        </div>
    </main>
    
    <!-- video modal -->
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-cancel-1">
                            <span class="sr-only">팝업닫기</span>
                        </i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/3JvV1b6M4zM" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
        (function($){
            // 유튜브 팝업 종료관련
            $("#video-modal").on('hidden.bs.modal', function(e) {
                $iframe = $(this).find( "iframe" );
                $iframe.attr("src", $iframe.attr("src"));
            });
        })(jQuery);
    </script>
</body>
</html>