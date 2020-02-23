<?php
date_default_timezone_set('Asia/Jakarta');

function tanggal_indo($tanggal, $cetak_hari = false)
{
   $hari = array(
      1 =>    'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jumat',
      'Sabtu',
      'Minggu'
   );

   $bulan = array(
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
   );

   // $split     = explode('-', $tanggal);

   $split1      = explode(' ', $tanggal);
   $tgl         = $split1[0];
   $tgl_expload = explode('-', $tgl);

   $tgl_indo    = $tgl_expload[2] . ' ' . $bulan[(int) $tgl_expload[1]] . ' ' . $tgl_expload[0];

   if ($cetak_hari) {
      $num = date('N');
      return $hari[$num] . ', ' . $tgl_indo;
   }
   return $tgl_indo;
}

//memanggil function
$waktu = date("Y-m-d H:i:s");
echo tanggal_indo($waktu, true);



function aritmatika($angka1, $angka2, $operator = "tambah")
{
   switch ($operator) {
      case 'tambah':
         $hasil = $angka1 + $angka2;
         break;
      case 'kali':
         $hasil = $angka1 * $angka2;
         break;
      case 'bagi':
         $hasil = $angka1 / $angka2;
         break;
      case 'kurang':
         $hasil = $angka1 - $angka2;
         break;
      default:
         $hasil = 0;
         break;
   }
   return $hasil;
}

echo aritmatika(10, 5);
