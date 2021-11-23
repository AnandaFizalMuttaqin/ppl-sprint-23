<?php require "../../app/core/MVC_model.php";?>
  <link rel="stylesheet" href="<?= $header_path ?>/Public/css/Modal.css">
</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in">
    <div class="login-form">
      <table class="table">
        <tr class="table table-primary">
          <td><h5>Pengeluaran</h5></td>
          <td><h5>Tanggal</h5></td>
          <td><h5>Keterangan</h5></td>
          <td><h5>Jumlah</h5></td>
          <td><a href="tambahPengeluaran.php" class="btn btn-primary">Tambah</a></td>
        </tr>
        <?php
          while($data = mysqli_fetch_assoc($query)){ ?>
            <tr>
              <td><h5><?= $data['idPengeluaran'] ?></h5></td>
              <td><h5><?= $data['tanggal'] ?> mei</h5></td>
              <td><h5><?= $data['keterangan'] ?></h5></td>
              <td><h5><?= $data['jumlah'] ?></h5></td>
              <td><a href="../EditPengeluaran/<?= $data['idPengeluaran'] ?>" class="btn btn-outline-primary">Edit</a></td>
          </tr>
          
      
        <?php
          }
        ?>
       </table> 
    </div>
    </div>
    
    
  <?php
require "$absolute_path/app/view/footer.php";
?>