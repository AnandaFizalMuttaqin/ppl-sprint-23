<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>

    <div class="body-container" data-aos="zoom-in">
      <a class="btn btn-primary" href="TambahJadwal/">Tambah Jadwal</a>
      <a class="btn btn-warning" href="UbahJadwal/">Ubah Jadwal</a>

      <table class="table">
        <tr class="table table-primary">
          <td>Jadwal Pengiriman</td>
          <td>Jam</td>
        </tr>
        <?php
        while($result = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td><?= $result['jadwal'] ?></td>
            <td><?= $result['jam'] ?></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
    
    

  <?php
require "$absolute_path/app/view/footer.php";
?>
