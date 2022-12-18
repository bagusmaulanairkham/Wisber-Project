<?php

include_once ("koneksi.php");

$id = $_POST['id'];
$nama_desa = $_POST['nama_desa'];
$email = $_POST['email'];
$password = $_POST['password'];
$Konfirmasi=$_POST['KonfirmasiPassword'];

$query = "UPDATE user SET nama_desa='$nama_desa', email='$email', password='$password' WHERE id_user=$id";

$hasil = mysqli_query ($conn, $query);

if ($hasil) {
    header ('Location:datauser.php');
} else {
    echo "data gagal";
}

?>