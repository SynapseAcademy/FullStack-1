<?php

$companies = [
   [
      "id"              => "99-123",
      "nama_perusahaan" => "PT Wahana Ottomitra Multiartha Tbk",
      "cabang"          => "Jakarta",
      "alamat"          => "JL. Jenderal Sudirman, No. 3010 CDE, KM 3, 5, 				Ilir Timur I, 30129, Pahlawan, Kemuning, Kota 					Palembang, Sumatera Selatan 30129",
      "provinsi"        => "Sumatera Selatan",
      "telepon"         => ["(0711) 376822", "0812-3344-5673"],
      "website"         => "https://wahanaottomitramultiarthatbk.web.indotrading.com",
      "logo"            => "otto.jpg"
   ],
   [
      "id"              => "89-445",
      "nama_perusahaan" => "PT Akabu Sejahtera",
      "cabang"          => "Semarang",
      "alamat"          => "Dusun II, Sambirembe, Kalijambe, Sragen Regency, Central Java 57275",
      "provinsi"        => "Jawa Tengah",
      "telepon"         => ["(0271) 716636", "0813-1211-2322"],
      "website"         => "https://rakabu.com",
      "logo"            => "rakabu.jpg"
   ],
   [
      "id"              => "12-223",
      "nama_perusahaan" => "PT Aditya Sarana Graha (KIRIN, PALOMA, WASSER)",
      "cabang"          => "Palembang",
      "alamat"          => "Jl. Veteran No.72-73, Kuto Batu, Ilir Tim. II, Kota Palembang, Sumatera Selatan 30111",
      "provinsi"        => "Sumatra Selatan",
      "telepon"         => ["(0711) 5731046", "021-998-120"],
      "website"         => "http://wasser.co.id/contact-us/",
      "logo"            => "wasser.png"
   ],
   [
      "id"              => "22-778",
      "nama_perusahaan" => "PT ARINA MULTIKARYA",
      "cabang"          => "Palembang",
      "alamat"          => "Jl. Wirajaya II, Siring Agung, Ilir Bar. I, Kota Palembang, Sumatera Selatan 30151",
      "provinsi"        => "Sumatra Selatan",
      "telepon"         => ["(0711) 2233422", "021-123-222"],
      "website"         => "http://www.arina.co.id/",
      "logo"            => "arina.jpg"
   ],
   [
      "id"              => "32-432",
      "nama_perusahaan" => "PT Unitama Sarimas",
      "cabang"          => "Jakarta",
      "alamat"          => "Jl. Pluit Raya Selatan Blok S No. 3, Pejagalan, Penjaringan, RT.23/RW.8, Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
      "provinsi"        => "Jakarta",
      "telepon"         => ["(021) 6680103", "0711-311-221"],
      "website"         => "http://www.unitamasarimas.co.id/",
      "logo"            => "unitama.jpg"
   ]
];

?>

<html>

<head>
   <title>Data Perusahaan</title>
</head>
<style type="text/css" media="screen">
   .round {
      transition: 0.1s;
      filter: grayscale(100%);
   }

   .round:hover {
      filter: grayscale(0%);
      transform: scale(1.5);
   }
</style>

<body>
   <table border="1">
      <caption>
         <h2>Tabel Data Perusahaan</h2>
      </caption>
      <tr>
         <th>ID</th>
         <th>Logo</th>
         <th>Perusahaan</th>
         <th>Cabang</th>
         <th>Alamat</th>
         <th>Provinsi</th>
         <th>Telepon</th>
         <th>Website</th>
      </tr>
      <?php foreach ($companies as $company) : ?>
         <tr>
            <td width="5%" align="center"><?= $company['id'] ?></td>
            <td>
               <a href="array-perusahaan-detail.php?id=<?= $company['id'] ?>&nama_perusahaan=<?= $company['nama_perusahaan'] ?>&logo=<?= $company['logo'] ?>">
                  <img class="round" src="images/<?= $company['logo'] ?>" alt="" style="width: 70px;">
               </a>
            </td>
            <td><?= $company['nama_perusahaan'] ?></td>
            <td><?= $company['cabang'] ?></td>
            <td><?= $company['alamat'] ?></td>
            <td><?= $company['provinsi'] ?></td>
            <td align="left">
               <ol>
                  <?php
                  foreach ($company['telepon'] as $nohp) { ?>
                     <li><?= $nohp ?></li>
                  <?php
                  }
                  ?>
               </ol>
            </td>
            <td><a href="<?= $company['website'] ?>" target="_blank">Link Perusahaan</a></td>
         </tr>
      <?php endforeach; ?>
   </table>
</body>

</html>