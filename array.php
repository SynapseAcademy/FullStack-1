<?php
// $teman = "Ani";
// $teman = "Joko";
// $teman = "Budi";

// echo $teman;

// ARRAY Numeric
$cv = array(1 => 'Eko Purnomo', 18, "Jalan. Merdeka No 100 Palembang", "Pria");

//Menampilkan Array menggunakan FOR
for ($x = 1; $x <= count($cv); $x++) {
   echo $cv[$x] . "<br>";
}
echo "<hr>";
//Menampilkan Array Menggunakan Foreach
foreach ($cv as $kunci => $isi) {
   echo $kunci . " => " . $isi . "<br>";
}

echo "<hr>";
// ARRAY Associative
$data = [
   "nama"   => "Eko Purnomo",
   "umur"   => 18,
   "alamat" => "Jalan. Merdeka No 100 Palembang",
   "gender" => "Pria"
];

echo $data['nama'] . "<br>";

// menampilkan data menggunakan foreach
foreach ($data as $value) {
   echo $value . "<br>";
}


echo "<hr>";

// ARRAY Multidimensional
$kendaraan = [
   1 => [
      "merk" => "Toyota",
      "type" => "Vios",
      "tahun" => 2016
   ],
   2 => "Sepeda",
   3 => "Truk",
   4 => ['Honda', 'Yamaha', 'Suzuki'],
   5 => "Bus"
];

echo $kendaraan[1]['merk'] . "<br>";
foreach ($kendaraan as $x) {
   if (is_array($x)) {
      foreach ($x as $y) {
         echo $y . "<br>";
      }
   } else {
      echo $x . "<br>";
   }
}


echo "<hr>";
$mahasiswas = [
   [
      "nama"       => "Budi Purnama",
      "nim"        => "12540154",
      "jk"         => "Pria",
      "jurusan"    => "Teknik Informatika",
      "semester"   => "Semester 7",
      "ipk"        => 3.8,
      "email"      => [
         "budi@gmail.com",
         "budi@yahoo.com"
      ],
      "pembimbing" => [
         "p1"      => "Juwita Oktarina, M.Kom",
         "p2"      => "Dr. Ir. Wahyu Oktiyawan, M.Si"
      ]
   ],
   [
      "nama"       => "Wahyuni",
      "nim"        => "12540111",
      "jk"         => "Wanita",
      "jurusan"    => "Sistem Informasi",
      "semester"   => "Semester 2",
      "ipk"        => 3,
      "email"      => [
         "wahyuni@gmail.com",
         "wahyuni@yahoo.com"
      ],
      "pembimbing" => [
         "p1"      => "Juwita Oktarina, M.Kom",
         "p2"      => "Dr. Ir. Wahyu Oktiyawan, M.Si"
      ]
   ]
];

foreach ($mahasiswas as $mahasiswa) { ?>
   <h1>Hasilnya</h1>
<?php
   echo "<h1 style=\"font-size:12px \">Hasilnya </h1>";
   echo $mahasiswa['nama'] . "<br>";
   echo $mahasiswa['nim'] . "<br>";
   echo $mahasiswa['jk'] . "<br>";
   echo $mahasiswa['jurusan'] . "<br>";
   echo $mahasiswa['semester'] . "<br>";
   echo $mahasiswa['ipk'] . "<br>";
   if (is_array($mahasiswa['email'])) {
      echo "Email : ";
      foreach ($mahasiswa['email'] as $email) {
         echo "<li>" . $email . "</li>";
      }
   }
   if (is_array($mahasiswa['pembimbing'])) {
      echo "Pembimbing : ";
      foreach ($mahasiswa['pembimbing'] as $pembimbing) {
         echo "<li>" . $pembimbing . "</li>";
      }
   }

   echo "<hr>";
}
