<?php
$namaBarang = "Komputer Lenovo Core I3";
$jenisBarang = "Elektronik";
$hargaBarang = 10000;
$jumlahBeli = 2;
$diskon = 0;
$bayar = 5000000;

//Proses
$totalBayar = $hargaBarang * $jumlahBeli;
// jika total bayar 100rb diskon 30%
// jika total bayar 150rb diskon 40%
// jika total bayar 200rb diskon 50%
if ($totalBayar >= 100000 && $totalBayar < 150000) {
   $diskon = $totalBayar * 0.3;
   if ($diskon > 150000) {
      $diskon = 150000;
   }
} else if ($totalBayar >= 150000 && $totalBayar < 200000) {
   $diskon = $totalBayar * 0.4;
   if ($diskon > 300000) {
      $diskon = 300000;
   }
} else if ($totalBayar >= 200000) {
   $diskon = $totalBayar * 0.5;
   if ($diskon > 500000) {
      $diskon = 500000;
   }
}

$hargaJual = $totalBayar - $diskon; //setelah diskon
$kembalian = $bayar - $hargaJual;

echo "Harga Barang :" . number_format($hargaBarang, 0, ',', '.'); //Rp. 7.000.000
echo "<br>";
echo "Jumlah Beli :" . $jumlahBeli; //Rp. 7.000.000
echo "<br>";
echo "Rp. " . number_format($totalBayar, 0, ',', '.'); //Rp. 7.000.000
echo "<br>";
echo "Rp. " . number_format($diskon, 0, ',', '.'); //Rp. 7.000.000
echo "<br>";
echo "Bayar : " . number_format($bayar, 0, ',', '.'); //Rp. 7.000.000
echo "<br>";
echo "Kembalian : " . number_format($kembalian, 0, ',', '.'); //Rp. 7.000.000
echo "<br>";
