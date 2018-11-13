<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/entry_event.css">
</head>
<body class="sub entry-event">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="present-list">
                <div class="section-header">
                    <nav class="tab-menu">
                        <ul>
                            <li><a href="/entry_event/event_list.php">진행중 이벤트</a></li>
                            <li><a href="/entry_event/end_event_list.php">종료 이벤트</a></li>
                            <li><a href="/entry_event/prizewinner_list.php">당첨자 발표</a></li>
                            <li class="active"><a href="/entry_event/present_login.php">나의 응모현황</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="section-content">
                    <div class="table-wrap my-list">
                        <table class="table">
                            <colgroup>
                                <col style="width: 100px;">
                                <col style="width: 585px;">
                                <col style="width: 170px;">
                                <col style="width: 200px;">
                                <col style="width: 115px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>응모일</th>
                                    <th>당첨현황</th>
                                    <th>비고</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--
                                    진행중: ongoing
                                    당점: prizewinner
                                    비당첨: not-prizewinner
                                -->
                                <tr>
                                    <td class="num">10</td>
                                    <td>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <h3>
                                                이벤트 제목이 노출되는 영역입니다.
                                            </h3>
                                        </a>
                                    </td>
                                    <td class="date">2018-07-01</td>
                                    <td>
                                       <p class="ongoing">이벤트 진행중</p> 
                                    </td>
                                    <td>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white" role="button">수정하기</a>
                                                <a href="#" class="btn btn-sm btn-white" role="button">삭제하기</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="num">10</td>
                                    <td>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <h3>
                                                이벤트 제목이 노출되는 영역입니다.<br>
                                                이벤트 제목이 노출되는 영역입니다.
                                            </h3>
                                        </a>
                                    </td>
                                    <td class="date">2018-07-01</td>
                                    <td>
                                       <p class="prizewinner">
                                           <b>당첨</b>
                                           축하합니다!
                                       </p> 
                                    </td>
                                    <td>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-gray" role="button">응모내역</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="num">10</td>
                                    <td>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <h3>
                                                이벤트 제목이 노출되는 영역입니다.
                                            </h3>
                                        </a>
                                    </td>
                                    <td class="date">2018-07-01</td>
                                    <td>
                                       <p class="not-prizewinner">
                                           <b>비당첨</b>
                                           다음 이벤트에<br>도전해 보세요
                                       </p> 
                                    </td>
                                    <td>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-gray" role="button">응모내역</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="num">10</td>
                                    <td>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <h3>
                                                이벤트 제목이 노출되는 영역입니다.
                                            </h3>
                                        </a>
                                    </td>
                                    <td class="date">2018-07-01</td>
                                    <td>
                                       <p class="ongoing">이벤트 진행중</p> 
                                    </td>
                                    <td>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white" role="button">수정하기</a>
                                                <a href="#" class="btn btn-sm btn-white" role="button">삭제하기</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="num">10</td>
                                    <td>
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/entry_event/img_ongoing_event01.jpg" class="img-fluid" alt="">
                                            </figure>
                                            <h3>
                                                이벤트 제목이 노출되는 영역입니다.
                                            </h3>
                                        </a>
                                    </td>
                                    <td class="date">2018-07-01</td>
                                    <td>
                                       <p class="not-prizewinner">
                                           <b>비당첨</b>
                                           다음 이벤트에<br>도전해 보세요
                                       </p> 
                                    </td>
                                    <td>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-gray" role="button">응모내역</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-first icon-angle">
                                        <span class="sr-only">first</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icon-prev icon-angle">
                                        <span class="sr-only">Previous</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a class="page-link" href="#">1<span></span></a></li>
                            <li><a class="page-link" href="#">2<span></span></a></li>
                            <li><a class="page-link" href="#">3<span></span></a></li>
                            <li><a class="page-link" href="#">4<span></span></a></li>
                            <li><a class="page-link" href="#">5<span></span></a></li>
                            <li><a class="page-link" href="#">6<span></span></a></li>
                            <li><a class="page-link" href="#">7<span></span></a></li>
                            <li><a class="page-link" href="#">8<span></span></a></li>
                            <li><a class="page-link" href="#">9<span></span></a></li>
                            <li><a class="page-link" href="#">10<span></span></a></li>
                            <li class="next">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-next icon-angle">
                                        <span class="sr-only">Next</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icon-last icon-angle">
                                        <span class="sr-only">last</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="search-type2">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>선택</option>
                                    <option>선택2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="search-2" class="form-control" placeholder="검색어를 입력해주세요">
                                <label for="search-2" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>