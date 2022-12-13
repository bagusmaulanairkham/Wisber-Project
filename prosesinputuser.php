<?php

include_once ("koneksi.php");

$nama_desa = $_POST['nama_desa'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user (nama_desa, email, password) 
        VALUE ('$nama_desa', '$email', '$password') ";

$hasil = mysqli_query ($conn, $query);

if ($hasil) {
    header ('Location:datauser.php');
} else {
    echo "data gagal";
}

?>


