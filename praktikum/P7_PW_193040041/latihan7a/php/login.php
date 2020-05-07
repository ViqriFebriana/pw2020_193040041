<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
 header("location: admin.php");
 exit;
}

if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];
 $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
 if (mysqli_num_rows($cek_user) > 0) {
  $row = mysqli_fetch_assoc($cek_user);
  if ($password == $row['password']) {
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['hash'] = $row['id'];
  }
  if ($row['id'] == $_SESSION['hash']) {
   header("location: admin.php");
   die;
  }
  header("location: ../index.php");
  die;
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
</body>

</html>