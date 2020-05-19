<?php
// mencetak apakah ada.id yang di kirimkan 
// jika tidak maka akan di kembalikan ke halamn index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

// menggambil id dari url
$id = $_GET['id'];

// melakukan query dengan parametr id yang di ambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];


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

  <title>Detail</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="" id="home">ZONKORG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="../index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="../index.php">Model laptop</a>
          <a class="nav-item nav-link" href="#Spesifikasi">Spesifikasi</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- jumbotron -->

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">TOKO LAPTOP TERPERCAYA</h1>
    </div>
  </div>


  <!-- akhir jumbotron -->
  <!-- info fanel -->

  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <a href=""><img src="../assets/img/shopee.jpg" alt="emplyee" class="float-left"></a>
          <h4>Shopee</h4>
          <p>https://shopee.co.id/</p>
        </div>
        <div class="col-lg">
          <a href=""> <img src="../assets/img/lazada.jpg" alt="high-Res" class="float-left"></a>
          <h4>Lazada</h4>
          <p>https://www.lazada.co.id/</p>
        </div>
        <div class="col-lg">
          <a href=""> <img src="../assets/img/tokopedia.jpg" alt="security" class="float-left"></a>
          <h4>Tokopedia</h4>
          <p>https://www.tokopedia.com/</p>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <!-- akhir info fanel -->
  <div class="container " id="Spesifikasi">

    <h1>Spesifikasi</h1>
    <br><br>

    <!-- detail -->
    <div class="container">
      <div class="card mb-4 detail" style="max-width: 10000px;">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img class="card-img-top" src="../assets/img/<?= $elektronik["cover"]; ?>" alt="Card image cap">
          </div>
          <div class="col-md-7">
            <div class="card-body detailp">
              <h5 class="card-title"><?= $elektronik["model_laptop"]; ?></h5>
              <ul>
                <li>
                  <p class="card-text"><?= $elektronik["processor"]; ?></p>
                </li>
                <li>
                  <p class="card-text"><?= $elektronik["graphic_card"]; ?></p>
                </li>
                <li>
                  <p class="card-text"><?= $elektronik["ram"]; ?></p>
                </li>
                <li>
                  <p class="card-text"><?= $elektronik["storage"]; ?></p>
                </li>
                <li>
                  <p class="card-text"><?= $elektronik["harga"]; ?></p>
                </li>
                <li>
                  <p class="card-text"><?= $elektronik["keterangan"]; ?></p>
                </li>
              </ul>
              <button class="tombol-kembali detail-tombol"><a href="../index.php">kembali</a></button>
            </div>
          </div>
        </div>

      </div>
      <!-- akhir detail -->

      <!-- footer -->
      <footer class="footer">
        <div class="container">
          <div class="row pt-3">
            <div class="col text-center">
              <p>Copyright &copy 2020.MUHAMMAD VIQRI FEBRIANA</p>
            </div>
          </div>
        </div>

      </footer>

      <!-- akhir footer -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>