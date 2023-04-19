<?php
include "../config.php";


// Check if the form is submitted
if(isset($_POST['submit'])) {


    // Get the form data
    $nama_rempah = $_POST['nama_rempah'];
    $jenis_rempah = $_POST['jenis_rempah'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $image = $_POST['image'];

    // Insert the data into the rempah table
    $sql = "INSERT INTO rempah (nama_rempah, jenis_rempah, stok, harga, image) VALUES ('$nama_rempah', '$jenis_rempah', '$stok', '$harga', '$image')";
    if(mysqli_query($conn, $sql)) {
        echo 'Data inserted successfully!';
    } else {
        echo 'Error inserting data: ' . mysqli_error($conn);
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Rempah</title>
</head>
<body>
    <h1>Add Rempah</h1>
    <form action="insert.php" method="post">
        <label for="nama_rempah">Nama Rempah:</label>
        <input type="text" name="nama_rempah" required><br><br>
        <label for="jenis_rempah">Jenis Rempah:</label>
        <input type="text" name="jenis_rempah" required><br><br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" required><br><br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" required><br><br>
        <label for="image">Image:</label>
        <input type="text" name="image" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
