<?php
require('db.php');
if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $price = $_POST['price'];
    $ids = $_POST['id'];

    $query="UPDATE package SET type='$type', price='$price' WHERE id='$ids'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($result)
        header("Location: index.php");
}
?>