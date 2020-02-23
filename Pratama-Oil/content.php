<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
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

   default:
      include 'view/404.php';
      break;
}
