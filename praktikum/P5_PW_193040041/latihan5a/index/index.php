<?php
// koneksi ke sql
$conn = mysqli_connect("localhost","root","") or die("koneksi ke Db gagal");

// memilih database
mysqli_select_db($conn, "tubes_193040041") or die("Database salah!");

// ambil data dari table elektronik
$result = mysqli_query($conn, "SELECT * FROM elektronik");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas5a</title>
</head>
<body>
<div class="container">
<h1>Daftar 10 Laptop Gaming</h1>
<table border="1" cellpadding="8" cellspacing="0" style="text-align : center " >
    <tr>
        <th>ID</th>
        <th>Cover</th>
        <th>Model Laptop</th>
        <th>Processor</th>
        <th>Graphic Card</th>
        <th>RAM</th>
        <th>Storage</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1 ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i?></td>
        <td><img src="../assets/img/<?= $row["cover"]; ?>" height="100px"></td>
        <td><?= $row["model_laptop"]; ?></td>
        <td><?= $row["processor"]; ?></td>
        <td><?= $row["graphic_card"]; ?></td>
        <td><?= $row["ram"]; ?></td>
        <td><?= $row["storage"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++?>
    <?php endwhile; ?>
    

</table>
</div>
</body>
</html>