<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/view/sidebar.php"; ?>
        

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="body-container container" data-aos="zoom-in">
            <?= $message ?>
            <center><input type="text" class="form-control" style="width: 300px;" name="judul" value="<?= $data['namaDeskripsi'] ?>" id=""></center>
            <div class="mb-3">
                <label for="">Edit Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="Deskripsi" rows="10"><?= $data['isiDeskripsi'] ?></textarea>
            </div>
            <center><button class="btn btn-success" value="simpan" type="submit" name="update">Simpan</button></center>
            </div>
        </form>
<?php require "$absolute_path/app/view/footer.php"; ?>

