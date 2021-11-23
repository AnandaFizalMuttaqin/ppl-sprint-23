<?php 

$query = mysqli_query($conn,"SELECT * FROM buah");

if(isset($_POST['ramal'])){ 

  $output = "";


    #bulan ini
    $output .= "<br>"."bulan ini:";
    // echo "bulan ini:";
    if($_POST['waktu'] != ""){
      $bulan = "";
      $tahun = $_POST['waktu'];
      for($i = strlen($tahun)-1; $i>=0 ; $i-- ){
        if($tahun[$i] != "-" ){
          $bulan = $bulan.$tahun[$i];
          $tahun = substr_replace($tahun ,"", -1);
        }
        else{
          $tahun = substr_replace($tahun ,"", -1);
          
          break;
        }
      }
      $bulan = strrev($bulan);

      $getDataPesanan = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui'");

      $listDataBulanPilih = array();
      $listDataBuahBulanPilih = array();
      $totalBulanIni = 0;

      while($result = mysqli_fetch_assoc($getDataPesanan)){
        $result['jadwal'] = substr($result['jadwal'], 0, 7);
        if($result['jadwal'] == $_POST['waktu']){
          array_push($listDataBulanPilih,$result['idPesanan']);
          $getBuah = mysqli_query($conn,"SELECT idBuah,jumlah FROM detailPesanan WHERE idPemesanan = $result[idPesanan] AND idBuah = $_POST[barang]");
          // echo "SELECT idBuah FROM detailPesanan WHERE idPemesanan = $result[idPesanan] AND idBuah = $_POST[barang]"."";

          while($row = mysqli_fetch_assoc($getBuah)){
            // echo $row["jumlah"]."";
            $getHarga = mysqli_query($conn,"SELECT harga FROM buah WHERE idBuah = $row[idBuah]");
            $harga = mysqli_fetch_array($getHarga)['harga'];
            // echo $harga."";
            array_push($listDataBuahBulanPilih,$row["idBuah"]);
            // echo (mysqli_fetch_array($getHarga)['harga']*$row["jumlah"] );
            $totalBulanIni += ($harga*$row["jumlah"] ) ;
          }
        }
      }

      $output .= "<br>"."total pendapatan ".$totalBulanIni."<br>";

      // echo "total pendapatan ".$totalBulanIni."<br>";


      // bulan lalu
      $output .= "<br>"."bulan kemarin :";
      // echo "bulan kemarin";

      $bulan = $bulan-1;
      $bulan = strval($bulan);;
      if(strlen($bulan) == 1){
        // echo "yes";
        $bulan = "0"."$bulan";
      }
      // echo $bulan;
      $waktu = $tahun."-".$bulan;
      $listDataBulanLaluPilih = array();
      $listDataBuahBulanLaluPilih = array();
      $totalBulanLalu = 0;
      $getDataPesanan = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui'");

      while($result = mysqli_fetch_assoc($getDataPesanan)){
        $result['jadwal'] = substr($result['jadwal'], 0, 7);
        if($result['jadwal'] == $waktu){
          array_push($listDataBulanLaluPilih,$result['idPesanan']);
          $getBuah = mysqli_query($conn,"SELECT idBuah,jumlah FROM detailPesanan WHERE idPemesanan = $result[idPesanan] AND idBuah = $_POST[barang]");
          // echo "SELECT idBuah FROM detailPesanan WHERE idPemesanan = $result[idPesanan]"."";

          while($row = mysqli_fetch_assoc($getBuah)){
            // echo $row["jumlah"]."";
            $getHarga = mysqli_query($conn,"SELECT harga FROM buah WHERE idBuah = $row[idBuah]");
            $harga = mysqli_fetch_array($getHarga)['harga'];
            // echo mysqli_fetch_array($getHarga)['harga']."";
            array_push($listDataBuahBulanLaluPilih,$row["idBuah"]);
            $totalBulanLalu += ($harga*$row["jumlah"] ) ;
          }
        }
      }

      $output .= "<br>". "total pendapatan ".$totalBulanLalu."<br>";
      // echo "total pendapatan ".$totalBulanLalu."<br>";



      // bulan lusa

      $output .= "<br>"."bulan kemarin lusa:";
      // echo "bulan kmarin lusa";
      $bulan = $bulan-1;
      $bulan = strval($bulan);;
      if(strlen($bulan) == 1){
        // echo "yes";
        $bulan = "0"."$bulan";
      }
      // echo $bulan;
      $waktu = $tahun."-".$bulan;
      $listDataBulanLusaPilih = array();
      $listDataBuahBulanLusaPilih = array();
      $totalBulanLusa = 0;
      $getDataPesanan = mysqli_query($conn,"SELECT * FROM pemesanan WHERE statusPesanan = 'disetujui'");

      while($result = mysqli_fetch_assoc($getDataPesanan)){
        $result['jadwal'] = substr($result['jadwal'], 0, 7);
        if($result['jadwal'] == $waktu){
          array_push($listDataBulanLusaPilih,$result['idPesanan']);
          $getBuah = mysqli_query($conn,"SELECT idBuah,jumlah FROM detailPesanan WHERE idPemesanan = $result[idPesanan] AND idBuah = $_POST[barang]");
          // echo "SELECT idBuah FROM detailPesanan WHERE idPemesanan = $result[idPesanan]"."";

          while($row = mysqli_fetch_assoc($getBuah)){
            // echo $row["jumlah"]."";
            $getHarga = mysqli_query($conn,"SELECT harga FROM buah WHERE idBuah = $row[idBuah]");
            $harga = mysqli_fetch_array($getHarga)['harga'];
            // echo mysqli_fetch_array($getHarga)['harga']."";
            array_push($listDataBuahBulanLusaPilih,$row["idBuah"]);
            $totalBulanLusa += ($harga*$row["jumlah"] ) ;
          }
        }
      }

      $output .= "<br>"."total pendapatan ".$totalBulanLusa."<br>";
      // echo "total pendapatan ".$totalBulanLusa."<br>";

      $hasil_ramal = 0;

      $output .= "<br>"."hasil ramal :";
      // echo "hasil ramal :";
      $hasil_ramal_bulan_lusa = $totalBulanLusa*1;

      $output .= "<br>"."$totalBulanLusa * 1 = $hasil_ramal_bulan_lusa";
      // echo "$totalBulanLusa * 1 = $hasil_ramal_bulan_lusa";
      $hasil_ramal_bulan_lalu = $totalBulanLalu*2;



      $output .= "<br>"."$totalBulanLalu * 2 = $hasil_ramal_bulan_lalu";
      // echo "$totalBulanLalu * 2 = $hasil_ramal_bulan_lalu";
      $hasil_ramal_bulan_ini = $totalBulanIni*3;
      // echo $totalBulanIni*3;


      $output .= "<br>". "$totalBulanIni * 3 = $hasil_ramal_bulan_ini:";
      // echo "$totalBulanIni * 3 = $hasil_ramal_bulan_ini:";


      $output .= "<br>"."<br>total : ".$hasil_ramal_bulan_ini+$hasil_ramal_bulan_lalu;$hasil_ramal_bulan_lusa;;
      // echo "<br>total : ";
      // echo $hasil_ramal_bulan_ini+$hasil_ramal_bulan_lalu;$hasil_ramal_bulan_lusa;
// 
      
      
      // echo $output;

      // die();
      





















      // echo $bulan." ".$tahun;
      // if(($bulan-1) < 10 ){
      //   $bulan = "0".$bulan;
      // }
      // echo $bulan;
      
      
    }
    
    
}


?>