<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
</head>
<body class="sub ">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- snb-menu -->
    <nav id="snb-menu">
        <ul class="snb-list">
            <li class="active"><a href="#">자주묻는질문 <span></span></a></li>
            <li><a href="#">1:1 문의 <span></span></a></li>
            <li><a href="#">정품등록 <span></span></a></li>
            <li><a href="#">제품사용설명서 <span></span></a></li>
            <li><a href="#">동영상설명서 <span></span></a></li>
            <li><a href="#">배송 및 A/S안내 <span></span></a></li>
            <li><a href="#">공지사항 <span></span></a></li>
        </ul>
    </nav>
    
    
    <!-- Sub Content Start -->
    <main id="content" class="introduce">
        <div class="container">
            <!-- section-header -->
            <div class="section-header">
                <h2>FAQ</h2>
            </div>
            
            <!-- search-form -->
            <p class="ex-title">검색폼</p>
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
            
            <br><br><br>
            
            <!-- lnb-list -->
            <p class="ex-title">lnb 메뉴</p>
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
            
            <br><br><br>
            
            <!-- lnb-list -->
            <p class="ex-title">tab 메뉴</p>
            <nav class="tab-menu">
                <ul>
                    <li class="active"><a href="#">전체</a></li>
                    <li><a href="#">공기청정기</a></li>
                    <li><a href="#">가습기</a></li>
                    <li><a href="#">서큘레이터</a></li>
                </ul>
            </nav>
            
            <br><br><br>
            
            <!-- board-list-type1 -->
            <p class="ex-title">faq list</p>
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
                </div>
            </div>
            
            <br><br><br>
            
            <!-- board-list-type2 -->
            <p class="ex-title">제품사용설명서</p>
            <div class="board-list-type2">
                <ul>
                    <li>
                        <figure>
                            <img src="/mobile/assets/images/customer/img_product01.jpg" class="img-fluid" alt="">
                        </figure>
                        <div class="details">
                            <h3>
                                <small>AIR PURIFIER</small>
                                AF400
                            </h3>
                            <a href="#" class="btn btn-pdf" role="button">
                                <img src="/mobile/assets/images/customer/icon_pdf.jpg" alt="">
                            </a>
                            <p>
                                에어레스트는 건강과 감성을 담기 위해 노력합니다.<br> 우리 가족 모두를 위한 안전하고 편리한 공기청정기입니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <figure>
                            <img src="/mobile/assets/images/customer/img_product01.jpg" class="img-fluid" alt="">
                        </figure>
                        <div class="details">
                            <h3>
                                <small>AIR PURIFIER</small>
                                AF400
                            </h3>
                            <a href="#" class="btn btn-pdf" role="button">
                                <img src="/mobile/assets/images/customer/icon_pdf.jpg" alt="">
                            </a>
                            <p>
                                에어레스트는 건강과 감성을 담기 위해 노력합니다.<br> 우리 가족 모두를 위한 안전하고 편리한 공기청정기입니다.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <br><br><br>
            
            <!-- board-list-type3 -->
            <p class="ex-title">동영상설명서</p>
            <div class="board-list-type3">
                <ul>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/customer/img_video01.jpg" class="img-fluid" alt="">
                                <figcaption>NEW 2018 아기선풍기 베이비 팬</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
            
            <br><br><br>
            
            <!-- board-list-type3 -->
            <p class="ex-title">공지사항</p>
            <div class="board-list-type4">
                <ul>
                    <li>
                        <a href="#">
                            <h3>미로 신규회원혜택 이벤트</h3>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="hit">1,234</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>미로 신규회원혜택 이벤트</h3>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="hit">1,234</li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <h3>미로 신규회원혜택 이벤트</h3>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="reply">답변대기</li>
                            </ul>
                        </a> 
                    </li>
                    <li>
                        <a href="#">
                            <h3>미로 신규회원혜택 이벤트</h3>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="reply success">완료</li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
            
            <br><br><br>
            
            <!-- write-form -->
            <p class="ex-title">1:1문의</p>
            <div class="write-form">
                <form action="#">
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="u-subject" class="sr-only">제목</label>
                                            <input type="text" id="u-subject" class="form-control" placeholder="제목을 입력해주세요">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="u-name" class="sr-only">이름</label>
                                            <input type="text" id="u-name" class="form-control" placeholder="이름을 입력해주세요">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="u-contact" class="sr-only">연락처</label>
                                            <input type="text" id="u-contact" class="form-control" placeholder="연락처를 입력해주세요">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="u-mail" class="sr-only">이메일</label>
                                            <input type="text" id="u-mail" class="form-control" placeholder="이메일 주소를 입력해주세요">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="u-content" class="sr-only">문의내용</label>
                                            <textarea id="u-content" class="form-control" placeholder="문의내용을 입력해주세요"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="attach">파일찾기</label>
                                            <input type="file" id="attach" class="sr-only">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            
            <br><br><br>
            
            <!-- board-view -->
            <p class="ex-title">공지사항 뷰</p>
            <div class="board-view">
                <div class="view-header">
                    <h3>미로 신규회원혜택 이벤트</h3>
                    <ul>
                        <li class="date">2018-07-01</li>
                        <li class="hit">1,234</li>
                    </ul>
                </div>
                <div class="view-content">
                    이벤트 페이지 블로그 공유해주시고, <br>
                    동영상 속 미로 가습기를 캡쳐하셔서 <br>
                    댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                    <div class="attach">
                        <a href="#">123.jpg</a>
                        <a href="#">123.jpg</a>
                    </div>
                </div>
            </div>
            
            <br><br><br>
            
            <!-- page-link -->
            <p class="ex-title">이전 다음 글</p>
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
            
            <br><br><br>
            
            <!-- btn-area -->
            <p class="ex-title">버튼종류</p>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-md btn-white" role="button">버튼1</a>
                    <a href="#" class="btn btn-md btn-black" role="button">버튼2</a>
                </p>
            </div>
            
            <br><br><br>
            
            <!-- paging -->
            <p class="ex-title">paging</p>
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
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>