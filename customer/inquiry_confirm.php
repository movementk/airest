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
                    <li class="breadcrumb-item active">1:1 문의하기</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- snb-menu -->
    <nav id="snb-menu">
        <div class="container">
            <ul>
                <li><a href="/customer/faq_list.php">자주묻는질문<span></span></a></li>
                <li class="active"><a href="/customer/inquiry_list.php">1:1 문의하기<span></span></a></li>
                <li><a href="/customer/genuine.php">정품등록<span></span></a></li>
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
            <section class="inquiry-confirm">
                <div class="section-header">
                    <h3 class="section-title">1:1 <span>문의하기</span></h3>
                </div>
                <div class="section-content">
					<div class="pw-form">
						<div class="form">
							<form action="#">
								<figure>
									<img src="/assets/images/customer/img_lock.jpg" class="img-fluid" alt="">
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
										<button type="submit" class="btn btn-default">확인</button>
									</p>
								</div>
							</form>
						</div>
					</div>	
				</div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>