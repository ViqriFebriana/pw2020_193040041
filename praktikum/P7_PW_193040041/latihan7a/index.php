<?php
// menghubungkan dengan file php lain nya
require 'php/functions.php';

// pencarian
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
   model_laptop LIKE '%$keyword%' OR
   harga LIKE '%$keyword%'
 ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css ku -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>tugas</title>

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
          <a class="nav-item nav-link" href="php/login.php">ADmin</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <h1 style="text-align : center ">Daftar 11 Laptop Gaming</h1>
  <form action="" method="get">
    <input type="text" name="keyword">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table cellpadding="8" cellspacing="0" style="text-align : center ">
    <tr>
      <th>ID</th>
      <th>Cover</th>
      <th>Model Laptop</th>
      <th>Processor</th>
      <th>Harga</th>
    </tr>

    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="5">
          <h1>Data tidak di temukan</h1>
        </td>
      </tr>
    <?php else : ?>

      <?php $i = 1 ?>
      <?php foreach ($elektronik as $elektro) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $elektro["cover"]; ?>" height="100px"></td>
          <td>
            <p class="cover">
              <a href="php/detail.php?id=<?= $elektro['id'] ?>">
                <?= $elektro['model_laptop'] ?>
              </a>
            </p>
          </td>
          <td><?= $elektro["processor"]; ?></td>
          <td><?= $elektro["harga"]; ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    <?php endif; ?>


    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>