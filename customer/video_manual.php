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
                    <li class="breadcrumb-item active">동영상 설명서</li>
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
                <li><a href="#">정품등록<span></span></a></li>
                <li><a href="/customer/manual.php">제품사용설명서<span></span></a></li>
                <li class="active"><a href="/customer/video_manual.php">동영상설명서<span></span></a></li>
                <li><a href="/customer/as_delivery.php">배송 및 A/S안내<span></span></a></li>
                <li><a href="/customer/notice_list.php">공지사항<span></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="video-manual">
                <div class="section-header">
                    <h3 class="section-title"><span>동영상 설명서</span></h3>
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
                    <article class="board-type3">
                        <ul class="row">
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video01.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">NEW 2018 아기선풍기 베이비 팬</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video02.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">아기바람 팬리스 서큘레이터</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video03.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 브랜드 스토리</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video04.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 AR02 세척방법</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video05.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 AR02 동작방법</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video06.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 AR02 수위조절밸브 연결 방법</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video07.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 AR02 아답터 연결방법</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video08.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">하이메이드 AR03 수위조절밸브 장착 법</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#" data-toggle="modal" data-target="#video-modal">
                                    <figure>
                                        <img src="/assets/images/customer/img_video09.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">하이메이드 AR03 실리콘캡 사용 법 / 세척시 주의사항</p>
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
                    <div class="search-type2">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>선택</option>
                                    <option>선택2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="search-2" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search-2" class="sr-only">검색영역</label>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
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