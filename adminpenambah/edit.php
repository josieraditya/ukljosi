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

$id = $_GET['id'];
$sql = "SELECT * FROM baju WHERE id_baju=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $row['image']; // Default image path

    if ($_FILES["image"]["name"]) {
        // Proses upload file baru
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi file image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            die("File is not an image.");
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            die("Sorry, file already exists.");
        }

        // Check file size (limit 5MB)
        if ($_FILES["image"]["size"] > 5000000) {
            die("Sorry, your file is too large.");
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }

        // Move file to target directory
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            die("Sorry, there was an error uploading your file.");
        }

        // Update image path
        $image = $target_file;
    }

    $sql = "UPDATE baju SET name=?, description=?, price=?, image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsi", $name, $description, $price, $image, $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="edit.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Baju</title>
</head>
<body>
    <h1>Edit Baju</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?php echo $row['price']; ?>" required><br>
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*"><br>
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="100"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
