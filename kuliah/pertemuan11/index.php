<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
   $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      body {
         background-color: skyblue;
      }

      h2 {
         text-align: center;
      }
   </style>
   <title>Daftar Mahasiswa</title>
</head>

<body>
   <h2>DAFTAR MAHASISWA</h2>

   <a href="tambah.php">tambah data mahasiswa</a>
   <BR></BR>

   <form action="" method="POST">
      <input type="text" name="keyword" size="40" placeholder="Masukan Keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
   </form>
   <br>


   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>#</th>
         <th>Gambar</th>
         <th>Nama</th>
         <th>Aksi</th>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
         <tr>
            <td colspan="4">
               <p style="color: red">DATA MAHASISWA TIDAK DI TEMUKAN</p>
            </td>
         </tr>
      <?php endif; ?>


      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
         <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nama']; ?></td>
            <td>
               <a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
            </td>
         </tr>
      <?php endforeach; ?>
   </table>

   <br><br><br>
   <button class=""><a href="../../index.php">kembali Ke Halaman Index</a></button>
</body>

</html>