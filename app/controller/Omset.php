<?php
$query = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui' order by idPesanan DESC");

?>