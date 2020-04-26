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
 <style>
  body {
   background-color: skyblue;
   color:
  }

  h2 {
   text-align: center;
  }
 </style>
 <title>Detail Mahasiswa</title>
</head>

<body>
 <h2>DETAIL MAHASISWA</h2>
 <table>
  <tr>
   <li><img src="img/<?= $mhs['gambar']; ?>" style="width: 500px;"></li>
   <li>NRP : <?= $mhs['nrp']; ?></li>
   <li>Nama : <?= $mhs['nama']; ?></li>
   <li>Email : <?= $mhs['Email']; ?></li>
   <li>Jurusan : <?= $mhs['jurusan']; ?></li>
   <li><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm ('apakah anda yakin?')">Hapus</a></li>
   <li><a href=" index.php">Kembali ke dafta mahasiswa</a></li>
  </tr>
 </table>
</body>

</html>