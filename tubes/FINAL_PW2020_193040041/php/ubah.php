<?php
// wajib login
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

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



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- css ku -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Ubah Data</title>
</head>

<body>
  <div id="card">
    <div class="card" id="warna">
      <div class="card-body ubah">
        <h3>Form UbahData</h3>
        <div class="form-group isi">
          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $elektro['id']; ?>">

            <ul>
              <li><label>
                  Cover
                  <input type="hidden" name="cover_lama" value="<?= $elektro['cover']; ?>">
              </li>
              <p>
                <input type="file" name="cover" class="cover" onchange="previewImage()">
                </label>
                <img src="../assets/img/<?= $elektro['cover']; ?>" width="120" style="display: block" class="img-preview">
              </p>
            </ul>
            <ul>
              <li><label>
                  Model Laptop
              </li>
              <p>
                <input type=" text" name="model_laptop" required value="<?= $elektro['model_laptop']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  Processor
              </li>
              <p>
                <input type="text" name="processor" required value="<?= $elektro['processor']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  Graphic Card
              </li>
              <p>
                <input type="text" name="graphic_card" required value="<?= $elektro['graphic_card']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  RAM
              </li>
              <p>
                <input type="text" name="ram" required value="<?= $elektro['ram']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  Storage
              </li>
              <p>
                <input type="text" name="storage" required value="<?= $elektro['storage']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  Harga
              </li>
              <p>
                <input type="text" name="harga" required value="<?= $elektro['harga']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <li><label>
                  keterangan
              </li>
              <p>
                <input type="text" name="keterangan" class="isi" required value="<?= $elektro['keterangan']; ?>">
                </label>
              </p>
            </ul>
            <ul>
              <p><button type="submit" name="ubah">UbahData</button></p>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <script src="../js/script.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>