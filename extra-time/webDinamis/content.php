<?php
$halaman = $_GET['page'];

switch ($halaman) {
   case 'home':
      include 'isiKonten/home.php';
      break;
   case 'about':
      include 'isiKonten/about.php';
      break;
   case 'contact':
      include 'isiKonten/contact.php';
      break;

   default:
      echo "404 Not Found";
      break;
}
