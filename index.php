<?php session_start();
if (isset($_SESSION['username'])) {
    // logged in
?>
<!DOCTYPE html>
<html lang="en">
<?php require("db.php"); ?>
<head>
    <title>پنل مدیریت</title>
    <!--== META TAGS ==-->
    <!--<meta charset="utf-8">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index-2.html" class="logo"><img src="images/logo1.png" alt=""/>
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">

        </div>
        <!--== NOTIFICATION ==-->


    </div>
</div>


<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row" dir="rtl">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li></li>
                    <li>
                        <h5><?php echo $_SESSION['username']; ?><span style="color: #eee">مدیر مجموعه انقلاب</span></h5>
                    </li>

                </ul>
            </div>
            <!--== RIGHT MENU ==-->
            <?php require('rightMenu.php') ?>
            <!--== End RIGHT MENU ==-->
        </div>

        <!--== BODY INNER CONTAINER ==-->


        <div class="sb2-2">

            <!--== DASHBOARD INFO ==-->
            <div class="sb2-2-1">
                <h2 style="text-align: center;">پنل مدیریت</h2>

                <div class="db-2">
                    <ul>
                        <li>
                            <div class="dash-book dash-b-1">
                                <h5>تعداد شاگردان</h5>
                                <h4><?php
                                    $query = "SELECT Count(id) FROM class";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_row($result);
                                    echo $row[0];
                                    ?></h4>

                            </div>
                        </li>
                        <li>
                            <div class="dash-book dash-b-2">
                                <h5>فروش بلیت</h5>
                                <h4><?php
                                    $query = "SELECT Count(id) FROM soldtickets";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_row($result);
                                    echo $row[0];
                                    ?></h4>
                            </div>
                        </li>
                        <li>
                            <div class="dash-book dash-b-3">
                                <h5>فروش پکیج</h5>
                                <h4><?php
                                    $query = "SELECT Count(name) FROM userpackages";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_row($result);
                                    echo $row[0];
                                    ?></h4>

                            </div>
                        </li>
                        <li>
                            <div class="dash-book dash-b-4">
                                <h5>تعداد کارمندان</h5>
                                <h4><?php
                                    $query = "SELECT Count(name) FROM crew";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_row($result);
                                    echo $row[0];
                                    ?></h4>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sb2-2-3">
                <div class="row">
                    <!--== Country Campaigns ==-->


                    <!--== Country Campaigns ==-->
                    <div class="col-md-6" style="width: 100%;">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>اطلاعات پکیج های فروخته شده</h4>
                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">نام</th>
                                            <th style="text-align: center;">شماره کارت</th>
                                            <th style="text-align: center;">نوع</th>
                                            <th style="text-align: center;">تاریخ اعتبار</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        require("db.php");
                                        $query = "SELECT name, cardnum, type, expire FROM userpackages;";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['cardnum'] . "</td>";
                                            echo "<td>" . $row['type'] . "</td>";
                                            echo "<td>" . $row['expire'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>اطلاعات کارمندان</h4>

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">نام</th>
                                            <th style="text-align: center;">نام پدر</th>
                                            <th style="text-align: center;">شماره پرسنلی</th>
                                            <th style="text-align: center;">شماره ملی</th>
                                            <th style="text-align: center;">تاریخ تولد</th>
                                            <th style="text-align: center;">شیفت</th>
                                            <th style="text-align: center;">شماره</th>
                                            <th style="text-align: center;">آدرس</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <?php
                                        require("db.php");
                                        $query = "SELECT name, father, personalcode, melicode, birth, type, number, address FROM crew;";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['father'] . "</td>";
                                            echo "<td>" . $row['personalcode'] . "</td>";
                                            echo "<td>" . $row['melicode'] . "</td>";
                                            echo "<td>" . $row['birth'] . "</td>";
                                            echo "<td>" . $row['type'] . "</td>";
                                            echo "<td>" . $row['number'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Latest Activity ==-->
            <div class="sb2-2-3" width="100%">
                <div class="row">
                    <!--== Social Media ==-->
                    <div class="col-md-6" style="width: 100%;">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>اطلاعات سمت کارمندان</h4>

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">نام</th>
                                            <th style="text-align: center;">شماره کارمندی</th>
                                            <th style="text-align: center;">سمت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //require("db.php");
                                        $query = "SELECT name, personalcode, job FROM crew;";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['personalcode'] . "</td>";
                                            echo "<td>" . $row['job'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Ticket and Package Details -->
            <div class="sb2-2-3">
                <div class="row">
                    <!--== Latest Activity ==-->
                    <div class="col-md-6">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>جزئیات بلیت</h4>

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">نوع</th>
                                            <th style="text-align: center;">قیمت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $query = "SELECT type, price FROM ticket;";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['type'] . "</td>";
                                            echo "<td>" . $row['price'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--== Social Media ==-->
                    <div class="col-md-6">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>جزئیات پکیج</h4>

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">نوع</th>
                                            <th style="text-align: center;">قیمت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $query = "SELECT type, price FROM package;";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['type'] . "</td>";
                                            echo "<td>" . $row['price'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--== BOTTOM FLOAT ICON ==-->
<section>
    <div class="fixed-action-btn vertical">
        <a class="btn-floating btn-large red pulse">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
            </li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
            </li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
            </li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
            </li>
        </ul>
    </div>
</section>

<!--======== SCRIPT FILES =========-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
<?php } else header("Location: login-boss.php"); ?>
</body>


</html>