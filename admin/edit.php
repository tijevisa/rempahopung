<?php
include "../config.php";


// Get data for the selected row
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `rempah` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Error: Invalid ID";
        exit();
    }
}

// Handle form submission
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_rempah = $_POST['nama_rempah'];
    $jenis_rempah = $_POST['jenis_rempah'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $image = $_POST['image'];

    // Update data
    $sql = "UPDATE `rempah` SET `nama_rempah`='$nama_rempah', `jenis_rempah`='$jenis_rempah', `stok`='$stok', `harga`='$harga', `image`='$image' WHERE `id`='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Rempah</title>
</head>
<body>
    <h1>Edit Rempah</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama_rempah">Nama Rempah:</label>
        <input type="text" name="nama_rempah" value="<?php echo $row['nama_rempah']; ?>" required><br><br>
        <label for="jenis_rempah">Jenis Rempah:</label>
        <input type="text" name="jenis_rempah" value="<?php echo $row['jenis_rempah']; ?>" required><br><br>
        <label for="stok">Stok:</label>
        <input type="text" name="stok" value="<?php echo $row['stok']; ?>" required><br><br>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>
        <label for="image">Image:</label>
        <input type="text" name="image" value="<?php echo $row['image']; ?>" required><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>