<?php
require 'koneksi.php';
$tanggal_pembelian = $_POST['tanggal_pembelian'];
$nama_barang = $_POST['nama_barang'];
$nomor_wa = $_POST['nomor_wa'];
$warna = $_POST['warna'];
$ukuran= $_POST['ukuran'];
$model= $_POST['model'];
$jumlah_barang= $_POST['jumlah_barang'];

$query_sql = "INSERT INTO transaksi (tanggal_pembelian, nama_barang, nomor_wa, warna, ukuran, model, jumlah_barang)
 VALUES ('$tanggal_pembelian','$nama_barang', '$nomor_wa', '$warna', '$ukuran','$model', '$jumlah_barang')";

    if(mysqli_query($mysqli, $query_sql)) {
        header("location:../projek.php");
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($mysqli);
    }