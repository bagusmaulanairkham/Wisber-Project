<!-- MASIYH BELOM FIX -->

<?php

include_once ("koneksi.php");

$nama_desa = $_POST['nama_desa'];
$email = $_POST['email'];
$penanggung_jawab = $_POST['penanggung_jawab'];
$kepala_desa = $_POST['kepala_desa'];
$password = $_POST['password'];
$Konfirmasi=$_POST['KonfirmasiPassword'];

$query = "INSERT INTO desa (nama_desa, kepala_desa) 
VALUE ('$nama_desa', '$kepala_desa')";
$query2 = "INSERT INTO user (penanggung_jawab_desa, email, password) 
VALUE ('$penanggung_jawab', '$email', '$password')";

$hasil = mysqli_query ($conn, $query);
$hasil2 = mysqli_query ($conn, $query2);

if ($password != $Konfirmasi) {  
    echo "<script>alert('Password tidak sama!');window.location='formuser.php';</script>";
}

elseif($hasil and $hasil2) {
    $query = "INSERT INTO desa (nama_desa, kepala_desa) 
    VALUE ('$nama_desa', '$kepala_desa')";
    $query2 = "INSERT INTO user (penanggung_jawab_desa, email, password) 
    VALUE ('$penanggung_jawab', '$email', '$password')";
    echo "<script>alert('Data berhasil disimpan');window.location='datauser.php';</script>";    
}

else {
    echo "<script>alert('Data gagal');window.location='formuser.php';</script>";
}

?>