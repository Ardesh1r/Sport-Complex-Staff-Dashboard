<?php
$server = "localhost";
$admin = "root";
$pass = "";
$db_name = "project_pool";
$conn = mysqli_connect($server, $admin, $pass);

mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET CHARACTER SET 'utf8'");
mysqli_query($conn, "SET character_set_connection = 'utf8'");


mysqli_select_db($conn, $db_name);