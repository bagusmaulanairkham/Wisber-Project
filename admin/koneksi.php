<?php

$conn = mysqli_connect("localhost", "root", "", "wisber");

if (!$conn) {
    echo "Koneksi Gagal";
    die();
// } else {
//     echo "Koneksi Berhasil";
}

?>