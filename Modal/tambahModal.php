<?php require "../../app/core/MVC_model.php";?>
  <link rel="stylesheet" href="<?= $header_path ?>/Public/css/Modal.css">
</head>
<body>
  <?php require "$absolute_path/app/view/sidebar.php"; ?>
  <div class="body-container" data-aos="zoom-in">
  <form action="" method="POST" style="margin:auto; width: 400px;">
  <br><br>
    <h1 class="text-center">Tambah Data Modal</h1>
    <div class="tambah-modal">
      <?= $message ?>
      <input type="hidden" name="tanggal" value="<?= strval(date("d/m/Y")); ?>">
      <input type="text" class="form-control" placeholder="jumlah modal" name="jumlahModal"><br>
      <input type="text" class="form-control" placeholder="keterangan" name="keterangan"><br>
      
      <button class="btn btn-success container" name="tambah_modal" type="submit">tambah data</button>

    </div>
  </form>
  </div>
  

<?php
require "$absolute_path/app/view/footer.php";
?>