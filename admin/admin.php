<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="zhafif">
        <a href="../register1.php"><button>Add</button></a>
        <a href="join.php"><button>See</button></a>
        <a href="../login1.php"><button>Kembali</button></a>
        <a href="../adminpenambah/admin.php"><button>baju</button></a>
        <a href="../login1.php"><button>logout</button></a>
    </div>
    <table border="1" class="table" id="user">
   
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Tools</th>
        </tr>
        <?php
        include ('koneksi.php');

        $query_mysql = mysqli_query($mysqli, "SELECT * FROM user ") or die(mysqli_error($mysqli));
        $nomor = 1;

        while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a>
                    <a href="editpage.php?id=<?php echo $data['id'];?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
