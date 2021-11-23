<?php
$query = mysqli_query($conn,"SELECT * from modal where idModal = $page->method");
$data = mysqli_fetch_array($query);


if(isset($_POST['edit_modal'])){
  if(is_numeric($_POST['jumlahModal'])){
    $query = mysqli_query($conn,"UPDATE modal set jumlah = $_POST[jumlahModal], keterangan = '$_POST[keterangan]' where idModal = $_POST[idModal]");
    header("Location: ../Modal/");
  }
  else{
    $message = '
      <div class="alert alert-danger" role="alert">
        jumlah modal harus integer
      </div>
  ';
  }
  
}
?>