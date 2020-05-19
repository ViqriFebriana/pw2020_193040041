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

function upload()
{
    $nama_file = $_FILES['cover']['name'];
    $tipe_file = $_FILES['cover']['type'];
    $ukuran_file = $_FILES['cover']['size'];
    $error = $_FILES['cover']['error'];
    $tmp_file = $_FILES['cover']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //        alert('Pilih gambar terlebih dahulu!')
        //        </script>";
        return 'nophoto.jpg';
    }
    // cek ekstensi file
    $daftar_cover = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_cover)) {
        echo "<script>
           alert('Yang anda pilih bukan gambar!')
           </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
           alert('Yang anda pilih bukan gambar!')
           </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
           alert('Ukuran terlalu besar!')
           </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}
// tambah data
function tambah($data)
{
    $conn = koneksi();

    // $cover = htmlspecialchars($data['cover']);
    $model_laptop =  htmlspecialchars($data['model_laptop']);
    $processor = htmlspecialchars($data['processor']);
    $graphic_card = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);

    // upload gambar
    $cover = upload();
    if (!$cover) {
        return false;
    }

    $query = "INSERT INTO
            elektronik
            VALUES
            (NULL,'$cover','$model_laptop','$processor','$graphic_card','$ram',' $storage',' $harga','$keterangan')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    // menghapus gambar di folder img
    $elektro = query("SELECT * FROM elektronik WHERE id = $id")[0];
    if ($elektro['cover'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $elektro['cover']);
    }



    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $cover_lama = htmlspecialchars($data['cover_lama']);
    $model_laptop =  htmlspecialchars($data['model_laptop']);
    $processor = htmlspecialchars($data['processor']);
    $graphic_card = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);

    $cover = upload();
    if (!$cover) {
        return false;
    }

    if ($cover == 'nophoto.jpg') {
        $cover = $cover_lama;
    }

    $query = "UPDATE elektronik SET
           cover = '$cover',
           model_laptop = '$model_laptop',
           processor  = '$processor',
           graphic_card= '$graphic_card',
           ram = '$ram',
           storage = '$storage',
           harga = '$harga',
           keterangan = '$keterangan'
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

// mencari
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM elektronik
                  WHERE 
             model_laptop LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
