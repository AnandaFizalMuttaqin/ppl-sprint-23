<?php
// echo "yes";
session_start();
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/sidemand/Admin";
$header_path = "http://localhost/sidemand/Admin";

if(!isset($_SESSION['login'])){
  // echo "$header_path/Public/Login/";
  header("Location: $header_path/Public/Login/");
}

if(isset($_POST['logout'])){
  // $_SESSION['login'] = false;
  session_destroy();
}


require "$absolute_path/app/controller/connector_db.php";
require "$absolute_path/app/core/app.php";
require "$absolute_path/app/view/header.php";
?>