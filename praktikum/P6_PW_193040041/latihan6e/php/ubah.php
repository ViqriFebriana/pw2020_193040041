<?php
require 'functions.php';
// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}


$id = $_GET['id'];
$elektro = query("SELECT * FROM elektronik WHERE id = $id")[0];

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'admin.php';
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
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form UbahData</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $elektro['id']; ?>">
    <table>
      <tr>
        <td><label>
            Cover
        </td>
        <td>:</td>
        <td>
          <input type="text" name="cover" autofocus required value="<?= $elektro['cover']; ?>">
          </label>
        </td>
      <tr>
        <td><label>
            Model Laptop
        </td>
        <td>:</td>
        <td>
          <input type=" text" name="model_laptop" required value="<?= $elektro['model_laptop']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Processor
        </td>
        <td>:</td>
        <td>
          <input type="text" name="processor" required value="<?= $elektro['processor']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Graphic Card
        <td>:</td>
        <td>
          <input type="text" name="graphic_card" required value="<?= $elektro['graphic_card']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            RAM
        </td>
        <td>:</td>
        <td>
          <input type="text" name="ram" required value="<?= $elektro['ram']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Storage
        </td>
        <td>:</td>
        <td>
          <input type="text" name="storage" required value="<?= $elektro['storage']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td><label>
            Harga
        </td>
        <td>:</td>
        <td>
          <input type="text" name="harga" required value="<?= $elektro['harga']; ?>">
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="ubah">UbahData</button>
        </td>
      </tr>

      </ul>
    </table>
  </form>
</body>

</html>