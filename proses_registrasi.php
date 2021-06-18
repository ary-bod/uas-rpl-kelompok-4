<?php
include 'koneksi.php';

$email=$_POST['email'];
$nama_pelamar=$_POST['nama_pelamar'];
$password=$_POST['password'];

    $query=mysqli_query($koneksi,"INSERT INTO akun_pelamar(email, nama_pelamar, \npassword) 
    VALUES ('$email', '$nama_pelamar','$password')")
    or die(mysqli_error($koneksi));

    if ($query){
        header("Location:akun.php);
    }else{
        echo"Gagal Input Data";
    }

?>