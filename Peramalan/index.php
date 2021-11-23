<?php require "../../app/core/MVC_model.php";?>

</head>
<body>
<?php require "$absolute_path/app/view/sidebar.php"; ?>
    <div class="body-container" data-aos="zoom-in" style="height: auto;padding-left:100px">
        <center><h1>Peramalan</h1></center>

            <form action="" class="container" method="POST" >
                <span style="width:350px;display: flex;justify-content:space-between">
                <label for="">Nama Barang</label>
                    <select class="form-select" name="barang" id="waktu">
                        <?php
                        while($result = mysqli_fetch_assoc($query)){ ?>
                            <option value="<?= $result['idBuah'] ?>"><?= $result['namaBuah'] ?></option>
                        <?php }?>
                        
                    </select>
                </span>
                <br>
                <input type="month" name="waktu" placeholder="dd-mm-yyyy" value="" min="2021-09-09" max="2030-12-31">
                <button  type="submit" class="btn btn-outline-success" name="ramal">Lihat</button>
                        
            </form>

            
            
        <div style="background-color: white; padding-left:40px">
        <br>
        <h3>Laporan</h3>
        <?php
            
            if(isset($output)){
                echo $output;
            }
            
            ?>
        </div>
        
    </div>
<?php require "$absolute_path/app/view/footer.php"; ?>