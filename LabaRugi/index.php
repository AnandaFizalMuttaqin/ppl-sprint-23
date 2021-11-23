<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
    <?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in">
    <div class="login-form">

        <h6>Total Pengeluaran = <?= $total_pengeluaran ?></h6>
        <h6>Total Omset = <?= $total_omset ?></h6>
        <h6>Laba toal = <?= $total_omset-$total_pengeluaran ?></h6>

        <span style="display: flex;">
        <p class="bg-danger" style=" width:200px;display:flex;justify-content:center;color: white;">Pengeluaran</p>
        <p class="bg-success" style=" width:200px;display:flex;justify-content:center;color: white;">Omset</p></span>
        
        <br>
    
        <table>
        <?php
          $query = mysqli_query($conn,"SELECT * FROM pengeluaran order by idPengeluaran DESC" );
          while($data = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td>
              <div style="display: flex;">
                <p style="margin-right: 10px;"><?= $data['tanggal'] ?> </p>
                <p style="margin-right: 30px;"><?= $data['keterangan'] ?></p>
              </div>
            </td>
            
            <td class="bg-danger" style="padding-left:30px; display:flex;width:<?php 
              $size = ($data['jumlah']/$max_pengeluaran) * 800;
              echo $size;
            ?>px">
                <center><p style="margin: auto; color:white"><?= $data['jumlah'] ?></p></center>
                
            </td>
            <!-- <td><p><?= $data['jumlah'] ?></p>  </td> -->
          </tr>
            
                  
        <?php
          }
        ?>

        <?php
          $query = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui' order by idPesanan DESC" );
          while($data = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td>
              <div style="display: flex;">
                <p style="margin-right: 10px;"><?= $data['tanggal'] ?> </p>
                <p><?= $data['waktuPesan'] ?></p>
              </div>
            </td>
            
            <td class="bg-success" style="padding-left:30px; display:flex;width:<?php 
              $size = ($data['totalHarga']/$max_omset) * 800;
              echo $size;
            ?>px">
                <center><p style="margin: auto; color:white"><?= $data['totalHarga'] ?></p></center>
                
            </td>
          </tr>
            
                  
        <?php
          }
        ?>
        </table>
    </div>

    </div>
    
    
  <?php
require "$absolute_path/app/view/footer.php";
?>