</head>
<body>
  <div class="background d-flex flex-column">
    <div class="logo">
      <a href=""><img src="../img/logo.png" alt="" /></a>
    </div>
    <div class="d-flex">
      <div class="m-bg">
        <ul class="m-dash d-flex flex-column">
          <li>
            <a href="" class="suit_rg_m">Dashboard</a>
          </li>
          <li>
            <a href="" class="suit_rg_m">회원관리<i class="fa-solid fa-user"></i></a>
          </li>
          <li>
            <a href="" class="suit_rg_m">클래스 관리<i class="fa-solid fa-book"></i></a>
          </li>
          <li>
            <a href="" class="suit_rg_m">이벤트 관리<i class="fa-solid fa-cake-candles"></i></a>
          </li>
          <li>
            <a href="" class="suit_rg_m">쿠폰 관리<ion-icon name="ticket-outline"></ion-icon></a>
          </li>
          <li>
            <a href="" class="suit_rg_m">Q&A<i class="fa-regular fa-circle-question"></i></a>
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
        <?php
          if($_SESSION['UID']){
        ?>
        igjhg
          <button type="button" class="suit_rg_s" onclick="location.replace('../member/logout_action.php');"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
        <?php
          }else{
        ?>
        <?php
        }
        ?>
        </span>
      </div>