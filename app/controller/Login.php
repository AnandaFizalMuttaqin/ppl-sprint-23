<?php
session_start();
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/sidemand/Admin";
$header_path = "http://localhost/sidemand/Admin";
// echo " ini login login";
if(isset($_SESSION['login'])){
  header("Location: $header_path/Public/Order/");

}
require "$absolute_path/app/view/header.php";

$alert = '';


if(isset($_POST['login'])){
  if($_POST['username'] == "admin" && $_POST['password'] == 123){
    // echo "yes";
    $_SESSION['login'] = "on";
    header("Location: $header_path/Public/Order/");
  }
  else{
    $alert = '<div class="alert alert-danger container text-center" role="alert">
    username atau password yang anda masukan salah!
  </div>';
    
  }
}
?>