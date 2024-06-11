<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO user (username, password, level)
VALUES ('$username', '$password', 'user')";

    if(mysqli_query($mysqli, $query_sql)) {
        header("location:login1.php");
    } else {
        echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
    }