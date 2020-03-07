<table border="1">
   <tr>
      <th>No</th>
      <th>Username</th>
      <th>Email</th>
      <th>Status</th>
      <th>Level</th>
      <th>Last Login</th>
      <th>Action</th>
   </tr>
   <?php
   $no = 1;
   $sql = "SELECT *  FROM users inner join level on users.level=level.id_level";  //Sintak Mysql Untuk menampilkan Semua Data users
   $query = mysqli_query($konek, $sql) or die(mysqli_error($konek)); //Fungsi PHP untuk menjalankan query diatas
   while ($data = mysqli_fetch_assoc($query)) : ?>
      <!-- Perulangan Data dari database -->
      <tr>
         <td><?= $no++ ?></td>
         <td><?= $data['username'] ?></td>
         <td><?= $data['email'] ?></td>
         <td><?= $data['status'] == "Y" ? "Aktif" : "Tidak Aktif" ?></td>
         <td><?= $data['level'] ?></td>
         <td><?= $data['login_at'] ?></td>
         <td>
            <a href="#">Edit</a> |
            <?php
            if ($data['level'] == 'Administrator') {
               echo '';
            } else { ?>
               <a href="index.php?act=delete&id=<?= $data['id_user'] ?>" onclick="return confirm('Yakin data users ingin dihapus ?')"> Delete</a>
            <?php
            }
            ?>
         </td>
      </tr>
   <?php endwhile ?>
</table>

<?php
if (isset($_SESSION['pesan'])) {
   echo $_SESSION['pesan'];
}

if (isset($_GET['act'])) {
   if ($_GET['act'] == 'delete') {
      $iduser = $_GET['id'];

      $sql = "delete from users where id_user='$iduser'";
      $query = mysqli_query($konek, $sql);
      if ($query == true) {
         $_SESSION['pesan'] = 'Data Users Berhasil dihapus';
         header('Location: index.php');
      } else {
         echo "Terjadi Kesalahan " . mysqli_error($konek);
      }
   }
}
?>