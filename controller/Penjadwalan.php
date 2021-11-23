<?php

$query = mysqli_query($conn,"SELECT * FROM penjadwalan");
$message = "";
if(isset($page->method)){
  if($page->method == "TambahJadwal"){
    // echo "yes";
    if(isset($_POST['simpan'])){
      if($_POST['jadwal'] != ""){
        $idJadwal = $_POST['jadwal'].$_POST['jam'];
        $updateData = mysqli_query($conn,"INSERT INTO penjadwalan VALUES('$idJadwal','$_POST[jadwal]',$_POST[jam])");
        header("Location: ../");
      }
      else{
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <center>
        <strong>data tidak boleh kosong</strong> </center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
  }

  if($page->method == "UbahJadwal"){
    $getJadwal = mysqli_query($conn,"SELECT * FROM penjadwalan");
    // echo "yes";
    if(isset($_POST['simpan'])){
      if($_POST['jadwal'] != ""){
        // var_dump($_POST);
        $updateData = mysqli_query($conn,"UPDATE penjadwalan set jadwal = '$_POST[jadwal]', jam = $_POST[jam] WHERE idJadwal = '$_POST[idJadwal]'");
        // echo "UPDATE penjadwalan set jadwal = '$_POST[jadwal]', jam = $_POST[jam] WHERE idJadwal = '$_POST[idJadwal]'";
        header("Refresh:0");
      }
      else{
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <center>
        <strong>data tidak boleh kosong</strong> </center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
  }
}

?>