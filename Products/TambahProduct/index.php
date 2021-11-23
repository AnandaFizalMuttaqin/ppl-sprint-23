<?php require "../../../app/core/MVC_model.php";?>
<style>

.deskripsi{
  width: 49.5%;
  margin-left: auto;
  margin-right: auto;
  font-size: 20px;
}


@media screen and (max-width:768px) {
  .deskripsi{
    width: 110%;
  }
  .body-container{
    width: 90%;
    display: flex;
    flex-direction: column;
  }
}
</style>
</head>
<body>
<?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in">
      <form action="" method="POST" enctype="multipart/form-data">
        <center><h1>Tambah Product</h1></center>
        

        <center>
          <div style="width: 400px;">

            <?= $message ?>
            <input type="text" class="form-control" name="nama_buah" placeholder="Nama Buah">
            <input type="text" class="form-control" name="harga" placeholder="Harga">
            <span style="display: flex;justify-content:space-between">
              <label for="satuan_barang">satuan barang</label>
              <select name="satuan_barang" id="cars">
                <option value="kiloan">Kiloan</option>
                <option value="satuan">satuan</option>
              </select>
            </span>
            <input type="text" class="form-control" name="jumlah_stok" placeholder="jumlah stok">
            <div class="deskripsi">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
              </div>
            </div>

            
            <input  type="file" name="img_upload" style="font-size: 16px;">
                
            <br><br>


            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
              

          </div>

          
          
          
        </center>


      
      </form>
    </div>


<?php require "$absolute_path/app/view/footer.php"; ?>

