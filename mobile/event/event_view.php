<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/event.css">
</head>
<body class="sub customer">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="event-view">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <div class="section-content">
                    <div class="board-view">
                        <div class="view-header">
                            <h3>미로 신규회원혜택 이벤트</h3>
                            <ul>
                                <li class="date">2018-07-01</li>
                                <li class="hit">1,234</li>
                            </ul>
                        </div>
                        <div class="view-content">
                            이벤트 페이지 블로그 공유해주시고, <br>
                            동영상 속 미로 가습기를 캡쳐하셔서 <br>
                            댓글 남겨주시는 고객님들께 특별한 선물을 드립니다~
                            <div class="attach">
                                <a href="#">123.jpg</a>
                                <a href="#">123.jpg</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="/mobile/event/event_list.php" class="btn btn-md btn-black" role="button">목록으로</a>
                        </p>
                    </div>
                    <div class="page-move">
                        <ul>
                            <li class="prev">
                                <a href="#">이전글 제목이 노출되는 영역입니다.</a>
                            </li>
                            <li class="next">
                                <a href="#">다음글이 없습니다.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>