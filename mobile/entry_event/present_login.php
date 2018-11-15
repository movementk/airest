<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="present-login">
                <div class="section-header">
                    <h2>EVENT</h2>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/mobile/entry_event/event_list.php">진행중 이벤트</a></li>
                        <li><a href="/mobile/entry_event/end_event_list.php">종료 이벤트</a></li>
                        <li><a href="/mobile/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                        <li class="active"><a href="/mobile/entry_event/present_login.php">나의 응모현황</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <p class="summary">이벤트 응모 시 작성하신 정보로<br>응모 현황을 확인 하실 수 있습니다.</p>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="u-name" class="form-control" placeholder="신청인명">
                            <label for="u-name" class="sr-only">신청인명</label>
                            <input type="text" id="u-phone" class="form-control" placeholder="신청인 휴대폰">
                            <label for="u-phone" class="sr-only">신청인 휴대폰</label>
                            <input type="text" id="u-mail" class="form-control" placeholder="신청인 메일">
                            <label for="u-mail" class="sr-only">신청인 메일</label>
                        </div>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-lg">확인하기</button>
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