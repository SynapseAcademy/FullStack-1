<form action="" method="post">
   <table>
      <tr>
         <th width="200"><label for="ulang">Banyak Perulangan</label></td>
         <td>
            <input type="number" name="ulang" id="ulang" maxlength="1000" value="<?= (isset($_POST['ulang'])) ? $_POST['ulang'] : '' ?>">
         </td>
      </tr>
      <tr>
         <th><label>Jenis Bilangan</label></th>
         <td>
            <input type="radio" name="jenis" id="both" value="both" <?= (isset($_POST['jenis'])) ? $_POST['jenis'] == "both" ? "checked" : '' : '' ?>>
            <label for="both">Semua Bilangan</label>

            <input type="radio" name="jenis" id="genap" value="genap" <?= (isset($_POST['jenis'])) ? $_POST['jenis'] == "genap" ? "checked" : '' : '' ?>>
            <label for="genap">Bil. Genap</label>

            <input type="radio" name="jenis" id="ganjil" value="ganjil" <?= (isset($_POST['jenis'])) ? $_POST['jenis'] == "ganjil" ? "checked" : '' : '' ?>>
            <label for="ganjil">Bil. Ganjil</label>
         </td>
      </tr>
      <tr>
         <td colspan="2" align="right">
            <button type="submit" name="proses" style="width: 50%;">Proses</button>
         </td>
      </tr>
   </table>
</form>

<?php
if (isset($_POST['proses'])) {
   $ulang = $_POST['ulang'];
   $jenis = $_POST['jenis'];

   if ($jenis == 'genap') {
      for ($i = 1; $i <= $ulang; $i++) {
         if ($i % 2 == 0) {
            echo $i . "; ";
         }
      }
   } else if ($jenis == 'ganjil') {
      for ($i = 1; $i <= $ulang; $i++) {
         if ($i % 2 !== 0) {
            echo $i . "; ";
         }
      }
   } else {
      for ($i = 1; $i <= $ulang; $i++) {
         echo $i . "; ";
      }
   }
}
?>