<?php
// login
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form TambahData Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td><label>
            Nama
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nama" autofocus required>
          </label>
        </td>
      <tr>
        <td><label>
            Nrp
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nrp" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Email
        </td>
        <td>:</td>
        <td>
          <input type="text" name="Email" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Jurusan
        <td>:</td>
        <td>
          <input type="text" name="jurusan" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Gambar
        </td>
        <td>:</td>
        <td>
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
          </label>
        <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="tambah">TambahData</button>
        </td>
      </tr>

      </ul>
    </table>
  </form>

  <script src="js/script.js"></script>
</body>

</html>