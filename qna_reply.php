<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEAPOT | DashBoard</title>
    <script
      src="https://cdn.tiny.cloud/1/gqh4ln9h6t4kj4p3sdrfytsxhn047vp3h815f6ams4i2ou8j/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({ selector: "#mytextarea" });
    </script>
    <!-- tiny library -->
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
    <link rel="stylesheet" href="../css/qna_reply.css" />
  </head>
  <body>
    <div id="dashboard">
      <div class="background d-flex flex-column row">
        <div class="qna_reply">
          <h2 class="suit_bold_xl">학습 Q&A</h2>
          <div class="user_question_info">
            <div class="d-flex justify-content-between">
              <p class="classname suit_rg_m">입문회화</p>
              <p class="reply_status suit_rg_m">답변대기</p>
            </div>
            <p class="question_title suit_rg_l">전치사 관련 질문입니다.</p>
            <div class="reply_info_border">
              <div
                class="reply_info suit_rg_m d-flex align-items-center justify-content-between"
              >
                <div class="d-flex align-items-center gap-5">
                  <img src="" alt="" class="userphoto" />
                  <p class="userid">happyna97</p>
                </div>
                <p class="date">2023.03.16</p>
              </div>
            </div>
          </div>
          <div class="user_question">
            <p class="suit_rg_m">
              "우리는 여름에 초밥 안 먹어." 라고 말할 때 왜 in the summer이고,<br>
              "우리는 밤에 커피 안 마셔." 라고 할 때는 at afternoon인가요?
            </p>
          </div>
          <div class="admin_aswer_form">
            <div class="reply_admin_section">
              <div class="admin_reply_title d-flex gap-5 align-items-center">
                <img src="" alt="" class="adminphoto" />
                <div class="admin_info">
                  <p class="adminid suit_rg_l">관리자</p>
                  <p class="date suit_rg_m">2023.03.16</p>
                </div>
              </div>
              <div class="tiny_library">
                <form method="post" class="tiny">
                  <textarea id="mytextarea">Hello, World!</textarea>
                </form>
              </div>
              <div class="qna_btn d-flex gap-4 justify-content-end">
                <button type="submit" class="upload btn_s" onclick="location.href='qna_check.php'">등록</button>
                <button type="button" class="cancel btn_s" onclick="location.href='qna_list.php'">취소</button>
              </div>
            </div>
          </div>
        </div>
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