<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
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
                    <li class="breadcrumb-item active">자주묻는 질문</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- snb-menu -->
    <nav id="snb-menu">
        <div class="container">
            <ul>
                <li class="active"><a href="#">자주묻는질문<span></span></a></li>
                <li><a href="#">1:1 문의<span></span></a></li>
                <li><a href="#">정품등록<span></span></a></li>
                <li><a href="#">제품사용설명서<span></span></a></li>
                <li><a href="#">동영상설명서<span></span></a></li>
                <li><a href="#">배송 및 A/S안내<span></span></a></li>
                <li><a href="#">공지사항<span></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content" class="">
        <div class="container">
            <section>
                <div class="section-header">
                    <h3 class="section-title">FAQ</h3>
                </div>
                <div class="section-content">
                    <!-- 검색영역1 -->
                    <h6 class="test-title">검색영역 1</h6>
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
                    
                    <!-- 검색영역 -->
                    <h6 class="test-title">검색영역 2</h6>
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
                    
                    <!-- lnb menu -->
                    <h6 class="test-title">lnb 메뉴</h6>
                    <nav class="lnb-menu">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">제품관련</a></li>
                            <li><a href="#">이벤트</a></li>
                            <li><a href="#">A/S관련</a></li>
                            <li><a href="#">교환/반품</a></li>
                            <li><a href="#">기타</a></li>
                        </ul>
                    </nav>
                    
                    <!-- lnb menu -->
                    <h6 class="test-title">동영상 lnb</h6>
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">공기청정기</a></li>
                            <li><a href="#">가습기</a></li>
                            <li><a href="#">서큘레이터</a></li>
                        </ul>
                    </nav>
                    
                    <!-- btn list -->
                    <h6 class="test-title">btn list</h6>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-md btn-white" role="button">버튼1</a>
                            <a href="#" class="btn btn-md btn-black" role="button">버튼2</a>
                        </p>
                    </div>
                    
                    <!-- paging -->
                    <h6 class="test-title">paging</h6>
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
                    
                    <!-- FAQ list -->
                    <h6 class="test-title">faq list</h6>
                    <article class="board-type1">
                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading-1">
                                    <div>
                                        <a href="#none" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                            <dl>
                                                <dt>A/S관련</dt>
                                                <dd>가습, 증기, 연기, 수증기, 분무가 안 돼요 </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        먼저, 어댑터와 조절기의 작동 여부를 확인해야 합니다.<br><br>
                                        * 조절기와 어댑터의 LED가 정상인 경우<br><br>
                                        이 경우 고장 원인은 하부 본체에 물이 차서 너무 깊게 가라앉았거나, 조립을 잘못하여 모듈이 심하게 기울어진 경우, 모듈이 고장 났을 경우 세 가지입니다.<br>
                                        1. 모듈의 기울기 확인(10~20도 정도 기운 것은 정상)<br>
                                        2. 하부 본체를 들어 물이 차 있는지 흔들어보기<br>
                                        3. 위 두가지 증상이 아닐 경우 모듈 맞교환<br>
                                        <br><br>
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
                                    <div>
                                        <a href="#none" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            <dl>
                                                <dt>제품관련</dt>
                                                <dd>세척은 얼마나 해줘야 하나요? 반드시 물기를 말려서 사용해야 하나요?</dd>
                                            </dl>
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        content#2<br>
                                        content#2<br>
                                        content#2<br>
                                        content#2<br>
                                        content#2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- 제품사용설명서 -->
                    <h6 class="test-title">제품사용설명서</h6>
                    <article class="board-type2">
                        <ul>
                            <li>
                                <div class="product-item">
                                    <figure>
                                        <img src="/assets/images/sub/img_product01.gif" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="model-num">
                                    <h4>
                                        <small>AIR PURIFIER</small>
                                        <b>AP400</b>
                                    </h4>
                                </div>
                                <div class="details">
                                    <p>
                                        에어레스트는 건강과 감성을 담기 위해 노력합니다.<br>
                                        우리 가족 모두를 위한 안전하고 편리한 공기청정기입니다.
                                    </p>
                                </div>
                                <div class="manual-down">
                                    <a href="#">
                                        <i class="icon-pdf">
                                            <span class="sr-only">PDF 파일</span>
                                        </i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 동영상 설명서 -->
                    <h6 class="test-title">제품사용설명서</h6>
                    <article class="board-type3">
                        <ul class="row">
                            <li class="col-4">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_video01.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">NEW 2018 아기선풍기 베이비 팬</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_video02.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">아기바람 팬리스 서큘레이터</p>
                                </a>
                            </li>
                            <li class="col-4">
                                <a href="#">
                                    <figure>
                                        <img src="/assets/images/sub/img_video03.jpg" class="img-fluid" alt="">
                                    </figure>
                                    <p class="details">에어레스트 브랜드 스토리</p>
                                </a>
                            </li>
                        </ul>
                    </article>
                    
                    <!-- 공지사항 리스트 -->
                    <h6 class="test-title">공지사항</h6>
                    <article class="board-type4">
                        <ul>
                            <li>
                                <a href="#">
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
                                <a href="#">
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
                    
                    <!-- 이벤트 리스트 -->
                    <h6 class="test-title">이벤트 리스트</h6>
                    <article class="board-type5">
                        <ul>
                            <li>
                                <a href="#" class="ongoing">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="/assets/images/event/img_event_item01.jpg" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="details">
                                                <small class="label">진행중</small>
                                                <h4>LG U+ 영상 속 미로 가습기를 찾아라</h4>
                                                <p>
                                                    이벤트 페이지 블로그 공유해주시고, 동영상 속 미로 가습기를 캡쳐하셔서 <br>
                                                    댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                                                </p>
                                                <dl>
                                                    <dt>참여기간</dt>
                                                    <dd>2018.08.01 ~ 2018.08.31</dd>
                                                    <dt>당첨자 발표</dt>
                                                    <dd>2018.09.07</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li>
                                <a href="#" class="event-end">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure>
                                                <img src="/assets/images/event/img_event_item03.jpg" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="details">
                                                <small class="label">종료</small>
                                                <h4>LG U+ 영상 속 미로 가습기를 찾아라</h4>
                                                <p>
                                                    이벤트 페이지 블로그 공유해주시고, 동영상 속 미로 가습기를 캡쳐하셔서 <br>
                                                    댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                                                </p>
                                                <dl>
                                                    <dt>참여기간</dt>
                                                    <dd>2018.08.01 ~ 2018.08.31</dd>
                                                    <dt>당첨자 발표</dt>
                                                    <dd>2018.09.07</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            
                        </ul>
                    </article>
                    
                    <!-- 공지사항 리스트 -->
                    <h6 class="test-title">공지사항 뷰</h6>
                    <article class="board-view">
                        <div class="article-header">
                            <h4>미로 신규회원혜택 이벤트</h4>
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
                                이벤트 페이지 블로그 공유해주시고, 동영상 속 미로 가습기를 캡쳐하셔서 <br>댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                            </p>
                        </div>
                        <ul class="attach">
                            <li><a href="#">123.jpg</a></li>
                            <li><a href="#">123.jpg</a></li>
                        </ul>
                    </article>
                    
                    <!-- 이전글 다음글 -->
                    <h6 class="test-title">공지사항 뷰</h6>
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
                    
                    
                    <!-- 문의하기 -->
                    <h6 class="test-title">문의하기</h6>
                    <article class="write-form">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="essential"><label for="u-title">제목</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-title" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-name">이름</label></th>
                                            <td class="basic">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-contact">연락처</label></th>
                                            <td class="basic">
                                                <div class="form-group">
                                                    <input type="text" id="u-contact" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="basic">
                                            <th class="essential"><label for="u-mail">이메일</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="email" id="u-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential v-top"><label for="u-content">문의내용</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="u-content"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>첨부파일</th>
                                            <td class="file">
                                                <div class="form-group">
                                                    <input type="file" id="u-file" class="sr-only">
                                                    <label for="u-file">파일찾기</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </article>
                    
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>