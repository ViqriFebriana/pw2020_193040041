<?php
require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//Melakukan query dengan parameter id yang diambil dari url
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Detail Mahasiswa</title>
</head>

<body>
 <h3>Detail Mahasiswa</h3>
 <div class="container">
  <div class="Gambar">
   <img src="img/<?= $mhs['gambar']; ?>" width="320px" alt="">
  </div>

  <div class="keterangan">
   <p><?= $mhs['nama']; ?></p>
   <p><?= $mhs['nrp']; ?></p>
   <p><?= $mhs['Email']; ?></p>
   <p><?= $mhs['jurusan']; ?></p>

  </div>

  <button class="tombol-kembali"><a href="latihan3.php">Kembali</a></button>
 </div>
</body>

</html>