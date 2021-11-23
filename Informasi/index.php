<?php require "../../app/core/MVC_model.php";?>
</head>
<body>
<?php require "$absolute_path/app/views/sidebar.php"; ?>
    <div class="body-container" style="height: auto;">
        <center><h1><?= $data['namaDeskripsi'] ?></h1></center>
        <p><?= $data['isiDeskripsi'] ?></p>
    </div>
<?php require "$absolute_path/app/views/template/footer.php"; ?>

