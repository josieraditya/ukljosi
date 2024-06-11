<?php
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "toko baju"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses penghapusan data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM baju WHERE id_baju=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: admin.php"); // Redirect setelah penghapusan
}

// Ambil data dari database
$sql = "SELECT * FROM baju";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Daftar Baju</title>
</head>
<body>
    <h1>Daftar Baju</h1>
    <table border="1">
    <a href="adminbaju.php"><button>tambahkan</button></a>
    <a href="../admin/admin.php"><button>back</button></a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id_baju']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="100"></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id_baju']; ?>">Edit</a>
                <a href="admin.php?delete=<?php echo $row['id_baju']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
