<?php
$query = mysqli_query($conn,"SELECT * FROM modal order by idModal DESC" );
$message = '';
if(isset($page->method)){
  echo $page->parameter;
}

if(isset($_POST['tambah_modal'])){
  if(($_POST['jumlahModal']) != ""){
    if(is_numeric($_POST['jumlahModal'])){
      $query = mysqli_query($conn,"INSERT INTO modal VALUES(0,'$_POST[tanggal]','$_POST[keterangan]',$_POST[jumlahModal])");
      header("Location: index.php");
    }
    else{
      $message = '
        <div class="alert alert-danger" role="alert">
          jumlah modal harus integer
        </div>
    ';
    }
  }
  else{
    $message = '
    <div class="alert alert-danger" role="alert">
      jumlah modal harus terisi
    </div>
    ';

  }
}

?>