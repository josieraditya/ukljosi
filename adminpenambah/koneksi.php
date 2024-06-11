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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    // Proses upload file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi file image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Move file to target directory
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }

    // Save file path in the database
    $sql = "INSERT INTO baju (name, description, price, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssds", $name, $description, $price, $target_file);

    if ($stmt->execute()) {
        echo "Baju berhasil diunggah!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
