<?php
// mencetak apakah ada.id yang di kirimkan 
// jika tidak maka akan di kembalikan ke halamn index.php
if(!isset($_GET['id'])) {
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

  <title>detail5c</title>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="#">ZONKORG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Model laptop</a>
      <a class="nav-item nav-link" href="#">contact</a>
      <a class="nav-item nav-link" href="#">lokasi</a>
    </div>
  </div>
  </div>
</nav>
<!-- akhir navbar -->

  <div class="container">
    <div class="card" style="width: 18rem;" >
      <img class="card-img-top" src="../assets/img/<?= $elektronik["cover"]; ?>" alt="Card image cap">
    </div>
    <div class="card-body">
        <p class="card-text"><?= $elektronik["model_laptop"]; ?></p>
        <p class="card-text"><?= $elektronik["processor"]; ?></p>
        <p class="card-text"><?= $elektronik["graphic_card"]; ?></p>
        <p class="card-text"><?= $elektronik["ram"]; ?></p>
        <p class="card-text"><?= $elektronik["storage"]; ?></p>
        <p class="card-text"><?= $elektronik["harga"]; ?></p>
    </div>
  
    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
  
    </div>
  </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



 