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
  <title>ZONKORG INDONESIA</title>

<body>
  <a href="#home" class="naik"><img src="assets/img/ROG1.jpg" class="up"></a>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="" id="home">ZONKORG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="php/admin.php">ADmin</a>
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#model">Model laptop</a>
          <a class="nav-item nav-link" href="#contact">contact</a>
          <a class="nav-item nav-link" href="#contact">lokasi</a>
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
          <a href=""><img src="assets/img/shopee.jpg" alt="emplyee" class="float-left"></a>
          <h4>Shopee</h4>
          <p>https://shopee.co.id/</p>
        </div>
        <div class="col-lg">
          <a href=""> <img src="assets/img/lazada.jpg" alt="high-Res" class="float-left"></a>
          <h4>Lazada</h4>
          <p>https://www.lazada.co.id/</p>
        </div>
        <div class="col-lg">
          <a href=""> <img src="assets/img/tokopedia.jpg" alt="security" class="float-left"></a>
          <h4>Tokopedia</h4>
          <p>https://www.tokopedia.com/</p>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <!-- akhir info fanel -->
  <div class="container" id="model">

    <h1 style="text-align : center ">Daftar Laptop Gaming</h1><br>
    <div class="container">
      <form style="float : right " action="" method="get">
        <input type="text" name="keyword" size="40" placeholder="Masukan Keyword pencarian.." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
      </form>
    </div>
    <br><br><br>


    <div class="container">
      <div class="ajax">
        <table cellpadding="8" cellspacing="0" style="text-align : center ">
          <tr>
            <th>ID</th>
            <th>gambar</th>
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
        </table>
      </div>
    </div>

    <!-- carosel -->
    <div class="container">
      <br><br><br>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ikarosel">
              <h5>Lenovo Legion Y540</h5>
              <p>9th Generation Intel® Core™ i7-9750H, 9th Generation Intel® Core™ i5-9300H</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ikarosel">
              <h5>MSI GF75 9RCX 270</h5>
              <p>9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ikarosel">
              <h5>HP Pavilion Gaming 15 DK0042TX</h5>
              <p>9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/9.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ikarosel">
              <h5>Acer Nitro 5 AN515-54-76RU</h5>
              <p>Intel® Core™ i7-9750H Processor (2.60 GHz. up to 4.50 GHz. 12M Cache)</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ikarosel">
              <h5>Asus ROG G531GT</h5>
              <p>Intel® Core™ i7-9750H 2.6GHz up to 4.5GHz</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <!-- akhir karosel -->

    <!-- contact -->

    <section id="contact" class="contact mb-5">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="contact1">Contact</h2>
          </div>
        </div>


        <div class="row justify-content-center">

          <div class="col-lg-4">
            <div class="card text-white bg-warning mb-3 text-center kontakwarna">
              <div class="card-body">
                <h5 class="card-title ">ZONKORG INDONESIA</h5>
                <p class="card-text" style="color: yellow;">terima kasih atas kunjungan nya bila ada saran dan kritik silahkan krim pesan yang terserdia.</p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <h1>location</h1>
              </li>
              <li class="list-group-item">ZONKORG INDONESIA</li>
              <li class="list-group-item">Bandung Electronic Centre (BEC) </li>
              <li class="list-group-item"> Jl. Purnawarman No 13 – 15,Lantai 1 nomor B10.</li>
            </ul>
          </div>



          <div class="col-lg-6 isian">
            <form>
              <div class="form-group">
                <label for="Nama">Nama </label>
                <input type="text" class="form-control" id="Nama">
              </div>
              <div class="form-group">
                <label for="Email">Email </label>
                <input type="text" class="form-control" id="Email">
              </div>
              <div class="form-group">
                <label for="No Telpon">No Telpon </label>
                <input type="text" class="form-control" id="No Telpon">
              </div>
              <div class="form-group">
                <label for="pesan">Pesan </label>
                <textarea name="pesan" id="pesan" class="form-control"></textarea>
              </div>
              <div class="from-grup">
                <button type="button" class="btn btn-primary">Kirim pesan</button>
              </div>
            </form>
          </div>


        </div>

      </div>
    </section>

    <!-- akhir contact -->

    <!-- skill -->
    <section id="skill" class="skill bg-light pb-4">
      <div class="container gambar">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2 class="skill">Recommended</h2>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md ">
            <div class="card">
              <img src="assets/img/7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Asus ROG Strix III G531GD</h3>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="assets/img/10.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>HP Pavilion Gaming 15 EC0022AX R7</h3>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row mb-4">
          <div class="col-md">
            <div class="card">
              <img src="assets/img/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Asus TUF FX504GE</h3>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="assets/img/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Acer Nitro 5 AN515 54 5942</h3>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>




    <!-- akhir skill -->
    <button class=""><a href="../../index.php">kembali Ke Halaman Index</a></button>
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




    <!-- Optional JavaScript -->
    <!-- js sendiri -->
    <script src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>