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
            <section class="inquiry-write">
                <div class="section-header">
                    <h3 class="section-title">1:1 <span>문의하기</span></h3>
                </div>
                <div class="section-content">
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
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-white" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-md btn-black" role="button">문의하기</button>
                                </p>
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