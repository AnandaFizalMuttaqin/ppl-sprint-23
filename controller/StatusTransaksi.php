<?php
if(isset($_POST['status_transaksi'])){
  $query = mysqli_query($conn,"SELECT statusPesanan FROM pemesanan WHERE idPesanan = '$_POST[status_transaksi]'");
  $status_pesanan = mysqli_fetch_array($query);
}

?>