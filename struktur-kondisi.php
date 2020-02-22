<?php
$ntugas = 120;
$nujian = 100;

$hasil = ($ntugas + $nujian) / 2;
echo $hasil;
echo "<br>";
if ($hasil >= 80 && $hasil <= 100) :
   echo "Nilai Terbaik";
elseif ($hasil >= 60 && $hasil < 80) :
   echo "Nilai baik";
elseif ($hasil >= 40 && $hasil < 60) :
   echo "Nilai cukup";
elseif ($hasil >= 0 && $hasil < 40) :
   echo "Nilai Kurang";
elseif ($hasil > 100) :
   echo "Nilai Tidak dikenali";
else :
   echo "Nilai kurang dari 0";
endif;

echo "<hr>";
// IF KHUSUS
$tanggal = date("Y");
echo $tanggal . "<br>";
echo $kabisat = ($tanggal % 4 == 0) ? "KABISAT" : "Bukan KABISAT";
?>
<form>
   <div class="form-group">
      <label for="formGroupExampleInput">Nama Barang</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
   </div>
   <div class="form-group">
      <label for="formGroupExampleInput2">Harga Barang</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
   </div>
</form>