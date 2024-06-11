<?php
include('koneksi.php'); 

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id='$id'"; 
$result = mysqli_query($mysqli, $query);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="editpage.css?v=<?php echo time(); ?>">
</head>
<body>
    <h2>Edit User</h2>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> 
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $data['username']; ?>"><br> 
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" value="<?php echo $data['password']; ?>"><br> 
        <label for="level">Level:</label><br>
        <select id="level" name="level" required>
            <option value="admin" <?php echo ($data['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            <option value="user" <?php echo ($data['level'] == 'user') ? 'selected' : ''; ?>>User</option>
        </select>
        <br>
        <input type="submit" name="simpan" value="Update">
    </form>
</body>
</html>
