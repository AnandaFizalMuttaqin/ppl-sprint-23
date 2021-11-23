<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/views/sidebar.php"; ?>
    <div class="body-container" style="height: auto;">
      <center><h1>Status Transaksi</h1></center>

      <?php
      if(isset($status_pesanan)){ ?>
      <center>
        <div class="alert alert-success" style="z-index:0" role="alert">
          status pesanan : <?= $status_pesanan[0] ?>
        </div>
      </center>

      <?php
      }
      ?>

      <form action="" method="POST">
      <center><input style="width:70%" type="text" name="status_transaksi" placeholder="masukan id pemesanan anda" class="form-control"></center>
      </form>
      
    </div>
<?php require "$absolute_path/app/views/template/footer.php"; ?>