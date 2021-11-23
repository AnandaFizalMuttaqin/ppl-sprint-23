<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in" style="height: auto;">
      <span style="display: flex;justify-content:space-around">
        <center><h1>Informasi Buah</h1></center>
        <a href="TambahProduct" class="btn btn-outline-success">Tambah Buah</a>
      </span>
      <br>      
      <div class="product" style="display: flex;justify-content:space-evenly;flex-wrap:wrap; width:97%">
        <?php
          while($card = mysqli_fetch_assoc($query)){ ?>
            <form action="" method="POST">
              <div class="card" style="width: 300px; height:500px">
                  <div class="images" style="height:230px;background-position:center;background-size:cover;background-image: url('<?= $header_path ?>/../Public/images/Products/<?= $card['gambar'] ?>');">
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


                    
                    <input type="hidden" name="idBuah" value="<?= $card['idBuah'] ?>">
                    <span style="display: flex;">
        
                    </span>
                    <span style="display: flex;justify-content:space-between">
                    <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">nama</h6>
                    <input style="width: 200px;" type="text" class="form-control" name="namaEdit" value="<?= $card['namaBuah'] ?>">
                    </span>
                    <span style="display: flex;justify-content:space-between">
                    <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">harga</h6>
                    <input style="width: 200px;" type="text" class="form-control" name="hargaEdit" value="<?= $card['harga'] ?>">
                    </span>
                    <span style="display: flex;justify-content:space-between">
                    <h6 style="font-size: 12px;margin-top:auto;margin-bottom:auto">jumlah stok</h6>
                    <input style="width: 200px;" type="text" class="form-control" name="stokEdit" value="<?= $card['jumlahStok'] ?>">
                    </span>
                    <!-- <span style="display: flex;">
        
                    </span> -->
                    
                    
                    
                    
                    <?php
                    if($card['kondisiBuah'] == 0){ ?>
                      <input type="text" class="form-control" value="Kondisi : Busuk" disabled>
                      <button type="submit" class="btn btn-outline-success" name="ubahBaru">Ubah ke Baru</button>
                    <?php
                    }
                    else{ ?>
                      <input type="text" class="form-control" value="Kondisi : Baru" disabled>
                      <button type="submit" class="btn btn-outline-danger" name="kadaluarsa">Ubah ke Busuk</button>
                    <?php
                    }
                  ?>
                  </div>
                  
                  
                  
                  <br>
                  <button type="submit" class="btn btn-success" name="editBuah">Edit</button>
                  
              </div>
            </form>
          <?php
          }
        ?>
    </div>
<?php require "$absolute_path/app/view/footer.php"; ?>