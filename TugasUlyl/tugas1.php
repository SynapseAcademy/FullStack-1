   <?php
   $tanggal = date("F");

   switch ($tanggal) {
      case 'January':
         $bulan = "Januari";
         break;
      case 'February':
         $bulan = "Februari";
         break;
      case 'March':
         $bulan = "Maret";
         break;
      case 'April':
         $bulan = "April";
         break;
      case 'May':
         $bulan = "Mei";
         break;
      case 'June':
         $bulan = "Juni";
         break;
      case 'July':
         $bulan = "Juli";
         break;
      case 'August':
         $bulan = "Agustus";
         break;
      case 'September':
         $bulan = "September";
         break;
      case 'October':
         $bulan = "Oktober";
         break;
      case 'November':
         $bulan = "November";
         break;
      case 'December':
         $bulan = "Desember";
         break;
      default:
         $bulan = "Unknown Month";
         break;
   }

   echo "Sekarang bulan " . $bulan;
