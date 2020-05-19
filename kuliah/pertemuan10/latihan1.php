<?php
// koneksi ke db & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040041');

// Query isi table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); array numerik
// $row = mysqli_fetch_assoc($result); array associative
// $row = mysqli_fetch_array($result); keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
}

//
$mahasiswa = $rows;
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Mahasiswa</title>
</head>

<body>
   <h3>daftar mahasiswa</h3>

   <table border="1" cellpadding="10" cellspacing="0">

      <tr>
         <th>#</th>
         <th>Gambar</th>
         <th>Nrp</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jurusan</th>
         <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
         <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['Email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
               <a href="">ubah</a> | <a href="">hapus</a>
            </td>
         </tr>
      <?php endforeach; ?>
   </table>


   <br><br><br>
   <button class=""><a href="../../index.php">kembali Ke Halaman Index</a></button>
</body>

</html>