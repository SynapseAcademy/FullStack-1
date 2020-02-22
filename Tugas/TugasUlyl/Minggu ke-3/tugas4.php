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
      $num = date('N', strtotime($tanggal));
      return $hari[$num] . ', ' . $tgl_indo;
   }
   return $tgl_indo;
}
