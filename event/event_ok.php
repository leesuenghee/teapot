<?php session_start();
include $_SERVER['DOCUMENT_ROOT']."/teapot/inc/db.php";

$org_name = $_FILES['ev_thumb']['name'];
$save_dir = $_SERVER['DOCUMENT_ROOT']."/img/event"; 
$filename = $_FILES['thumbnail']['name'];
?>