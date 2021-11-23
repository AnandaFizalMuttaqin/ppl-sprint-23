<?php
// echo "halo";
$query = mysqli_query($conn,"SELECT * FROM pengeluaran order by idPengeluaran DESC" );

$value = $numbers = array();
$total_pengeluaran = 0;
while($data = mysqli_fetch_assoc($query)){
  array_push($value,$data['jumlah']);
  $total_pengeluaran += $data['jumlah'];
}
$max_pengeluaran = max($value);
// echo $max_pengeluaran;



$query = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui' order by idPesanan DESC" );
$value = $numbers = array();
$total_omset = 0;
while($data = mysqli_fetch_assoc($query)){
  $total_omset += $data['totalHarga'];
  array_push($value,$data['totalHarga']);
}
$max_omset = max($value);
?>