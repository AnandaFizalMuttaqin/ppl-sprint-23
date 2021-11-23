<?php

$message = "";
$getJadwal = mysqli_query($conn,"SELECT * FROM penjadwalan");

if(isset($_POST['hapus_keranjang'])){
  if(count($_SESSION['keranjang']) == 1){
    $_SESSION['keranjang'] = [];
  }
  else{
    $index =  $_POST['hapus_keranjang'];
    $keranjang = $_SESSION['keranjang'];
    $deleted =  $_SESSION['keranjang'][$index];
    unset($keranjang[$index]);
    $_SESSION['keranjang'] = $keranjang;
  }
  
}



if(isset($_POST['beli'])){
  
  $validate = true;
  
  foreach ($_POST as $value) {
    if($value == ""){

      $message = '
        <div class="alert alert-danger" role="alert">
          Harap mengisi semua data pada form
        </div>
      ';
      $validate = false;
      break;
    }
  }
  if($validate == true){
    if(strlen($_POST['noHp']) == 12 or strlen($_POST['noHp']) == 11){
      $validate = true;
    }
    else{
      $message = '
        <div class="alert alert-danger" role="alert">
          Panjang Nomor Handphone tidak sesuai
        </div>
      ';
      $validate = false;
    }
    
  }

  if($validate == true){
    // var_dump($_POST);
    $message = '';
    $date_now = date("d-m-Y");
    $update_tabel_pesanan = mysqli_query($conn,"INSERT INTO pemesanan VALUES(0,'$_POST[namaPembeli]', '$_POST[noHp]','$_POST[alamat]','$_POST[waktu_pengiriman]','dalam request','$date_now',$_POST[total_harga] )");
    // echo "INSERT INTO pesanan VALUES(0,'$_POST[namaPembeli]', '$_POST[noHp]','$_POST[alamat]','$_POST[waktu_pengiriman]','dalam request','$date_now',$_POST[total_harga] ";

    $id_pesanan_query = mysqli_query($conn,"SELECT idPesanan FROM pemesanan ORDER BY idPesanan DESC LIMIT 1");
    $id_pesanan = mysqli_fetch_all($id_pesanan_query);
    $id_pesanan = $id_pesanan[0][0];
    // echo $id_pesanan;
    foreach ($_SESSION['keranjang'] as $value) {
      $tota_harga = $value[2]*$value[3];
      $update_tabel_detail_pesanan = mysqli_query($conn,"INSERT INTO detailPesanan VALUES(0,$value[0],$value[3],$tota_harga,$id_pesanan)");
      // echo "INSERT INTO detailPesanan VALUES(0,$value[0],$value[3],$tota_harga,$id_pesanan)" . "<br>";
      $update_jumlah_stok = mysqli_query($conn,"UPDATE barang set stok = stok-$value[2] WHERE idProduct = $value[0]");
    }
    


    // $_SESSION['pop_display'] = 'flex';
    $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <center><strong>Pesanan Berhasil Ditambahkan</strong></center> Nomor Pemesanan Anda '.$id_pesanan.' silahkan melihat status pemesanan anda di halaman status transaksi
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
    $_SESSION['keranjang'] = [];
    // header("Location: ../Transaksi/");

  }
  // echo "yes";
}
else{
  // echo "no";
}


?>