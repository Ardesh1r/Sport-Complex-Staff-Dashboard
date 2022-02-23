<?php
require('db.php');
$ids = $_GET['v0'];
$query = "DELETE FROM crew WHERE id='$ids'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($result)
    header("Location: index.php");
?>