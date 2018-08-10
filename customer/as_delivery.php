<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="sub-jumbo-visual">
        <div class="container">
            <div class="cs-center">
                <h2>
                    <small>고객센터</small>
                    1566-8903
                </h2>
                <dl>
                    <dt>상담시간</dt>
                    <dd>10:00 ~ 17:00 <span>(주말 및 공휴일 휴무)</span></dd>
                    <dt>점심시간</dt>
                    <dd>12:00~13:00</dd>
                </dl>
                <p class="attention">기타제품에 관한 문의사항은 1:1문의 게시판을 이용하여 주시기 바랍니다.</p>
            </div>
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
                <li><a href="/customer/video_manual.php">동영상설명서<span></span></a></li>
                <li class="active"><a href="/customer/as_delivery.php">배송 및 A/S안내<span></span></a></li>
                <li><a href="/customer/notice_list.php">공지사항<span></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content" class="as-delivery">
        <article class="delivery">
            <div class="container">
                <h3>배송안내</h3>
                <div class="row">
                    <div class="col-7">
                        <dl>
                            <dt>당일배송 마감시간</dt>
                            <dd>오후 1시 이전 입금 확인 후</dd>
                            <dt>배송기간</dt>
                            <dd>주문 후 2~3일   I   도서·산간지역 3~4일 소요 (국/공휴일 제외)</dd>
                        </dl>
                    </div>
                    <div class="col-5">
                        <ul class="attention-list">
                            <li>배송업체의 사정상 배송이 다소 지연될 수도 있음을 양지하여 주시기 바랍니다.</li>
                            <li>제주, 섬지역은 도선료/항공료가 추가 될 수 있습니다.</li>
                            <li>제품 특성상 묶음배송이 불가능하오니 참고해 주시기 바랍니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article class="return-exchange">
            <div class="container">
                <h3>반품/교환</h3>
                <ul class="dashed-list">
                    <li>제품 불량시 100% 판매자 부담으로 교환 및 반품 가능합니다.</li>
                    <li>제품 수령 후 7일 이내 반품 및 교환 가능합니다.</li>
                    <li>단순변심으로 인한 교환/반품의 경우 배송비(왕복 택배비)는 고객님 부담이며, 교환/반품 시 CJ택배를 이용하여 배송하여 주시기 바랍니다.</li>
                    <li>타택배로 인한 추가 택배비용은 구매자 부담임을 양지하여 주시기 바랍니다.</li>
                    <li>사전연락 없는 제품의 반품에 대해서는 통보없이 재반송 될 수 있으니 꼭 판매자에게 문의하여 주시기 바랍니다.</li>
                    <li><b>반송주소 : 인천광역시 연수구 하모니로 187번길 16 (송도동) 3층 (주)미로</b></li>
                </ul>
            </div>
        </article>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>