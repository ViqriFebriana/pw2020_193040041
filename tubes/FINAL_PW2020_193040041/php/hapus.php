<?php
// wajib login
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}


require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("location: admin.php");
    exit;
}

// menggambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'admin.php';
    </script>";
} else {
    echo "data gagal dihapus";
}
