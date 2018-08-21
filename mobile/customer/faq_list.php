<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- snb-menu -->
    <nav id="snb-menu">
        <ul class="snb-list">
            <li class="active"><a href="/mobile/customer/faq_list.php">자주묻는질문 <span></span></a></li>
            <li><a href="/mobile/customer/inquiry_write.php">1:1 문의 <span></span></a></li>
            <li><a href="/mobile/customer/genuine.php">정품등록 <span></span></a></li>
            <li><a href="/mobile/customer/manual.php">제품사용설명서 <span></span></a></li>
            <li><a href="/mobile/customer/video_manual.php">동영상설명서 <span></span></a></li>
            <li><a href="/mobile/customer/as_delivery.php">배송 및 A/S안내 <span></span></a>
            <li><a href="/mobile/customer/notice_list.php">공지사항 <span></span></a></li>
        </ul>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="faq-list">
                <div class="section-header">
                    <h2>FAQ</h2>
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
                    <nav class="lnb-list">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">제품관련</a></li>
                            <li><a href="#">이벤트</a></li>
                            <li><a href="#">A/S관련</a></li>
                            <li><a href="#">배송관련</a></li>
                            <li><a href="#">교환/반품</a></li>
                            <li><a href="#">기타</a></li>
                        </ul>
                    </nav>
                    <div class="board-list-type1">
                        <div class="accordion" id="faqList">
                            <div class="card">
                                <div class="card-header" id="heading-1">
                                    <a href="#" class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <dl>
                                            <dt>A/S관련</dt>
                                            <dd>가습, 증기, 연기, 수증기, 분무가 안 돼요</dd>
                                        </dl>
                                    </a>
                                </div>
                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#faqList">
                                    <div class="card-body">
                                        먼저, 어댑터와 조절기의 작동 여부를 확인해야 합니다.<br><br>
                                        * 조절기와 어댑터의 LED가 정상인 경우<br><br>
                                        이 경우 고장 원인은 하부 본체에 물이 차서 너무 깊게 가라앉았거나, 조립을 잘못하여 모듈이 심하게 기울어진 경우, 모듈이 고장 났을 경우 세 가지입니다.<br>
                                        1. 모듈의 기울기 확인(10~20도 정도 기운 것은 정상)<br>
                                        2. 하부 본체를 들어 물이 차 있는지 흔들어보기<br>
                                        3. 위 두가지 증상이 아닐 경우 모듈 맞교환<br><br>
                                        * 조절기와 어댑터의 LED가 깜빡이거나 꺼진 경우<br><br>
                                        1. 어댑터만 플러그에 꽂아 봅니다.<br>
                                        - 미점등 혹은 점멸 시 모듈/조절기/어댑터 맞교환<br><br>
                                        2. 어댑터 LED가 정상일 경우 어댑터와 조절기만 연결합니다.<br>
                                        - 조절기 미점등 혹은 점멸 시 모듈/조절기 맞교환<br><br>
                                        3. 조절기 LED가 정상일 경우 모듈까지 연결합니다.<br>
                                        - 미점등 혹은 점멸 시 모듈 맞교환
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        <dl>
                                            <dt>A/S관련</dt>
                                            <dd>무상 A/S 기간은 어떻게 되나요?</dd>
                                        </dl>
                                    </a>
                                </div>
                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#faqList">
                                    <div class="card-body">
                                        Content 02
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-3">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        <dl>
                                            <dt>제품관련</dt>
                                            <dd>세척은 얼마나 해줘야 하나요? 반드시 물기를 말려서 사용해야 하나요?</dd>
                                        </dl>
                                    </a>
                                </div>
                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#faqList">
                                    <div class="card-body">
                                        Content 03
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-4">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        <dl>
                                            <dt>A/S관련</dt>
                                            <dd>가습 엔진 수리가 가능한가요?</dd>
                                        </dl>
                                    </a>
                                </div>
                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#faqList">
                                    <div class="card-body">
                                        Content 04
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5">
                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                        <dl>
                                            <dt>제품관련</dt>
                                            <dd>반드시 정수된 물을 사용해야 하나요?  </dd>
                                        </dl>
                                    </a>
                                </div>
                                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#faqList">
                                    <div class="card-body">
                                        Content 05
                                    </div>
                                </div>
                            </div>
                        </div>
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