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
   <title>Registrasi</title>
</head>

<body>
   <h3>Form Registrasi</h3>
   <table>
      <form action="" method="POST">
         <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" autofocus autocomplete="off" required></td>
         </tr>
         <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password1" required></td>
         </tr>
         <tr>
            <td>Konfirmasi Password</td>
            <td>:</td>
            <td><input type="password" name="password2" required></td>
         </tr>
         <tr>
            <td> <button type="submit" name="registrasi">Registrasi</button></td>
         </tr>
      </form>
   </table>
</body>

</html>