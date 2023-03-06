<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A 학습문의</title>
</head>
<body>
    <div class="board_area">
        <h2>Q&A 학습문의</h2>
        <form action="qna_user_write_ok.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label for="userid">아이디:</label>
                <input type="text" id="userid" name="userid" required placeholder="User ID">
            </div>
            <div class="field">
                <label for="subject">제목:</label>
                <input type="text" id="subject" name="title" required placeholder="Title">
            </div>
            <div class="field">
                <label for="usermsg">내용:</label>
                <textarea name="content" id="usermsg" cols="30" rows="10"></textarea>
            </div>           
            <div class="field">
                <label for="userpw">비밀번호:</label>
                <input type="password" id="userpw" name="pw" required placeholder="Password">
            </div>
            <div class="field">
                <input type="checkbox" id="lock_post" name="lock_post">
                <label for="lock_post">잠금</label>
            </div>
            <button type="submit">전송</button>
        </form>
    </div>
</body>
</html>