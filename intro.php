Persiapkan :

1. Browser (GC recomended, Mozilla, UC)
2. Webserver (apache recomended, nginx)-> Xampp (recomended), Mamp, Wamp

3. Text editor (VS code recomended, sublime, atom, bracket, notepad++)
4. Semngat
<hr>
<?php
$d = 20;
for ($i = 1; $i <= 4; $i++) {
   $d = $d - $i;
}
echo $d;
?>
<hr>
<?php
$a = 1;
$e = 1;
while ($a < 8) {
   $a = $a + 1;
   if ($a < 4) {
      $e = $e + $a;
   } else {
      $e = $e + 2;
   }
}
echo $e;
?>
<hr>
<?php
for ($i = 1; $i <= 100; $i++) {
   if ($i % 3 == 0 && $i % 5 == 0) {
      echo "BINGO <br>";
   } else if ($i % 5 == 0) {
      echo "FIVE <br>";
   } else if ($i % 3 == 0) {
      echo "THREE <br>";
   } else {
      echo $i . "<br>";
   }
}
?>