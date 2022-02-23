<?php
session_start();
require("db.php");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT name, username, password FROM boss WHERE username='$username', password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_row($result);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['name'] = $row[0];
        header("Location: index.php");
    }
    else {
        echo "نام کاربری / گذرواژه اشتباه است.";
        header("Location: login-boss.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ورود</title>
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
    <link rel="stylesheet" href="css/materialize.css" />
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form method="post" action="login-boss.php">
                <img src="images/logo.png" alt="" />
                <div class="row" style="width: 100%;">
                    <div class="input-field col s12" style="text-align: center;">
                        <input style="font-size: 22px;" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Manager Login" />
                    </div>
                </div>
                </form>
            <form method="post" action="login-crew.php">
                <div class="row" style="width: 100%;">
                    <div class="input-field col s12" style="text-align: center;">
                        <input style="font-size: 22px;" type="submit" class="waves-effect waves-light btn-large btn-log-in" value="Staff Login" />
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
</body>

</html>