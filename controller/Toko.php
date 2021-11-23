<?php

$query = mysqli_query($conn,"SELECT * FROM buah order by idBuah");

$message = "";

// if(isset($_POST['tambah'])){
if(isset($_POST['tambahKeKeranjang'])){
  //  echo ($_POST["idBuah/"."0"]);
  // echo $index;
  // var_dump($_POST['index']);
  // var_dump($_POST);
  // echo $index;
  for ($i=0; $i <$_POST["index"] ; $i++) { 
    // var_dump( $_POST["idBuah/"."1"]);
    // echo $_POST["nama/".$i]."<br>";
    // var_dump($_POST["product_input/".$index]);
    // echo $_POST['stokInput/'.$i];
    // continue;
    
    if( $_POST['stokInput/'.$i] == "" or is_numeric($_POST['stokInput/'.$i])){
      // echo "yes";
      // continue;
      if($_POST['stokInput/'.$i] > $_POST['sisaStok/'.$i] ){
        $message = 
        '<div class="container alert alert-danger" role="alert">
          <center>stok tidak cukup!</center>
        </div>';
        // return false;
        break;
      }
      else{
        if($_POST['stokInput/'.$i] != ""){
          array_push($_SESSION['keranjang'],[
            // var_dump($_POST);
            $_POST['idBuah/'.$i],
            $_POST['nama/'.$i],
            $_POST['harga/'.$i],
            $_POST['stokInput/'.$i]
          ]);
          $message = '
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>berhasil menambahkan ke keranjang belanja.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        // var_dump($_POST);
        
        // header("Refresh:);
      }
    
    
    }
    else{
      // echo "no";
      $message = 
        '<div class="container alert alert-danger" role="alert">
          <center>stok harus angka!</center>
        </div>';
        // return false;
        break;
    }
  }
  

}



?>
