<?php
require('db.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $personalcode = $_POST['personalcode'];
    $melicode = $_POST['melicode'];
    $birth = $_POST['birth'];
    $type = $_POST['type'];
    $number = $_POST['telnum'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $ids = $_POST['id'];
    $password = $_POST['password'];

    $query="UPDATE crew SET name='$name', father='$father', personalcode='$personalcode', melicode='$melicode', birth='$birth',
              type='$type', number='$number', address='$address', job='$job', password='$password' WHERE id='$ids'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($result) {
        //$_SESSION['personalcode'] = $personalcode;
        // REDIRECT Admin TO INDEX.PHP
        header("Location: index.php");
    }
}

function test_input ($data)
{
    //$data = trim($data); // removes whitespace and other predefined characters from both sides of a string
    //$data = stripslashes($data); //removes backslashes
    //$data = htmlspecialchars($data); // converts some predefined characters to HTML entities. ( & (ampersand) becomes &amp; )
    //return $data;
}


?>