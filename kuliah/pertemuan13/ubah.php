<?php
// login
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasrkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

//Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form UbahData Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <table>
      <tr>
        <td><label>
            Nama
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
          </label>
        </td>
      <tr>
        <td><label>
            Nrp
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nrp" required value="<?= $mhs['nrp']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Email
        </td>
        <td>:</td>
        <td>
          <input type="text" name="Email" required value="<?= $mhs['Email']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Jurusan
        <td>:</td>
        <td>
          <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td> <input type="hidden" name="gambar_lama" value="<?= $mhs['gambar']; ?>">
          <label>
            Gambar
        </td>
        <td>:</td>
        <td>
          <input type="file" name="gambar" class="gambar" onchange="priviewImage">
          </label>
          <img src="img/<?= $mhs['gambar']; ?>" width="120" style="display: block" class="img-preview">
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="ubah">Ubah Data</button>
        </td>
      </tr>

      </ul>
    </table>
  </form>

  <script src="js/script.js"></script>
</body>

</html>