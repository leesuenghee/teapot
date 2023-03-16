<?php
  include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/db.php";


  $userid =  $_POST['id'];
  $username = $_POST['name'];
  $userfile = $_FILES['file'];


  
// if($_POST['file']['type'] != 'image/png' and $_POST['file']['type'] != 'image/gif' and $_POST['file']['type'] != 'image/jpeg'){
//     $return_data = array("result"=>"image");
//     //echo json_encode($return_data);  
//     //exit;
// }

$save_dir = $_SERVER['DOCUMENT_ROOT']."/teapot/uploads/"; 
$filename = $_FILES['file']['name'];
$ext = pathinfo($filename,PATHINFO_EXTENSION);
$newfilename = date("YmdHis").substr(rand(),0,6);
$savefile =  $newfilename.'.'.$ext; 


$profileImgURL = '/teapot/uploads/'.$savefile;

// $return_data = array("result"=>$profileImgURL, "ID"=> $userid, "NAME"=>$username);
// echo json_encode($return_data);

  if(move_uploaded_file($_FILES['file']['tmp_name'], $save_dir.$savefile)){
    $sql = "UPDATE lms_user set userid='".$userid."', username='".$username."',user_file='".$profileImgURL."' where uidx=1";
    $fs=$mysqli->query($sql) or die($mysqli->error);     

      $return_data = array("result"=>"success");
      echo json_encode($return_data);
      exit;
  } else{
      $return_data = array("result"=>"error");
      echo json_encode($return_data);
      exit;
  }

?>