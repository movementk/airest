<!-- Header -->
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <button type="button" class="btn nav-open">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="sr-only">네비 열기</span>
                </button>
                <h1 class="logo"><a href="/"><img src="/assets/images/logo.png" alt="airest"></a></h1>
            </div>
            <div class="col-9">
                <nav id="gnb">
                    <ul>                    
                        <li><a href="/story/brand_story.php">브랜드스토리</a></li>
                        <!--<li><a href="#">COMPANY</a></li>-->
                        <li><a href="/product/product_list.php">제품소개</a></li>
                        <li><a href="/customer/faq_list.php">고객지원</a></li>
                        <li><a href="/event/event_list.php">이벤트</a></li>
                        <li><a href="#">쇼핑몰</a></li>
                    </ul>
                    <div class="global-search">
                        <form action="#">
                            <div class="form-group d-none">
                                <input type="text" id="global-search" class="form-control" placeholder="검색어를 입력하세요">
                                <label for="global-search" class="sr-only">검색영역</label>
                            </div>
                            <a href="javascript:;" class="btn btn-search default-btn" role="button">
                                <i class="icon-search">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </a>
                            <button type="submit" class="btn btn-search event-btn">
                                <i class="icon-search">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- side-nav -->
<aside id="side-nav">
    <button type="button" class="btn nav-close">
        <span class="sr-only">네비 닫기</span>
    </button>
    <div class="side-body">
        <ul class="gnb-list">
            <li>
                <a href="#">브랜드스토리 <span></span></a>
            </li>
            <!--<li>
                <a href="#">COMPANY <span></span></a>
                <ul>
                    <li><a href="#">회사소개</a></li>
                    <li><a href="#">찾아오시는길</a></li>
                </ul>
            </li>-->
            <li>
                <a href="#">제품소개 <span></span></a>
                <ul>
                    <li><a href="/product/product_list.php">가습기</a></li>
                    <li><a href="/product/product_list.php">공기청정기</a></li>
                    <li><a href="/product/product_list.php">선풍기</a></li>
                </ul>
            </li>
            <li>
                <a href="#">고객지원 <span></span></a>
                <ul>
                    <li><a href="/customer/faq_list.php">자주묻는질문</a></li>
                    <li><a href="/customer/inquiry_write.php">일대일문의</a></li>
                    <li><a href="/customer/genuine.php">정품등록</a></li>
                    <li><a href="/customer/manual.php">제품설명서</a></li>
                    <li><a href="/customer/video_manual.php">동영상설명서</a></li>
                    <li><a href="/customer/as_delivery.php">배송A/S안내</a></li>
                    <li><a href="/customer/notice_list.php">공지사항</a></li>
                    <li><a href="https://smartstore.naver.com/miro2017/premiumreview?cp=1" target="_blank">리뷰</a></li>
                </ul>
            </li>
            <li>
                <a href="/event/event_list.php">이벤트 <span></span></a>
            </li>
            <li>
                <a href="https://smartstore.naver.com/miro2017" target="_blank">쇼핑몰 <span></span></a>
            </li>
        </ul>
    </div>
    <div class="backdrop"></div>
</aside>