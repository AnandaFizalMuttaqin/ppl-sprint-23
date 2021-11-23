<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in">
    <div class="order-form">
    <table class="table">
        <tr class="table table-primary">
          <td><h6>id pesanan</h6></td>
          <td><h6>nama pemesan</h6></td>
          <td><h6>no hp</h6></td>
          <td><h6>alamat</h6></td>
          <td><h6>jadwal kirim</h6></td>
          <td><h6>waktu pesan</h6></td>
          <td>Total Harga</td>
        </tr>

        <?php 

        $index = 0;
        while($data = mysqli_fetch_assoc($query)){ ?>

          <form action="" method="POST">
          <tr>
            <input type="hidden" name="idPesanan" value="<?= $data['idPesanan'] ?>">
            <td><h7><?= $data['idPesanan'] ?></h7></td>
            <td><h7><?= $data['nama'] ?></h7></td>
            <td><h7><?= $data['noHp'] ?></h7></td>
            <td><h7><?= $data['alamat'] ?></h7></td>
            <td><h7><?= $data['jadwal'] ?></h7></td>
            <td><h6><?= $data['waktuPesan'] ?></h6></td>
            <td><h6><?= $data['totalHarga'] ?></h6></td>

          </tr>
        <?php
        
        }?>
      </table>
    </div>
    </div>
    
    
  <?php
require "$absolute_path/app/view/footer.php";
?>