<?php
require('db.php');
if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $price = $_POST['price'];
    $query = "INSERT INTO package (type, price)
                          VALUES ('$type','$price')";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($result)
        header("Location: index.php");
}

?>