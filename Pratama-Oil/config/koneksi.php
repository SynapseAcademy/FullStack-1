<?php
$server = 'localhost';
$user   = 'root';
$pass   = 'zxcv';
$db     = 'db_pratamaoil';

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
   trigger_error('Periksa kembali koneksi anda ' . mysqli_error($konek));
   die;
}
