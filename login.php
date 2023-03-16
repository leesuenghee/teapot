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
    <link rel="icon" href="./img/pabcon.png" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/reset.css" />
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
    <link rel="stylesheet" href="./css/login.css" />
    <main class="login_wrapper">
      <div class="login_content">
        <div class="login_up text-center d-flex justify-content-center">
          <h1 class="login_logo">LOGO</h1>
        </div>
        <div class="login_down d-flex">
          <div class="login_left d-flex justify-content-center">
            <form
              action="login_ok.php"
              method="post"
              class="form_login d-flex flex-column justify-content-center align-items-center"
            >
              <h3 class="login_tt h3 suit_bold_xl">LOGIN</h3>
              <div class="form_login my-3">
                <input
                  type="text"
                  name="userid"
                  id="userid"
                  placeholder="ID"
                />
              </div>
              <div class="form_login my-3">
                <input
                  type="password"
                  name="userpw"
                  id="userpw"
                  placeholder="PASSWORD"
                />
              </div>
              <ul class="find_wrap m-3">
                <li>
                  <a href="./member/findid.html" class="find_text mx-3">ID 찾기</a>
                </li>
                <li>
                  <a href="./member/findpw.html" class="find_text mx-3"
                    >Password 찾기</a
                  >
                </li>
                <li>
                  <a href="./member/join.php" class="find_text mx-3">회원가입</a>
                </li>
              </ul>
              <button type="submit" class="btn_login suit_rg_s">LOG IN</button>
            </form>
          </div>
          <aside
            class="login_right d-flex justify-content-center align-items-center"
          >
            <!-- <img src="" alt="로그인" id="introImg" /> -->
          </aside>
        </div>
      </div>
    </main>
<script src="js/login.js"></script>

<?php
  include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/admin_footer.php";
?>