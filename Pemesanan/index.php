<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/views/sidebar.php"; ?>
    <div class="body-container" style="height: auto;">
    
      <?php 

      if(count($_SESSION['keranjang']) > 0){ ?>
        <form action="" method="POST" style="border: 1px solid grey; margin: 10px;padding: 20px;border-radius: 10px">
            <h1 class="text-center"> Keranjang</h1>
            

              <table class="table" style="width: 80%;margin-left: 50px">
                <tr>
                  <td><h6>id buah</h6></td><td><h6>Nama Buah</h6></td> <td><h6>Harga/kg</h6></td> <td><h6>Jumlah(Kg)</h6></td> <td><h6>Total Harga</h6></td>
                </tr>
                <?php 
                $total_harga = 3000;
                $index = 0;

                foreach ($_SESSION['keranjang'] as $value) { ?>
              
                  <tr>
                    <td><?= $value[0] ?></td>
                    <td><?= $value[1] ?></td>
                    <td><?= $value[2] ?></td>
                    <td><?= $value[3] ?></td>
                    
                    <td><?= $value[2]*$value[3] ?></td>
                    <td>
                      <form action="" method="POST">
                        <button type="submit" name="hapus_keranjang" value="<?= $index ?>" class="btn btn-outline-danger"> X </button>
                      </form>
                    </td>
                    <?php $index+=1 ?>
                    
                  </tr>
                  
                  
                  
                  
                  <?php 
                  $total_harga += ($value[2]*$value[3]);
                } ?>
                  <td>Ongkir</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>3000</td>

                  <tr>
                    <td><h5>Total Harga :</h5></td>
                    <td></td>
                    
                    <td></td><td></td>
                    <td><h5>Rp <?= $total_harga ?></h5></td>
                    
                  </tr>

                  <!-- <input type="hidden" value="<?= $total_harga ?>" name="total_harga"> -->
              </table>
            <form action="" method="POST">
            <input type="hidden" name="total_harga" value="<?= $total_harga ?>" id="">
            </form>
            
          
          </form>


          <br>
        <center><?= $message ?></center>
        <form action="" method="POST" style="width: 600px;margin-left:50px">
          <h4>form pembayaran</h4>
          <input type="hidden" name="total_harga" value="<?= $total_harga ?>">  
          <input type="text" class="form-control" name="namaPembeli" placeholder="nama pembeli"> 
          <input type="text" class="form-control" name="noHp" placeholder="nomor hp">
          <input type="text" class="form-control" name="alamat" placeholder="alamat">
          <span style="display: flex;justify-content:space-between">
            <h6 style="margin-top: auto;margin-bottom: auto">Waktu Pengiriman</h6>
            <select style="width: 270px;margin-left:20px" name="waktu_pengiriman" class="form-select" aria-label="Default select example">
                <option selected >Pilih jadwal penngiriman</option>
                      <?php
                      while($result = mysqli_fetch_assoc($getJadwal)){ ?>
                        <option value="<?= $result['jadwal'] ?>"><?= $result['jadwal'] ?> | Jam <?= $result['jam'] ?></option>
                      <?php
                      }
                      ?>
                      
              </select>
          </span>   
          
          <br><br>
          <button type="submit" value="test" name="beli" style="width: 100px;" class="btn btn-success">Beli</button>
        </form>
    <?php
      }
      else{ ?>
      <br>
      <center><?= $message ?></center>
      <center><h1 class="fs-4">Isi Keranjangmu Kosong, silahkan isi keranjang pada halaman Pemesanan</h1></center>
      <?php
      }
    ?>
        
    </div>

    
  </div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>