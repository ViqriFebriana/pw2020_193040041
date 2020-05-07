<?php
// fungsi untuk melakukan koneksi ke data base
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke Db gagal");
    mysqli_select_db($conn, "tubes_193040041") or die("Database salah!");

    return $conn;
}

// fungsi untuk melakukan query ke data base
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// tambah data
function tambah($data)
{
    $conn = koneksi();

    $cover = htmlspecialchars($data['cover']);
    $model_laptop =  htmlspecialchars($data['model_laptop']);
    $processor = htmlspecialchars($data['processor']);
    $graphic_card = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO
            elektronik
            VALUES
            (NULL,'$cover','$model_laptop','$processor','$graphic_card','$ram',' $storage',' $harga')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $cover = htmlspecialchars($data['cover']);
    $model_laptop =  htmlspecialchars($data['model_laptop']);
    $processor = htmlspecialchars($data['processor']);
    $graphic_card = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE elektronik SET
           cover = '$cover',
           model_laptop = '$model_laptop',
           processor  = '$processor',
           graphic_card= '$graphic_card',
           ram = '$ram',
           storage = '$storage',
           harga = '$harga'
           WHERE id = '$id'
           ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    // cek user sudah ada belom
    $result =  mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('user name sudah di gunakan');
        </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // insert ke table user
    $query = "INSERT INTO user 
     VALUES
     (null, '$username','$password')
     ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
