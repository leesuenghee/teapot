<?php 
    include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/db.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEAPOT | DashBoard</title>
    <link rel="icon" href="../img/pabcon.png" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/gh/sunn-us/SUIT/fonts/static/woff2/SUIT.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/qna_list.css" />
  </head>
  <body>
    <?php
      $qidx = $_GET['qidx'];
      $sql = "SELECT * FROM lms_qna WHERE qidx='{$qidx}'";
      $result = $mysqli->query($sql);
      $row = $result -> fetch_assoc();

      // Pagenation
      if(isset($_GET['page'])){
          $page = $_GET['page'];
      } else {
          $page = 1;
      }
      $pagesql = "SELECT COUNT(*) as qidx from lms_qna";
      $page_result = $mysqli->query($pagesql);
      $page_row = $page_result->fetch_assoc();
      //print_r($page_row['qidx']);
      $row_num = $page_row['qidx']; //전체 게시물 수

      $list = 5; //페이지당 출력할 게시물 수
      $block_ct = 5;
      $block_num = ceil($page/$block_ct);//page9,  9/5 1.2 2
      $block_start = (($block_num -1)*$block_ct) + 1;//page6 start 6
      $block_end = $block_start + $block_ct -1; //start 1, end 5

      $total_page = ceil($row_num/$list); //총42, 42/5
      if($block_end > $total_page) $block_end = $total_page;
      $total_block = ceil($total_page/$block_ct);//총32, 2

      $start_num = ($page -1) * $list;
      // echo ($start_num);
    ?>
    
    <div id="dashboard">
      <div class="background d-flex flex-column row">
        <div class="col-md-2">
          <div class="logo">
            <a href=""><img src="../img/logo.png" alt="teapot" /></a>
          </div>
          <div class="m-bg">
            <ul class="m-dash d-flex flex-column">
              <li>
                <a href="" class="suit_rg_m">Dashboard</a>
              </li>
              <li>
                <a href="" class="suit_rg_m"
                  >회원관리<i class="fa-solid fa-user"></i
                ></a>
              </li>
              <li>
                <a href="" class="suit_rg_m"
                  >클래스 관리<i class="fa-solid fa-book"></i
                ></a>
              </li>
              <li>
                <a href="" class="suit_rg_m"
                  >이벤트 관리<i class="fa-solid fa-cake-candles"></i
                ></a>
              </li>
              <li>
                <a href="" class="suit_rg_m"
                  >쿠폰 관리<ion-icon name="ticket-outline"></ion-icon
                ></a>
              </li>
              <li>
                <a href="qna_list.html" class="suit_rg_m"
                  >Q&A<i class="fa-regular fa-circle-question"></i
                ></a>
              </li>
            </ul>
            <div class="profile">
              <div>
                <img src="../img/charlie.png" alt="" />
                <p class="suit_rg_s">ID 관리자</p>
                <p class="suit_rg_s">PW 1234</p>
              </div>
            </div>
            <span class="logout">
              <a href="" class="suit_rg_s"
                >logout<i class="fa-solid fa-arrow-right-from-bracket"></i
              ></a>
            </span>
          </div>
        </div>

        <main class="p-5 col-md-10">
          <h2 class="suit_bold_xl">학습 Q&A</h2>
          <table class="table text-center">
            <thead class="suit_bold_m">
              <tr>
                <th scope="col">Q&A 내용</th>
                <th scope="col">아이디</th>
                <th scope="col">날짜</th>
                <th scope="col">상태</th>
                <th scope="col">바로가기</th>
              </tr>
            </thead>
            <tbody class="table-group-divider suit_rg_m">
              <?php
                $sql = "SELECT * FROM lms_qna ORDER BY reply_st asc limit $start_num,$list";
                $result = $mysqli->query($sql) or die("query error => ".$mysqli->error);
                while($rs = $result->fetch_object()){
                    $rsc[]=$rs;
                }
                if(isset($rsc)){ 
                  foreach($rsc as $r){
              ?>
              <tr>
                <td><?php echo $r->qna_title;?></td>
                <td><?php echo $r->userid;?></td>
                <td><?php echo $r->regdate;?></td>
                <td>
                  <?php if($r->reply_st == 0){ ?>
                    <div class="reply_status answer_wait">답변대기</div>
                  <?php }else{ ?>
                    <div class="reply_status answer_complete">답변완료</div>
                  <?php } ?>
                </td>
                <td>
                  <button
                    type="button"
                    class="shortcuts btn_m"
                    onclick="location.href='qna_reply.php'"
                  >
                    바로가기
                  </button>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>

          <div class="pagination">
            <ul class="class_pg d-flex justify-content-center m54 align-items-center">
              <?php
                if($page>1){
                  if($block_num > 1){
                      $prev = ($block_num-2)*$list + 1;
                      echo "<li>
                        <a class='suit_bold_m' href=''>
                          <i class='fa-solid fa-angles-left'></i>
                        </a>
                      </li>";
                  }
                }


                for($i=$block_start;$i<=$block_end;$i++){
                  if($page == $i){
                      echo "<li><a href='?page=$i' class='suit_bold_m PG_num active click'>$i</a></li>";
                  }else{
                      echo "<li><a href='?page=$i' class='suit_bold_m PG_num'>$i</a></li>";
                  }
                }
                

                if($page<$total_page){
                  if($total_block > $block_num){
                      $next = $block_num*$list + 1;
                      echo "<li>
                        <a class='suit_bold_m' href=''>
                          <i class='fa-solid fa-angles-right'></i>
                        </a>
                      </li>";
                  }
                }
              ?>
              <!-- <li>
                <a class="suit_bold_m" href=""
                  ><i class="fa-solid fa-angles-left"></i></a>
              </li>
              <li>
                <a class="suit_bold_m PG_num click" href="">1</a>
              </li>
              <li>
                <a class="suit_bold_m PG_num" href="">2</a>
              </li>
              <li>
                <a class="suit_bold_m PG_num" href="">3</a>
              </li>
              <li>
                <a class="suit_bold_m PG_num" href="">4</a>
              </li>
              <li>
                <a class="suit_bold_m PG_num" href="">5</a>
              </li>
              <li>
                <a class="suit_bold_m" href=""
                  ><i class="fa-solid fa-angles-right"></i
                ></a>
              </li> -->
            </ul>
          </div>
        </main>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="../js/script.js"></script>
  </body>
</html>


<!-- /* PAGENATION */
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $pagesql = "SELECT COUNT(*) as qidx from lms_qna";
    $page_result = $mysqli->query($pagesql);
    $page_row = $page_result->fetch_assoc();
    $row_num = $page_row['qidx']; //전체 게시물 수

    $list = 5; //페이지당 출력할 게시물 수
    $block_ct = 5;
    $block_num = ceil($page/$block_ct);//page9,  9/5 1.2 2
    $block_start = (($block_num -1)*$block_ct) + 1;//page6 start 6
    $block_end = $block_start + $block_ct -1; //start 1, end 5

    $total_page = ceil($row_num/$list); //총42, 42/5
    if($block_end > $total_page) $block_end = $total_page;
    $total_block = ceil($total_page/$block_ct);//총32, 2

    $start_num = ($page -1) * $list; -->