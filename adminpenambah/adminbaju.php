<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="adminbaju.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Baju</title>
</head>
<body>
    <form action="koneksi.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br>
        <button type="submit">Upload</button>
        <button type="button" onclick="history.back()">Kembali</button>
    </form>
</body>
</html>
