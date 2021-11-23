<?php
$query = mysqli_query($conn,"SELECT * FROM pemesanan order by idPesanan DESC" );

$message = '';
if(isset($_POST['terima'])){
  $query = mysqli_query($conn,"UPDATE pemesanan set statusPesanan = 'disetujui' WHERE idPesanan = $_POST[idPesanan]");
  header("Refresh:0");
}
if(isset($_POST['tolak'])){
  // echo $_POST['no_hp_tolak'];
  $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <center>
  <strong>Harap Menghubungi nomor '. $_POST['no_hp_tolak'].'</strong> </center>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if(isset($page->method)){
  if(isset($page->parameter)){
    // echo $page->parameter;
    $query = mysqli_query($conn,"SELECT * FROM detailPesanan where idPemesanan = $page->parameter" );
  }
  else{
    header("Location: $header_path");
    
  }
}

?>