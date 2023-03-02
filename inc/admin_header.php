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
    <link rel="icon" href="../img/pabcon.png">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/gh/sunn-us/SUIT/fonts/static/woff2/SUIT.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/admin.css" />
  </head>
  <body>
    <div id="dashboard">
      <div class="background">
        <div class="m-bg">
          <ul class="m-main">
            <li class="logo">
              <a href=""><img src="../img/logo.png" alt="" /></a>
            </li>
            <ul class="m-dash ">
              <li><a href="" class="suit_rg_m">Dashboard</a></li>
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
            </li>
          </ul>

          <div class="profile">
            <div>
            <img src="../img/charlie.png" alt="" />
              <p class="suit_rg_s">ID 관리자</p>
              <p class="suit_rg_s">PW 1234</p>
            </div>
          </div>
          <span class="logout"><a href="" class="suit_rg_s">logout<i class="fa-solid fa-arrow-right-from-bracket"></i></a></span>
        </div>
      </div>
      
    </div>