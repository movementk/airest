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
            <li class="active"><a href="/mobile/customer/inquiry_write.php">1:1 문의 <span></span></a></li>
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
            <section class="inquiry-write">
                <div class="section-header">
                    <h2>1:1 <span>문의</span></h2>
                </div>
                <div class="section-content">
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
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-md btn-black" role="button">문의하기</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>