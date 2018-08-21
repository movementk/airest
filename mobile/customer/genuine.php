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
            <li class="active"><a href="/mobile/customer/genuine.php">정품등록 <span></span></a></li>
            <li><a href="/mobile/customer/manual.php">제품사용설명서 <span></span></a></li>
            <li><a href="/mobile/customer/video_manual.php">동영상설명서 <span></span></a></li>
            <li><a href="/mobile/customer/as_delivery.php">배송 및 A/S안내 <span></span></a>
            <li><a href="/mobile/customer/notice_list.php">공지사항 <span></span></a></li>
        </ul>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="genuine">
                <div class="section-header">
                    <h2><span>정품등록</span></h2>
                </div>
                <div class="section-content">
                    <article class="explanation">
                        <figure>
                            <img src="/mobile/assets/images/customer/img_explanation.jpg" class="img-fluid" alt="">
                        </figure>
                        <div class="summary">
                            <h3>제품번호(S/N) 확인방법</h3>
                            <ol>
                                <li>제품번호는 제품 뒷면에 스티커로 붙어있습니다.</li>
                                <li>제품번호 입력 시 S/N을 뺀 W부터 입력하시면 됩니다.</li>
                            </ol>
                        </div>
                    </article>
                    <article class="register-form">
                        <form action="#">
                            <ul>
                                <li>
                                    <label for="p-num">제품번호(S/N) *</label>
                                    <div class="form-group">
                                        <input type="text" id="p-num" class="form-control" placeholder="앞 11자리까지만 입력">
                                    </div>
                                </li>
                                <li class="vender-date">
                                    <p>구매년월일 *</p>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>선택</option>
                                        </select>
                                        월
                                        <select class="form-control">
                                            <option>선택</option>
                                        </select>
                                        일
                                        <select class="form-control">
                                            <option>선택</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <label for="u-mail">이메일 *</label>
                                    <div class="form-group">
                                        <input type="text" id="u-mail" class="form-control">
                                    </div>
                                </li>
                                <li class="u-vendor">
                                    <label for="u-vendor">구입처 *</label>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>선택</option>
                                        </select>
                                        <input type="text" id="u-vendor" class="form-control">
                                    </div>
                                </li>
                            </ul>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">나의 정품인증 내역</a>
                                    <button type="submit" class="btn btn-md btn-black">정품인증하기</button>
                                </p>
                            </div>
                        </form>
                    </article>
                    <article class="attention-box">
                        <h3>제품등록을 하면 이런 점이 좋습니다.</h3>
                        <ol>
                            <li>구입하신 제품이 등록되어 에어레스트에서 제공하는 보증 및 A/S를 받을 권리를 보장받게 됩니다.</li>
                            <li>등록된 제품 내역을 언제든지 확인할 수 있어 제품 관리에 효율적입니다.</li>
                            <li>향후 다양한 이벤트에 참여하실 수 있으며, 새로운 에어레스트 제품에 대한 정보를 받으실 수 있습니다.</li>
                        </ol>
                    </article>
                    <article class="product-info">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>제품군/모델명</th>
                                        <td>공기청정기 / AZBE380-HWK</td>
                                    </tr>
                                    <tr>
                                        <th>보증기간</th>
                                        <td><b>2년</b> (2018.08.08 ~ 2020.08.08)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>