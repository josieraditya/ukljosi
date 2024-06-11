<?php
// Menghubungkan ke database
include('koneksi.php'); 


$id = $_GET['id'];


$query = "DELETE FROM user WHERE id='$id'"; 
$result = mysqli_query($mysqli, $query);

if ($result) {
    
    header("Location: admin.php"); 
} else {
   
    echo "Error deleting record: " . mysqli_error($mysqli);
}
?>
