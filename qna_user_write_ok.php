<?php 
    include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/db.php";

    $userid = $_POST['userid'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    // $hit = $_POST['qna_hit'];
    $date = date('Y-m-d');
    // $recommend = $_POST['qna_recom'];
    // $reply = $_POST['qna_reply'];
    // $status = $_POST['reply_st'];

    // print_r($userid);
    // print_r($title);
    // print_r($content);
    // print_r($date);
    // 값은 가져오고 있음

    $sql = "INSERT INTO lms_qna (userid, qna_title, qna_text, regdate)
    VALUES ('{$userid}','{$title}', '{$content}','{$date}')";
    // $sql = "INSERT INTO lms_qna (userid, qna_title, qna_text, qna_hit, regdate, qna_recom, qna_reply, reply_st)
    // VALUES ('{$userid}','{$title}', '{$content}','{$hit}','{$date}''{$recommend}''{$reply}''{$status}')";

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    if($mysqli->query($sql) === true){
        echo "<script>
            alert('Q&A 등록이 완료되었습니다.');
            location.href = 'qna_list.php';</script>";
    }else{
        echo "Error: " . $mysqli->error;
        // echo "<script>
        //     alert('Q&A 등록이 실패했습니다.');
        //     location.href = 'qna_list.php';</script>";
    }

    $mysqli->close();

?>
