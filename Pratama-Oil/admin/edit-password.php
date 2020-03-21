<h1>Edit Password Users</h1>

<form method="POST" action="">
   <table>
      <tr>
         <th align="left">
            <label>Password Baru</label>
         </th>
         <td>
            <input type="text" name="passBaru">
         </td>
      </tr>
      <tr>
         <th>
            <label>Ulangi Password Baru</label>
         </th>
         <td>
            <input type="text" name="passBaru2">
         </td>
      </tr>
      <tr>
         <td colspan="2">
            <button type="submit" name="btn-SimpanPassword">Simpan Perubahan</button>
         </td>
      </tr>
   </table>
</form>

<?php
if (isset($_POST['btn-SimpanPassword'])) {
   $iduser = $_SESSION['iduser'];
   $passBaru = $_POST['passBaru'];
   $passUlang = $_POST['passBaru2'];

   if ($passBaru == '') {
      echo "Data Password Baru Harus diisi terlebih dahulu";
   } else if ($passUlang == '') {
      echo "Data Ulangi Password Harus diisi terlebih dahulu";
   } else {
      //JIka Semua inputan telah diisi
      if ($passBaru <> $passUlang) {
         echo "Password tidak sama";
      } else {
         $sql = "UPDATE users SET password='$passBaru' where id_user ='$iduser'";
         $query = mysqli_query($konek, $sql);
         if ($query) {
            echo "Password Berhasil diupdate";
            header("Location: index.php");
         } else {
            echo "Terjadi Kesalahan " . mysqli_error($konek);
         }
      }
   }
}
?>