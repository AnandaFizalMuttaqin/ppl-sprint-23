<?php
$query = mysqli_query($conn,"SELECT * FROM deskripsi_web where idDeskripsi = 1");
$data = mysqli_fetch_array($query);

?>