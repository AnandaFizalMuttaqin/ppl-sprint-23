<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
  <?php require "$absolute_path/app/views/sidebar.php"; ?>

    <div class="body-container">

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

?>
<?php require "$absolute_path/app/views/template/footer.php"; ?>
