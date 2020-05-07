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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
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
    <button type="submit" name="registrasi">registrasi!</button>
  </form>

</body>

</html>