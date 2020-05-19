<?php
// koneksi ke sql
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke Db gagal");

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
    <!-- css ku -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>tugas5a</title>
</head>

<body>
    <div class="container">
        <h1>Daftar 11 Laptop Gaming</h1>
        <table border="" cellpadding="8" cellspacing="0" style="text-align : center ">
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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["cover"]; ?>"></td>
                    <td><?= $row["model_laptop"]; ?></td>
                    <td><?= $row["processor"]; ?></td>
                    <td><?= $row["graphic_card"]; ?></td>
                    <td><?= $row["ram"]; ?></td>
                    <td><?= $row["storage"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>


        </table>
    </div>

    <br><br><br>
    <button class=""><a href="../../../index.php">kembali Ke Halaman Index</a></button>
</body>

</html>