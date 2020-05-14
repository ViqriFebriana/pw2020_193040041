<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h3>Form Login</h3>
    <?php if (isset($login['error'])) : ?>
        <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>

    <?php endif; ?>
    <table>
        <form action="" method="POST">
            <tr>
                <td>Username </td>
                <td>:</td>
                <td><input type="text" name="username" autofocus autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
            <tr>
                <td><a href="registrasi.php">Tambah User Baru</a></td>
            </tr>

        </form>
    </table>
</body>

</html>