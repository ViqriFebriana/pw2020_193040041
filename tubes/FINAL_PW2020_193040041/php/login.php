<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
   header("location: admin.php");
   exit;
}
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
   $username = $_COOKIE['username'];
   $hash = $_COOKIE['hash'];

   // di ambil berdasarkan id
   $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
   $row = mysqli_fetch_assoc($result);

   // cek cookie dan username
   if ($hash === hash('sha256', $row['id'], false)) {
      $_SESSION['username'] = $row['username'];
      header("location: admin.php");
      exit;
   }
}


// login
if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
   // mencocokan Username dan Password
   if (mysqli_num_rows($cek_user) > 0) {
      $row = mysqli_fetch_assoc($cek_user);
      if (password_verify($password, $row['password'])) {
         $_SESSION['username'] = $_POST['username'];
         $_SESSION['hash'] = hash('sha256', $row['id'], false);
         // jika remember me di centang
         if (isset($_POST['remember'])) {
            setcookie('username', $row['username'], time() + 60 * 60 * 24);
            $hash = hash('sha256', $row['id']);
            setcookie('hash', $hash, time() + 60 + 60 + 24);
         }

         if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("location: admin.php");
            die;
         }
         header("location: ../index.php");
         die;
      }
   }
   $error = true;
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
      <title>Login aDmin</title>
   </head>

<body>

   <!-- login -->

   <div id="card">
      <div class="card" id="warna">
         <div class="card-body login">
            <p>LOGIN</p>
            <?php if (isset($error)) : ?>
               <P style="color: red">USERNAME / PASSWORD SALAH</P>
            <?php endif; ?>
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
               <input type="checkbox" name="remember">
               <label for="remember">Remember Me</label>
               <br>
               <button type="submit" name="submit">LOGIN!</button>
            </form>
            <p>belum punya akun registrasi <a href="registrasi.php">disini</a></p>
         </div>
      </div>
   </div>

   <!-- akhir login -->




   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>