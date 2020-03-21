<?php
if (isset($_POST['btn-login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   if ($username == 'admin' && $password == '123') {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
   } else {
      echo "Login gagal";
   }
}
