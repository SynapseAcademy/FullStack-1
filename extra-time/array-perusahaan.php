<?php
// ARRAY pasangan key/index dengan value / nilai
// numeric => key == numeric / angka
// Associative => key == berasosiasi/ punya makna
// multidimensi => array didalam array

$numeric = [1 => 'budi', 18, true, 9.0];
var_dump($numeric);

$associative = array(
   'nama'   => 'budi',
   'umur'   => 18,
   'status' => true,
   'nilai'  => 9.0
);
var_dump($associative);

$multidimensi = [
   1 => [
      'nama'   => 'Budi',
      'umur'   => 18,
      'status' => true,
      'nilai'  => [
         'nmtk' => 9.0,
         'nips' => 4.0,
         'nipa' => 7.9
      ]
   ],
   [
      'nama'   => 'Ani',
      'umur'   => 17,
      'status' => false,
      'nilai'  => [
         'nmtk' => 6.0,
         'nips' => 5.0,
         'nipa' => 8.9
      ]
   ],
   [
      'nama'   => 'Joko',
      'umur'   => 19,
      'status' => false,
      'nilai'  => [
         'nmtk' => 1.0,
         'nips' => 3.0,
         'nipa' => 4.5
      ]
   ],
   [
      'nama'   => 'Eko',
      'umur'   => 24,
      'status' => false,
      'nilai'  => [
         'nmtk' => 3.0,
         'nips' => 4.0,
         'nipa' => 5.9
      ]
   ]
];
var_dump($multidimensi);
?>

<h3>Menampilkan Menggunakan FOREACH</h3>
<table border="1">
   <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Status</th>
      <th>Nilai</th>
   </tr>
   <?php
   $x = 1;
   foreach ($multidimensi as $data) :
      var_dump($data);
   ?>
      <tr>
         <td><?php echo $x++ ?></td>
         <td><?php echo $data['nama'] ?></td>
         <td><?php echo $data['umur'] ?></td>
         <td><?php echo $data['status'] ?></td>
         <td>
            <?php
            foreach ($data['nilai'] as $nilai) {
               echo $nilai . "<br>";
            }
            ?>
         </td>
      </tr>
   <?php
   endforeach;
   ?>
</table>

<h3>Menampilkan Menggunakan FOR</h3>
<table border="1">
   <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Status</th>
      <th>Nilai</th>
   </tr>
   <?php
   for ($x = 1; $x <= count($multidimensi); $x++) : ?>
      <tr>
         <td><?php echo $x ?></td>
         <td><?php echo $multidimensi[$x]['nama'] ?></td>
         <td><?php echo $multidimensi[$x]['umur'] ?></td>
         <td><?php echo $multidimensi[$x]['status'] ?></td>
         <td><?php echo $multidimensi[$x]['nilai'] ?></td>
      </tr>
   <?php
   endfor;
   ?>
</table>

<hr>
<h3>Menampilkan Manual</h3>
<table border="1">
   <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Status</th>
      <th>Nilai</th>
   </tr>
   <tr>
      <td>1</td>
      <td><?php echo $multidimensi[1]['nama'] ?></td>
      <td><?php echo $multidimensi[1]['umur'] ?></td>
      <td><?php echo $multidimensi[1]['status'] ?></td>
      <td><?php echo $multidimensi[1]['nilai'] ?></td>
   </tr>
   <tr>
      <td>2</td>
      <td><?php echo $multidimensi[2]['nama'] ?></td>
      <td><?php echo $multidimensi[2]['umur'] ?></td>
      <td><?php echo $multidimensi[2]['status'] ?></td>
      <td><?php echo $multidimensi[2]['nilai'] ?></td>
   </tr>
   <tr>
      <td>3</td>
      <td><?php echo $multidimensi[3]['nama'] ?></td>
      <td><?php echo $multidimensi[3]['umur'] ?></td>
      <td><?php echo $multidimensi[3]['status'] ?></td>
      <td><?php echo $multidimensi[3]['nilai'] ?></td>
   </tr>
</table>