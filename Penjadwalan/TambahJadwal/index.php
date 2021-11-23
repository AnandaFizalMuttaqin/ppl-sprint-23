<?php require "../../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    
    <div class="body-container" data-aos="zoom-in">
    <?= $message ?>
      <div style="width:300px;margin-left:auto;margin-right:auto">
        <form action="" method="POST">
          <h3>Form Tambah Jadwal</h3>
          
          <div style="display: flex;">
            <input type="date" name="jadwal">
          </div>
          <br>
          
          <div style="display: flex;">
            <h6 style="margin-top: auto;margin-bottom:auto">jam</h6>
            <select style="width: 100px;margin-left:20px" name="jam<?= $i ?>" class="form-select" aria-label="Default select example">
              <option selected value="1">1</option>
                    <?php
                    for($j=1; $j<=24; $j++){ ?>
                      <option value="<?= $j ?>"><?= $j ?></option>
                    <?php
                    }
                    ?>
                    
            </select>
          </div>
          <br>

          <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit" name="simpan" value="simpan" class="btn btn-primary">Simpan</button>
          
        </form>
      </div>

        
    </div>
    
    
    

  <?php
require "$absolute_path/app/view/footer.php";
?>
