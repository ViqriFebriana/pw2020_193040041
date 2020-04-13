<?php
// fungsi untuk melakukan koneksi ke data base
function koneksi() {
    $conn = mysqli_connect("localhost", "root","") or die("koneksi ke Db gagal");
    mysqli_select_db($conn, "tubes_193040041") or die("Database salah!");

    return $conn;

}

// fungsi untuk melakukan query ke data base
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sql");

    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    }
?>