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
            <li class="active"><a href="/mobile/customer/inquiry_list.php">1:1 문의 <span></span></a></li>
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
            <section class="inquiry-confirm">
                <div class="section-header">
                    <h2>1:1 <span>문의</span></h2>
                </div>
                <div class="section-content">
                    <div class="pw-form">
						<div class="form">
							<form action="#">
								<figure>
									<img src="/mobile/assets/images/customer/img_lock.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>비밀번호 확인</h4>
										<p>
											개인정보 보호를 위해 비밀번호를 한번 더 확인합니다. <br>
											타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
										</p>
									</figcaption>
								</figure>
								<div class="form-group">
									<input type="password" class="form-control" id="u-pw" placeholder="비밀번호" name="pwd">
									<label for="u-pw" class="sr-only">비밀번호 입력</label>
								</div>
								<div class="btn-area">
									<p>
										<button type="submit" class="btn btn-default">확인하기</button>
									</p>
								</div>
							</form>
						</div>
					</div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>