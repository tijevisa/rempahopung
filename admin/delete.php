<?php
include "../config.php";



// Handle form submission
if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    // Delete data
    $sql = "DELETE FROM `rempah` WHERE `id`='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Rempah</title>
</head>
<body>
    <h1>Delete Rempah</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br><br>
        <input type="submit" name="submit" value="Delete">
    </form>
</body>
</html>
