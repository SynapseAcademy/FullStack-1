<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'isikonten/content-home.php';
      break;
   case 'home':
      include 'isikonten/content-home.php';
      break;
   case 'about':
      include 'isikonten/content-about.php';
      break;
   case 'contact':
      include 'isikonten/content-contact.php';
      break;
   case 'login':
      include 'isikonten/content-login.php';
      break;
   case 'info':
      include 'isikonten/content-info.php';
      break;


   case 'act-login':
      include 'proses/act-login.php';
      break;
   case 'act-logout':
      include 'proses/act-logout.php';
      break;

   default:
      include '404.php';
      break;
}
