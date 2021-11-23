<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>

    <div class="body-container" data-aos="zoom-in">
    <div class="order-form">
      <?= $message ?>
      <table class="table">
        <tr class="table table-primary">
          <td><h6>id pesanan</h6></td>
          <td><h6>nama pemesan</h6></td>
          <td><h6>no hp</h6></td>
          <td><h6>alamat</h6></td>
          <td><h6>jadwal kirim</h6></td>
          <td><h6>status pesanan</h6></td>
          <td><h6>waktu pesan</h6></td>
          <td></td>
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
            <input type="hidden" name="no_hp_tolak" value="<?= $data['noHp'] ?>">
            <?php
            if($data['statusPesanan'] == "dalam request"){ ?>
              <td>
                <button type="submit" name="terima" class="btn btn-outline-success">terima</button>
                <button type="submit" name="tolak" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Tolak
                </button>

              </td>
            <?php
            }
            else if($data['statusPesanan'] == "disetujui" ){ ?>

              <td><h7>disetuijui</h7></td>
            <?php
            }
            ?>
            
            
            <td><h7><?= $data['waktuPesan'] ?></h7></td>
            <td><a href="DetailPesanan/<?= $data['idPesanan'] ?>" class="btn btn-outline-primary">detail pesanan</a></td>
          </tr>
          </form>
        <?php
        $index+=1;
        }
        ?>
        
      </table>
    </div>
    </div>
    
    

  <?php
require "$absolute_path/app/view/footer.php";
?>
