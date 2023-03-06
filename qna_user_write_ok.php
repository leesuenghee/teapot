<?php 
    include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/db.php";

$userid = $_POST['userid'];
$title = $_POST['title'];
$content = $_POST['content'];
$userpw = password_hash($_POST['pw'],PASSWORD_DEFAULT);
$date = date('Y-m-d');
if(isset($_POST['lock_post'])){
    $lock_post = 1;
}else{
    $lock_post = 0;
}

$sql = "INSERT INTO lms_qna (id,title,content,,pw,date,lock_post) 
VALUES ('{$userid}','{$title}', '{$content}','{$userpw}','{$date}','{$lock_post}')";

if($conn->query($sql) === true){
    echo "<script>
        alert('글쓰기가 완료되었습니다.');
        location.href = '../../index.php';</script>";
}else{
    echo "<script>
        alert('글쓰기 실패');
        location.href = '../../index.php';</script>";
}

$conn->close();

?>





------------------------
<body>
    <div class="board_area">
        <h2>Q&A 학습문의</h2>
        <form action="qna_user_write_ok.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label for="username">아이디:</label>
                <input type="text" id="username" name="name" required placeholder=" User ID">
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
                <label for="file">첨부파일:</label>
                <input type="file" name="b_file" id="file" >
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