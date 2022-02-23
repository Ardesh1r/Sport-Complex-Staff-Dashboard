<!DOCTYPE html>
<html lang="en">

<head>
    <title>Management dashboard</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css"/>
</head>

<body>
<div class="blog-login">
    <div class="blog-login-in">
        <form method="post" action="">
            <img src="images/logo.png" alt=""/>

            <div class="row">
                <div class="input-field col s12">
                    <input  name="username" id="username" type="text" class="validate">
                    <label for="username" style="text-align: center;">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" id="password" type="password" class="validate">
                    <label for="password" style="text-align: center;">Password</label>
                </div>
            </div>
            <div class="row" style="width: 100%;">
                <div class="input-field col s12" style="text-align: center;">
                    <input name="submit" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Login"/>
                </div>
            </div>
        </form>
    </div>
</div>

<!--======== SCRIPT FILES =========-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
<?php
session_start();
require('db.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$query = "SELECT username, password FROM boss WHERE username='$username' and password='$password'";
    //$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    //$rows = mysqli_num_rows($result);
    //if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    //}
}
?>
</body>

</html>