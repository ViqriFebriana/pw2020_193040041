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
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php if (isset($error)) : ?>
      <P style="color: red">USERNAME / PASSWORD SALAH</P>
   <?php endif; ?>
   <form action="" method="POST">
      <table>
         <tr>
            <td><label for="username">USERNAME</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
         </tr>
         <tr>
            <td><label for="password">PASSWORD</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
         </tr>
      </table>
      <input type="checkbox" name="remember">
      <label for="remember">Remember Me</label>
      <br>
      <button type="submit" name="submit">LOGIN!</button>
   </form>
   <p>belum punya akun registrasi <a href="registrasi.php">disini</a></p>
</body>

</html>