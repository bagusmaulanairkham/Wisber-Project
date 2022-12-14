<?php

include_once ("koneksi.php");

$nama_desa = $_POST['nama_desa'];
$email = $_POST['email'];
$password = $_POST['password'];
$Konfirmasi=$_POST['KonfirmasiPassword'];

$query = "INSERT INTO user (nama_desa, email, password) 
        VALUE ('$nama_desa', '$email', '$password') ";

$hasil = mysqli_query ($conn, $query);

if ($password != $Konfirmasi) {  
    echo "<script>alert('Password tidak sama!');window.location='formuser.php';</script>";
}elseif($hasil) {
    echo "<script>alert('Data berhasil disimpan');window.location='datauser.php';</script>";
    
} 
else {
    echo "<script>alert('Data gagal');window.location='formuser.php';</script>";
}

?>


