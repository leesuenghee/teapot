<?php
  
include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/admin_header.php";

?>

    <link rel="stylesheet" href="../css/event.css" />
    <link rel="stylesheet" href="../css/coupon_add.css" />
<?php
include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/admin_aside.php";
?>

    <main class="p-5 col-md-10">
        <h2 class="suit_bold_xl">이벤트등록</h2>
        <div class="edit d-flex flex-row-reverse gap-4 align-items-center">
            <button class="btn_l" onclick="location.href='event_add.php'">등록</button>
            <form method="get" action="<?php echo $_SERVER["PHP_SELF"]?>">    
            <div class="searchs">
                <input type="search" class="search" name="search_keyword" id="search_keyword" value="<?php echo $search_keyword;?>">
                <button class="btn" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            </form>
        </div>
        <div class="contents d-flex flex-column gap-5">
                    <form method="post" action="event_ok.php" onsubmit="return save()" enctype="multipart/form-data" class="d-flex flex-column gap-4">
                        <p>
                            <label for="ev_thumb">썸네일</label>
                            <input type="file" id="ev_thumb" name="ev_thumb">
                        </p>
                        <p>
                            <label for="ev_title">이벤트명</label>
                            <input type="text" name="ev_title" />
                        </p>
                        <p>
                            <label for="ev_cont">이벤트 내용</label>
                            <input type="file" id="ev_cont" name="ev_cont">
                        </p>
                        <div class="d-flex gap-2">
                            <label for="">적용쿠폰</label>
                            <div class="select_wrap">
                                <select name="cc_passive" id="cc_passive" class="suit_rg_m type" value="1">
                                    <option>선택하기</option>
                                    <option value="1">쿠폰1</option>
                                    <option value="2">쿠폰2</option>
                                </select>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <label for="">상태</label>
                            <div class="select_wrap">
                                <select name="statu" id="statu" class="suit_rg_m type" value="1">
                                    <option>선택하기</option>
                                    <option value="1">사용</option>
                                    <option value="-1">마감</option>
                                </select>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
    </main>