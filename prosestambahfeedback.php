<?php

include_once ("koneksi.php");
$id = $_GET['id'];

$feedback = $_POST['feedback'];

$query = "UPDATE pengaduan SET feedback='$feedback'";

$hasil = mysqli_query ($conn, $query);

if ($hasil) {
    header ('Location:index.php');
} else {
    echo "data gagal";
}

?>