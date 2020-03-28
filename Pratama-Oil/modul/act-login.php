<?php
if (isset($_POST['submit-login'])) {

   $email =  $_POST['email']; //tangkap data yg di input dari form login input email
   $pass = md5($_POST['password']); //tangkap data yg di input dari form login input password

   //melakukan pengampilan data dari database untuk di cocokkan
   $query  = mysqli_query($konek, "SELECT * from users where email='$email'");

   $xx1 = mysqli_num_rows($query); //0 1    //melakukan pencocokan
   $xxx    = mysqli_fetch_assoc($query);

   if ($xx1 == TRUE) {               //jika benar tampilkan pesan berhasil login
      if ($xxx['password'] == $pass) {
         if ($xxx['status'] == 'Y') {
            $_SESSION['username'] = $xxx['username'];
            $_SESSION['email']    = $xxx['email'];
            $_SESSION['level']    = $xxx['level'];
            $_SESSION['loginat']  = $xxx['login_at'];
            $_SESSION['iduser']   = $xxx['id_user'];

            if ($xxx['level'] == 1) {
               header('Location: ./admin/index.php'); //Mengarahkan url ke halaman admin
            } else if ($xxx['level'] == 2) {
               header('Location: ./index.php'); //Mengarahkan url ke halaman User 
            }
         } else {
            echo "<hr><hr><hr><hr> Akun belum diaktifkan";
         }
      } else {
         echo "<hr><hr><hr><hr> Password Salah";
      }
   } else {
      echo "<hr><hr><hr><hr>Email yang anda inputkan belum terdaftar ";
   }
}
