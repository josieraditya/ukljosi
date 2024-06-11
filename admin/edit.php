<?php

include("koneksi.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $result = mysqli_query($mysqli,"UPDATE user SET username='$username', password='$password', level='$level' WHERE id=$id");
    header('location:admin.php');
} else {
    die("Akses Dilarang..");
}
