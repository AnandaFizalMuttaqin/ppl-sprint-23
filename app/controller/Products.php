<?php

$query = mysqli_query($conn,"SELECT * FROM buah order by idBuah");

$message = "";



if(isset($_POST['editBuah'])){
  $date_update = date("d-m-Y");
  $editBuah = mysqli_query($conn,"UPDATE buah set namaBuah = '$_POST[namaEdit]', harga = $_POST[hargaEdit], updated_at = '$date_update', jumlahStok = $_POST[stokEdit] WHERE idBuah = $_POST[idBuah] ");
  header("Refresh:0");
}
if(isset($_POST['kadaluarsa'])){
  $date_update = date("d-m-Y");
  $editBuah = mysqli_query($conn,"UPDATE buah set namaBuah = '$_POST[namaEdit]', harga = $_POST[hargaEdit], updated_at = '$date_update', kondisiBuah = 0 WHERE idBuah = $_POST[idBuah] ");
  header("Refresh:0");
}
if(isset($_POST['ubahBaru'])){
  $date_update = date("d-m-Y");
  $editBuah = mysqli_query($conn,"UPDATE buah set namaBuah = '$_POST[namaEdit]', harga = $_POST[hargaEdit], updated_at = '$date_update', kondisiBuah = 1 WHERE idBuah = $_POST[idBuah] ");
  header("Refresh:0");
}

if(isset($page->method)){
  $message = "";
  if(isset($_POST['tambah'])){
    var_dump($_POST);
    if($_POST['nama_buah'] != "" && $_POST['harga'] != "" && $_POST['deskripsi'] != "" && $_POST['jumlah_stok'] != "" && $_FILES['img_upload']['name'] != "" ){
      
      if(is_numeric($_POST['harga'])){
        $_POST['harga'] = (int)$_POST['harga'];
        uploadImg();
        
      }
      else{
        $message = '
        <div class="alert alert-danger" role="alert">
          Harga Harus Berupa angka !
        </div>
      ';
      }

      

    }
    else{
      $message = '
        <div class="alert alert-danger" role="alert">
          Semua Form Wajib Terisi !
        </div>
      ';
    }
    
  }
}



function uploadImg(){
  $conn = mysqli_connect("localhost","root","","sidemand");
  $imgName = $_FILES['img_upload']['name'];
  $error = $_FILES['img_upload']['error'];
  $size = $_FILES['img_upload']['size'];
  $locationUp = $_FILES['img_upload']['tmp_name'];
  $formatFile = $_FILES['img_upload']['type'];
  
  $format = "";
  $formatFix = "";
  for ($i = strlen($imgName)-1; $i>=0; $i--){
    $format .= $imgName[$i];
    if ($imgName[$i] == ".") {
      break;
    }
  }
  for ($i=strlen($format)-1;$i>=0;$i--){
    $formatFix .= $format[$i];
  }
  
  $get_last_id = mysqli_query($conn, "SELECT idBuah from buah ORDER BY idBuah DESC limit 1");
  $id = mysqli_fetch_array($get_last_id)['idBuah']+1;
  // echo $id;
  // die();
  $nameFix = ucwords($id.$formatFix);
  
  if ($error == 0 ){
    if ($size < 200000000000){
      // echo $formatFile;
      if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
        // echo $formatFile;
        $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/sidemand";
        
        // echo $absolute_path.'/Public/images/Products/'.$nameFix;
        move_uploaded_file($locationUp,$absolute_path.'/Public/images/Products/'.$nameFix);


        $created_date = date("d-m-Y");
        $query = mysqli_query($conn,"INSERT INTO buah VALUES(0,'$_POST[nama_buah]',$_POST[harga],'$_POST[deskripsi]','$nameFix','$created_date','',1,'$_POST[satuan_barang]',$_POST[jumlah_stok] )");
        header("Location: ../");
        // header("Refresh:0");
        

      }
      else{
        echo "<center><h1> format file harus jpg/png </h1></center>";
      }
    }
    else{
      echo "ukuran file terlalu besar";
    }
  }
  else{
    echo "file kegedean";
  }
}


?>
