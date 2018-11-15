<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="entry-write">
                <div class="section-header">
                    <h2>응모하기</h2>
                </div>
                <ul class="attention">
                    <li>신속한 구매 확인을 위해 구매시 <i>등록했던 정보를 정확히 기입</i>해주세요.</li>
                    <li>미로/에어레스트 <i>온라인 기획전에 표기된 곳에서 구매하신 고객에만 적용</i>됩니다. (홈쇼핑, 백화점, 하이마트, 이마트 매장 구매고객 제외)</li>
                    <li>아래 "구매처 선택" 목록에 없는 구매처는 이벤트에 참여하실 수 없으니 <i>구매처를 정확히 확인</i>해 주세요.</li>
                </ul>
                <div class="section-content">
                    <form action="#">
                        <ul>
                            <li>
                                <h3 class="necessary">구매처 선택</h3>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>선택</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="p-name">구매한 상품</label></h3>
                                <div class="form-group">
                                    <input type="text" id="p-name" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="p-ea">수량</label></h3>
                                <div class="form-group">
                                    <input type="text" id="p-ea" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="order-num">주문번호</label></h3>
                                <div class="form-group">
                                    <input type="text" id="order-num" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="subscriber">신청인명</label></h3>
                                <div class="form-group">
                                    <input type="text" id="subscriber" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="subscriber-phone">신청인 휴대폰</label></h3>
                                <div class="form-group">
                                    <input type="text" id="subscriber-phone" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="subscriber-mail">신청자 메일</label></h3>
                                <div class="form-group">
                                    <input type="text" id="subscriber-mail" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="receiver-name">수취인명</label></h3>
                                <div class="form-group">
                                    <input type="text" id="receiver-name" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="receiver-phone">수취인 휴대폰</label></h3>
                                <div class="form-group">
                                    <input type="text" id="receiver-phone" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="order-date">구매일자</label></h3>
                                <div class="form-group">
                                    <input type="text" id="order-date" class="form-control">
                                </div>
                            </li>
                            <li class="zipcode">
                                <h3 class="necessary"><label for="u-zipcode">우편번호</label></h3>
                                <div class="form-group">
                                    <input type="text" id="u-zipcode" class="form-control">
                                    <a href="#" class="btn btn-sm" role="button">우편번호찾기</a>
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="receiver-addr">주소(수취인)</label></h3>
                                <div class="form-group">
                                    <input type="text" id="receiver-addr" class="form-control" placeholder="수취인 주소를 입력하세요">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="detail-addr">상세주소</label></h3>
                                <div class="form-group">
                                    <input type="text" id="detail-addr" class="form-control">
                                </div>
                            </li>
                            <li>
                                <h3 class="necessary"><label for="review-url">후기글 작성 URL</label></h3>
                                <div class="form-group">
                                    <input type="text" id="review-url" class="form-control">
                                </div>
                            </li>
                            <li class="screenshot">
                                <h3>스크린샷 이미지</h3>
                                <div class="form-group">
                                    <label for="screenshot-img" class="sr-only">파일찾기</label>
                                    <input type="button" value="파일첨부" onclick="document.getElementById('file2').click();">
                                    <input type="file" id="file2" name="file2" onchange="document.getElementById('screenshot-img').value = this.value">
                                    <input type="text" class="form-control file" id="screenshot-img" name="screenshot-img" readonly>
                                </div>
                            </li>
                            <li>
                                <h3><label for="u-comment">메모</label></h3>
                                <div class="form-group">
                                    <input type="text" id="u-comment" class="form-control" placeholder="전달할 내용이 있으면 간단히 입력해주세요">
                                </div>
                            </li>
                        </ul>
                        <div class="privacy">
                            <div class="details">
                                <h4>개인정보취급방침</h4>
                                <p>
                                    개인정보취급방침이 노출되는 영역입니다.<br>
                                    개인정보취급방침이 노출되는 영역입니다.<br>
                                    개인정보취급방침이 노출되는 영역입니다.<br>
                                    개인정보취급방침이 노출되는 영역입니다.<br>
                                    개인정보취급방침이 노출되는 영역입니다.
                                </p>
                            </div>
                            <div class="agreement">
                                <label><input type="radio">동의합니다.</label>
                                <label><input type="radio">동의하지 않습니다.</label>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-white" role="button">취소하기</a>
                                <button type="submit" class="btn btn-md btn-gray">응모하기</button>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>