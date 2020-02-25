<?php
function hitung($tgl)
{
   $awal = strtotime($tgl);

   $sekarang = time();

   $diff = $sekarang - $awal;

   $output = '
Usia anda adalah ' . floor($diff / (60 * 60 * 24 * 365)) . ' tahun atau<br>
Usia anda adalah ' . floor($diff / (60 * 60 * 24 * 30)) . ' bulan atau<br>
Usia anda adalah ' . floor($diff / (60 * 60 * 24)) . ' hari atau <br>
Usia anda adalah ' . floor($diff / (60 * 60)) . ' Jam atau <br>
Usia anda adalah ' . floor($diff / (60)) . ' Menit <br>
';

   return $output;
}

echo hitung("1990-08-03");
echo "<hr>";

function paging($halAktif) //4
{
   $jumlahData = 10;
   $perHalaman = 3;
   //halaman 1 awal data 1
   //halaman 2 awal data 4
   //halaman 3 awal data 7
   //halaman 4 awal data 10
   $awalData = ($perHalaman * $halAktif) - $perHalaman;

   for ($x = 1; $x <= $perHalaman; $x++) {
      $d = $awalData + $x;
      if ($d > $jumlahData) {
         echo "";
      } else {
         echo "Data Ke " . $d . "<br>";
      }
   }

   echo "<br>";
   $pages = ceil($jumlahData / $perHalaman);

   if ($halAktif > 1) {
      $kurang = $halAktif - 1;
      echo "<a href='?hal=" . $kurang . "'>&laquo </a> &nbsp;&nbsp; ";
   }
   for ($i = 1; $i <= $pages; $i++) {
      if ($i == $halAktif) {
         echo "<a href='?hal=" . $i . "'><b style='color:red'>" . $i . "</b> </a>  &nbsp;&nbsp;	";
      } else {
         echo "<a href='?hal=" . $i . "'>" . $i . " </a>  &nbsp;&nbsp;	";
      }
   }
   if ($halAktif < $pages) {
      $tambah = $halAktif + 1;
      echo "<a href='?hal=" . $tambah . "'>&raquo </a>  &nbsp;&nbsp;	";
   }
}
paging($_GET['hal']);
