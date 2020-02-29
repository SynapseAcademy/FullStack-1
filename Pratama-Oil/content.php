<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
      //VIEW
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;
   case 'register':
      include 'view/register.php';
      break;
   case 'about':
      include 'view/about.php';
      break;
   case 'business':
      include 'view/business.php';
      break;
   case 'relationship':
      include 'view/relationship.php';
      break;
   case 'carier':
      include 'view/carier.php';
      break;
   case 'contact':
      include 'view/contact.php';
      break;


      //MODUL
   case 'act-register':
      include 'modul/act-register.php';
      break;



   default:
      include 'view/404.php';
      break;
}
