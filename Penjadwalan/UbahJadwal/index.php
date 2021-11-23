<?php require "../../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    
    <div class="body-container" data-aos="zoom-in">
      <?= $message ?>
      <table class="table">
        <tr class="table table-primary">
          <td>Jadwal Pengiriman</td>
          <td >Jam</td>
          <td></td>
        </tr>
        <?php
        while($result = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <form action="" method="POST">
              <input type="hidden" name="idJadwal" value="<?= $result['idJadwal'] ?>">
              <td><input type="date" name="jadwal" value="<?= $result['jadwal'] ?>"></td>
              <td>
              <select style="width: 100px;margin-left:20px" name="jam" class="form-select" aria-label="Default select example">
                <option selected value="<?= $result['jam'] ?>"><?= $result['jam'] ?></option>
                      <?php
                      for($j=1; $j<=24; $j++){ ?>
                        <option value="<?= $j ?>"><?= $j ?></option>
                      <?php
                      }
                      ?>
                      
              </select>
              </td>
              <td><button type="submit" name="simpan" class="btn btn-success">Simpan</button></td>
            </form>
            
          </tr>
        <?php
        }
        ?>
      </table>

        
    </div>
    
    
    

  <?php
require "$absolute_path/app/view/footer.php";
?>
