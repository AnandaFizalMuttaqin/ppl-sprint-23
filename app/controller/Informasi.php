<?php
$query = mysqli_query($conn,"SELECT * FROM deskripsi_web where idDeskripsi = 1");
$data = mysqli_fetch_array($query);
$message = "";
if(isset($_POST['update'])){


  if($_POST['deskripsi'] != "" && $_POST['judul'] != ""){
    $update = mysqli_query($conn,"UPDATE deskripsi_web set namaDeskripsi = '$_POST[judul]', isiDeskripsi = '$_POST[deskripsi]' WHERE idDeskripsi = 1");
    header("Refresh:0");
  }
  else{
    $message = '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <center><strong>Semua Form Harus Terisi</strong></center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
  }
  
}

?>