<?php
$query = mysqli_query($conn,"SELECT * FROM pengeluaran order by idPengeluaran DESC" );
$message = '';
if(isset($page->method)){
  echo $page->parameter;
}

if(isset($_POST['tambah_pengeluaran'])){
  if(($_POST['jumlahPengeluaran']) != ""){
    if(is_numeric($_POST['jumlahPengeluaran'])){
      $query = mysqli_query($conn,"INSERT INTO pengeluaran VALUES(0,'$_POST[tanggal]','$_POST[keterangan]',$_POST[jumlahPengeluaran])");
      header("Location: index.php");
    }
    else{
      $message = '
        <div class="alert alert-danger" role="alert">
          jumlah pengeluaran harus integer
        </div>
    ';
    }
  }
  else{
    $message = '
    <div class="alert alert-danger" role="alert">
      jumlah pengeluaran harus terisi
    </div>
    ';

  }
}

?>