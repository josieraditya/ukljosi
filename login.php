<?php
session_start();
include 'koneksi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

$login = mysqli_query ($mysqli, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location:admin/admin.php");

    } else if($data['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        header("location:projek.php");

    } else {
        header("location:login1.php");
    }
} else {
    header("location:login1.php?pesan=gagal");
}