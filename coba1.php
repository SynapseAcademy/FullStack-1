<?php
//Operator Aritmatika
$angka1 = 10.7; // tipe data float / desimal
$angka2 = 5; //

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$mod = $angka1 % $angka2;

echo "Angka Pertama adalah " . $angka1 . "<br>";
echo "Ditambah Angka ke Dua adalah " . $angka2 . "<br>";
echo "Hasilnya adalah " . $tambah . "<br>";

echo "<hr>";
//OPERATOR Perbandingan
$angka3 = 4;
$angka4 = 6;
$cek = $angka3 == $angka4;
$cek1 = $angka3 !== $angka4;
$cek2 = $angka3 <> $angka4;
$cek3 = $angka3 > $angka4;
$cek4 = $angka3 < $angka4;
$cek5 = $angka3 >= $angka4;
$cek6 = $angka3 <= $angka4;

echo var_dump($cek); //0
echo "<hr>";

//Operator Logika (AND &&, OR ||, NOT !, XOR)
$angka7 = 8;
$angka8 = 12;
$bool = ($angka7 > $angka8 xor $angka8 !== $angka7) or $angka7 > $angka8;
// var_dump(($angka7 > $angka8 xor $angka8 !== $angka7) or $angka7 > $angka8);
echo "Jika " . $angka7 . " lebih dari angka " . $angka8 . " Not OR Angka " . $angka8 . " tidak sama dengan angka " . $angka7 . " atau angka " . $angka7 . " lebih dari angka " . $angka8 . " Maka Hasilnya adalah TRUE (" . $bool . ")";

echo "<hr>";

// Operator Increment ++ dan Decrement --
$x = 5;

//PRE Increment
echo ++$x; //6
echo "<br>";
//POST Increment
echo $x++; //6
echo "<br>";
echo $x; //7
echo "<br>";

// Pre Decrement
echo --$x;  //6
echo "<br>";
// Post Decrement
echo $x--;  //6
echo "<br>";
echo $x;  //5
echo "<br>";
