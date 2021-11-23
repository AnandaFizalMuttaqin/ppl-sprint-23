<?php
$query = mysqli_query($conn,"SELECT * from pengeluaran where idPengeluaran = $page->method");
$data = mysqli_fetch_array($query);


if(isset($_POST['edit_pengeluaran'])){
  if(is_numeric($_POST['jumlahPengeluaran'])){
    $query = mysqli_query($conn,"UPDATE pengeluaran set jumlah = $_POST[jumlahPengeluaran], keterangan = '$_POST[keterangan]' where idPengeluaran = $_POST[idPengeluaran]");
    header("Location: ../Pengeluaran/");
  }
  else{
    $message = '
      <div class="alert alert-danger" role="alert">
        jumlah pengeluaran harus integer
      </div>
  ';
  }
  
}
?>