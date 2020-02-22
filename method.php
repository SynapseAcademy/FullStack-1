<h1>Login Form</h1>
<form action="" method="post">
   <label for="user">Username:</label>
   <input type="text" id="user" name="username" placeholder="Masukkan Username"><br><br>

   <label for="pass">Password:</label>
   <input type="password" id="pass" name="password" placeholder="Masukkan Password"><br><br>

   <label for="remember">Remember me:</label>
   <input type="checkbox" id="remember" name="remember" value="Y"><br><br>

   <button type="submit" name="submit">Login</button>
</form>

<?php
//AMBIL NILAI DARI FORM


echo $date;
echo "<br>";
$usernameLogin = "admin";
$passwordLogin = "123";
$statusLogin   = "Y";

if (isset($_POST['submit'])) {
   $username      = $_POST['username'];
   $password      = $_POST['password'];
   $rememberMe    = (isset($_POST['remember'])) ? $_POST['remember'] : ""; //if khusus

   //Proses Cek Login
   if ($username == $usernameLogin && $password == $passwordLogin && $statusLogin == "Y") {
      echo "Login Granted <br>";
      echo "Username " . $username . "<br>";
      echo "Password " . $password . "<br>";
      echo "Remember Me " . $rememberMe . "<br>";
   } else {
      echo "Login Failed";
   }
}
?>