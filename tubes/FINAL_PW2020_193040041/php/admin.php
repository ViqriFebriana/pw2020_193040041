<?php
// wajib login
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}


// menghubungkan dengan file lain nya
require 'functions.php';

// pencarian
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
   model_laptop LIKE '%$keyword%' OR
   harga LIKE '%$keyword%'
 ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
}

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
    <a href="logout.php">
      <button type="">LOGOUT</button>
    </a>
    <br><br>
    <div>
      <a href="tambah.php">Tambah Data</a>
      <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari!</button>
      </form>
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
        <th>Keterangan</th>
      </tr>

      <?php if (empty($elektronik)) : ?>
        <tr>
          <td colspan="9">
            <h1>Data tidak di temukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1 ?>
        <?php foreach ($elektronik as $elektro) : ?>
          <tr>
            <td><?= $i ?></td>
            <td>
              <a href="ubah.php?id=<?= $elektro['id']; ?>">Ubah</a> |
              <a href="hapus.php?id=<?= $elektro['id']; ?>" onclick="return confirm('hapus data??')">Hapus</a>
            </td>
            <td><img class="admin" src="../assets/img/<?= $elektro["cover"]; ?>"></td>
            <td><?= $elektro["model_laptop"]; ?></td>
            <td><?= $elektro["processor"]; ?></td>
            <td><?= $elektro["graphic_card"]; ?></td>
            <td><?= $elektro["ram"]; ?></td>
            <td><?= $elektro["storage"]; ?></td>
            <td><?= $elektro["harga"]; ?></td>
            <td><?= $elektro["keterangan"]; ?></td>

          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>
      <?php endif; ?>


    </table>
  </div>
</body>

</html>