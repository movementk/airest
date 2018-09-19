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
                    <li class="breadcrumb-item active">자주묻는 질문</li>
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
                <li class="active"><a href="/customer/genuine.php">정품등록<span></span></a></li>
                <li><a href="/customer/manual.php">제품사용설명서<span></span></a></li>
                <li><a href="/customer/video_manual.php">동영상설명서<span></span></a></li>
                <li><a href="/customer/as_delivery.php">배송 및 A/S안내<span></span></a></li>
                <li><a href="/customer/notice_list.php">공지사항<span></span></a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="genuine">
                <div class="section-header">
                    <h3 class="section-title"><span>정품등록</span></h3>
                </div>
                <div class="section-content">
                    <article class="explanation">
                        <div class="row">
                            <div class="col-4">
                                <figure>
                                    <img src="/assets/images/customer/img_explanation.jpg" alt="">
                                </figure>
                            </div>
                            <div class="col-8">
                                <div class="summary">
                                    <h4>제품번호(S/N) 확인방법</h4>
                                    <ol>
                                        <li>제품번호는 제품 뒷면에 스티커로 붙어있습니다.</li>
                                        <li>제품번호 입력 시 S/N을 뺀 W부터 입력하시면 됩니다.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="register-form">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th><label for="p-num">제품번호(S/N) *</label></th>
                                            <td class="p-num">
                                                <div class="form-group">
                                                    <input type="text" id="p-num" class="form-control">
                                                    <p class="note">앞 11자리까지만 입력</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>구매년월일 *</th>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>선택</option>
                                                    </select>
                                                    년
                                                    <select class="form-control">
                                                        <option>선택</option>
                                                    </select>
                                                    월
                                                    <select class="form-control">
                                                        <option>선택</option>
                                                    </select>
                                                    일
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-mail">이메일 *</label></th>
                                            <td class="email">
                                                <div class="form-group">
                                                    <input type="email" id="u-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-vendor">구입처 *</label></th>
                                            <td class="vendor">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>선택</option>
                                                    </select>
                                                    <input type="text" id="u-vendor" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-mail">휴대폰 인증하기 *</label></th>
                                            <td class="confirm">
                                                <div class="form-group">
                                                    <input type="email" id="u-mail" class="form-control">
                                                </div>
                                                <div class="btn-area">
													<p>
														<a href="#" class="btn btn-md btn-white" role="button">정품인증하기</a>
													</p>
												</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white">나의 정품인증 내역</a>
                                    <button type="submit" class="btn btn-md btn-black">정품인증하기</button>
                                </p>
                            </div>
                        </form>
                    </article>
                    <article class="attention">
                        <h4>제품등록을 하면 이런 점이 좋습니다.</h4>
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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>