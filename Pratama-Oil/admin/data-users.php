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
   $sql = "SELECT *  FROM users inner join level on users.level=level.id_level";  //Sintak Mysql Untuk menampilkan Semua Data users
   $query = mysqli_query($konek, $sql) or die(mysqli_error($konek)); //Fungsi PHP untuk menjalankan query diatas
   while ($data = mysqli_fetch_assoc($query)) : ?>
      <!-- Perulangan Data dari database -->
      <tr>
         <td>1</td>
         <td><?= $data['username'] ?></td>
         <td><?= $data['email'] ?></td>
         <td><?= $data['status'] == "Y" ? "Aktif" : "Tidak Aktif" ?></td>
         <td><?= $data['level'] ?></td>
         <td><?= $data['login_at'] ?></td>
         <td>
            <a href="#">Edit</a> | <a href="#"> Delete</a>
         </td>
      </tr>
   <?php endwhile ?>
</table>