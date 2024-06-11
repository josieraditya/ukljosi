<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="join.css?v=<?php echo time(); ?>">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <table border="1" class="table" id="user">
        <tr>
            <th>No</th>
            <th>Tanggal pembelian</th>
            <th>Nomor WA</th>
        </tr>
        <?php
        // Menggunakan koneksi mysqli atau PDO yang benar
        include('koneksi.php');

        // Select data dari tabel user
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM transaksi") or die(mysqli_error($mysqli));

        // Variabel nomor dimulai dari
        $nomor = 1;

        // Loop untuk menampilkan data dalam tabel
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['tanggal_pembelian']; ?></td>
                <td><?php echo $data['nomor_wa']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="admin.php"><button><i data-feather="arrow-left"></i> Kembali</button></a>
    <script>
        feather.replace();
    </script>
</body>
</html>
