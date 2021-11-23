<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/views/sidebar.php"; ?>
    <div class="body-container" style="height: auto;">
        <?= $message ?>
      <br>      
      
        
      
      
      
      <form class="product" action="" method="POST" style="display: flex;justify-content:space-evenly;flex-wrap:wrap; width:97%">

        <button type="submit" name="tambahKeKeranjang" style="z-index:30;width:100px;height:100px;position: fixed;bottom:0;right:10px" class="btn btn-primary"><img style="width:50px" src="<?= BASE_URL ?>/Public/images/keranjang.png" alt=""></button>
        <br>
        
        <?php
          $index = 0;
          while($card = mysqli_fetch_assoc($query)){ ?>
            <?php  if($card['kondisiBuah'] == 1){ ?>
              <!-- <form action="" method="POST"> -->
                <div style="width: 300px; height:450px" >
                    <div class="images" style="height:230px;background-position:center;background-size:cover;background-image: url('<?= BASE_URL ?>/Public/images/Products/<?= $card['gambar'] ?>');">
                      <h5>.</h5>
                    </div>
                    <div class="value-card" style="padding-left:20px;padding-right:10px">
                      <?php if($card['kategoriStok']  == 'satuan' ){ ?>
                        <h5>tipe Satuan</h5>
                      <?php
                      }else{ ?>
                        <h5>tipe Kiloan</h5>
                      <?php
                      }
                      ?>
                      
                      
                      <input type="hidden" name="idBuah/<?= $index ?>" value="<?= $card['idBuah'] ?>">
                      
                      <span style="display: flex; flex-wrap:wrap;justify-content:space-between">
                        <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">nama buah</h6>
                        <input type="text" class="form-control" style="width: 200px;" name="nama/<?= $index ?>" value="<?= $card['namaBuah'] ?>" disabled>
                      </span>

                      <span style="display: flex; flex-wrap:wrap;justify-content:space-between">
                        <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">Harga</h6>
                        <input type="text" class="form-control" style="width: 200px;" name="harga/<?= $index ?>" value="<?= $card['harga'] ?>" disabled>
                      </span>

                      <span style="display: flex; flex-wrap:wrap;justify-content:space-between">
                        <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">Sisa Stok</h6>
                        <input type="text" class="form-control" style="width: 200px;" name="sisaStok/<?= $index ?>" value="<?= $card['jumlahStok'] ?>" disabled>
                      </span>

                      <input type="hidden" class="form-control" style="width: 200px;" name="nama/<?= $index ?>" value="<?= $card['namaBuah'] ?>" >
                      <input type="hidden" class="form-control" style="width: 200px;" name="harga/<?= $index ?>" value="<?= $card['harga'] ?>" >
                      <input type="hidden" class="form-control" style="width: 200px;" name="sisaStok/<?= $index ?>" value="<?= $card['jumlahStok'] ?>" >

                      <span style="display: flex; flex-wrap:wrap;justify-content:space-between">
                        <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">Input Stok</h6>
                        <input type="text" class="form-control" style="width: 200px;" name="stokInput/<?= $index ?>">
                      </span>
                      
                      <br>
                    </div>
                </div>
              <!-- </form> -->
            <?php
            } ?>
          <?php
          
            $index += 1;

          }
        ?>
        <input type="hidden" name="index" value="<?= $index ?>">
        </form>
    </div>
    
<?php require "$absolute_path/app/views/template/footer.php"; ?>