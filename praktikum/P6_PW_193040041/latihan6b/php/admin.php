<?php
// menghubungkan dengan file lain nya
require 'functions.php';

// melakukan query
$elektronik = query("SELECT * FROM elektronik");

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- css ku -->
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <title>ADMIN</title>
</head>

<body>
 <div class="container">
  <h1>Daftar 11 Laptop Gaming</h1>
  <div>
   <a href="tambah.php">Tambah Data</a>
  </div>
  <table border="1" cellpadding="8" cellspacing="0" style="text-align : center ">
   <tr>
    <th>ID</th>
    <th>opsi</th>
    <th>Cover</th>
    <th>Model Laptop</th>
    <th>Processor</th>
    <th>Graphic Card</th>
    <th>RAM</th>
    <th>Storage</th>
    <th>Harga</th>
   </tr>
   <?php $i = 1 ?>
   <?php foreach ($elektronik as $elektro) : ?>
    <tr>
     <td><?= $i ?></td>
     <td>
      <a href="">Ubah</a>| <a href="">Hapus</a>
     </td>
     <td><img class="admin" src="../assets/img/<?= $elektro["cover"]; ?>"></td>
     <td><?= $elektro["model_laptop"]; ?></td>
     <td><?= $elektro["processor"]; ?></td>
     <td><?= $elektro["graphic_card"]; ?></td>
     <td><?= $elektro["ram"]; ?></td>
     <td><?= $elektro["storage"]; ?></td>
     <td><?= $elektro["harga"]; ?></td>
    </tr>
    <?php $i++ ?>
   <?php endforeach; ?>


  </table>
 </div>
</body>

</html>