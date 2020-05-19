<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
   if (registrasi($_POST) > 0) {
      echo "<script>
              alert ('User baru berhasil ditambah kan silahkan login!');
               document.location.href = 'login.php'
          </script>";
   } else {
      echo 'user gagal di tambahkan!';
   }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!doctype html>
   <html lang="en">

   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- css ku -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <style>
         body {
            background: -webkit-linear-gradient(bottom, pink, red);
            background-repeat: no-repeat;
         }
      </style>
      <title>Registrasi</title>
   </head>

<body>
   <div id="card">
      <div class="card" id="warna">
         <div class="card-body login">
            <p>REGISTRASI</p>
            <form action="" method="POST">
               <table>
                  <tr>
                     <td><label for="username">USERNAME</label></td>
                     <td>:</td>
                     <td><input type="text" name="username" autofocus autocomplete="off" required></td>
                  </tr>
                  <tr>
                     <td><label for="password">PASSWORD</label></td>
                     <td>:</td>
                     <td><input type="password" name="password" required></td>
                  </tr>
               </table>
               <button type="submit" name="registrasi">registrasi!</button>
            </form>
         </div>
      </div>
   </div>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>