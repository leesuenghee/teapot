<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEAPOT | DashBoard</title>
    <!-- <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"
    ></script> -->
    <script
      src="https://cdn.tiny.cloud/1/gqh4ln9h6t4kj4p3sdrfytsxhn047vp3h815f6ams4i2ou8j/tinymce/5/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({ selector: "#mytextarea" });
    </script>
    <!-- tiny library -->
    <link rel="icon" href="../img/pabcon.png" />
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
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/admin.css" />
    <!-- <link rel="stylesheet" href="../css/dashboard.css" /> -->
    <link rel="stylesheet" href="../css/qna_check.css" />
  </head>
  <body>
    <div id="dashboard">
      <div class="background d-flex flex-column row">
        <div class="qna_check">
          <h2 class="suit_bold_xl">학습 Q&A</h2>
          <div class="user_question_info">
            <div class="d-flex justify-content-between">
              <p class="classname suit_rg_m">입문회화</p>
              <p class="reply_status suit_rg_m">답변완료</p>
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
          <div class="admin_aswer_form">
            <div class="reply_admin_section">
              <div class="admin_reply_title d-flex gap-5 align-items-center">
                <img src="" alt="" class="adminphoto" />
                <div class="admin_info">
                  <p class="adminid suit_rg_l">관리자</p>
                  <p class="date suit_rg_m">2023.03.16</p>
                </div>
              </div>
              <div class="reply suit_rg_m">
                <p>
                    안녕하세요 happyna97님게 답변을 드릴 Esther입니다*^^*<br>
                    <br>
                    전치사에 대한 질문을 해주셨군요.<br>
                    모든 계절 앞에는 in이 쓰입니다.<br>
                    afternoon 앞에는 at afternoon 혹은 in the afternoon(오늘 오후)<br>
                    전치사 두개 모드 사용하실 수 있습니다.<br>
                    이 점 탐고 부탁드립니다.<br>
                    <br>
                    오늘도 티팟타임과 함께 좋은 하루 되세요^_^
                </p>
              </div>
              <div class="qna_btn d-flex gap-4 justify-content-end">
                <button type="submit" class="list btn_s" onclick="location.href='qna_list.html'">목록</button>
                <button type="submit" class="upload btn_s" onclick="location.href='qna_reply.html'">수정</button>
                <button type="button" class="cancel btn_s">삭제</button>
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
