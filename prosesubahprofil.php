<?php

include_once ("koneksi.php");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['newpassword'];

$query = "UPDATE admin SET email='$email', password='$password'";

$hasil = mysqli_query ($conn, $query);

if ($hasil) {
    header ('Location:profil.php');
} else {
    echo "data gagal";
}

?>