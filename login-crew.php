<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staff dashboard</title>
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
                    <input  name="personalcode" id="personalcode" type="text" class="validate">
                    <label for="username" style="text-align: center;">Employee number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" id="password" type="password" class="validate">
                    <label for="password" style="text-align: center;">Password</label>
                </div>
            </div>
            <div class="row" style="">
                <div class="input-field col s12" style="text-align: center;">
                    <input style "font-size: 16px!important;" name="submit1" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Login Ticket"/>
                    <div class="input-field col s12" style="text-align: center;"></div>
<input style "font-size: 16px!important;" name="submit2" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Login Package"/>
                </div><div> 

                <div class="input-field col s12" style="text-align: center;">
                    <input name="submit3" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Register"/>
                    <input name="submit4" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Login Buffet"/>
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
if (isset($_POST['submit1'])) {
    $personalcode = $_POST['personalcode'];
    $password = $_POST['password'];
    $query = "SELECT personalcode, password FROM crew WHERE personalcode='$personalcode' AND password='$password' AND job='فروش بلیت'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['personalcode'] = $personalcode;
        header("Location: crew-ticket/index.php");
    }
}
else if (isset($_POST['submit2'])) {
    $personalcode = $_POST['personalcode'];
    $password = $_POST['password'];
    $query = "SELECT personalcode, password FROM crew WHERE personalcode='$personalcode' AND password='$password' AND job='فروش پکیج'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['personalcode'] = $personalcode;
        header("Location: crew-pack/index.php");
    }
}
else if (isset($_POST['submit3'])) {
    $personalcode = $_POST['personalcode'];
    $password = $_POST['password'];
    $query = "SELECT personalcode, password FROM crew WHERE personalcode='$personalcode' AND password='$password' AND job='ثبت نام'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['personalcode'] = $personalcode;
        header("Location: crew-class/index.php");
    }
}
else if (isset($_POST['submit4'])) {
    $personalcode = $_POST['personalcode'];
    $password = $_POST['password'];
    $query = "SELECT personalcode, password FROM crew WHERE personalcode='$personalcode' AND password='$password' AND job='بوفه'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['personalcode'] = $personalcode;
        header("Location: crew-buffet/index.php");
    }
}
?>
</body>

</html>