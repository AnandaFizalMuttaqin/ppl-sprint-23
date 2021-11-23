<?php require "../../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>

    <div class="body-container" data-aos="zoom-in">
      <center><h1>Detail Pesanan</h1></center>
      <table class="table">
        <tr>
          <td>Nama Buah</td>
          <td>Jumlah</td>
          <td>total harga</td>
          <!-- <td>id pemesanan</td> -->
        </tr>
        <?php
        while($result = mysqli_fetch_assoc($query)){ ?>
        <tr>
          <td><?php
            $getBuah = mysqli_query($conn,"SELECT namaBuah From buah WHERE idBuah = $result[idBuah]");
            // var_dump(mysqli_fetch_array($getBuah));
            // echo "yes";
            $nama_buah = mysqli_fetch_array($getBuah);
            echo $nama_buah['namaBuah'];
          ?></td>
          <td><?= $result['jumlah'] ?></td>
          <td><?= $result['totalHarga'] ?></td>
          <!-- <td>id pemesanan</td> -->
        </tr>
        <?php
        }
        ?>
        
      </table>
    </div>
    
    

  <?php
require "$absolute_path/app/view/footer.php";
?>
