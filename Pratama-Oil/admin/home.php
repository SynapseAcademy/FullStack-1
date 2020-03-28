<h3>Selamat Datang <?= $_SESSION['username'] ?></h3>
<p>Anda Login Sebagai <?= $_SESSION['level'] == 1 ? 'Admin' : 'User' ?></p>