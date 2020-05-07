<?php
// wajib login
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php';
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
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form TambahData</h3>
  <form action="" method="POST">
    <table>
      <tr>
        <td><label>
            Cover
        </td>
        <td>:</td>
        <td>
          <input type="text" name="cover" autofocus required>
          </label>
        </td>
      <tr>
        <td><label>
            Model Laptop
        </td>
        <td>:</td>
        <td>
          <input type="text" name="model_laptop" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Processor
        </td>
        <td>:</td>
        <td>
          <input type="text" name="processor" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Graphic Card
        <td>:</td>
        <td>
          <input type="text" name="graphic_card" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            RAM
        </td>
        <td>:</td>
        <td>
          <input type="text" name="ram" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Storage
        </td>
        <td>:</td>
        <td>
          <input type="text" name="storage" required>
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Harga
        </td>
        <td>:</td>
        <td>
          <input type="text" name="harga" required>
          </label>
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
</body>

</html>