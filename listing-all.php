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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
        <div class="col-md-2 tab-hide">

        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
        </div>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li></li>
                    <li>
                        <h5><?php echo $_SESSION['username']; ?><span style="color: #eee">مدیر مجموعه انقلاب</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== RIGHT MENU ==-->
            <?php require('rightMenu.php') ?>
            <!--== End RIGHT MENU ==-->
        <div class="sb2-2">

            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>ویرایش اطلاعات کارمندان</h4>
                                <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                        class="material-icons">more_vert</i></a>
                                <ul id="dr-users" class="dropdown-content">
                                    <li><a href="#!">Add New</a>
                                    </li>
                                    <li><a href="#!">Edit</a>
                                    </li>
                                    <li><a href="#!">Update</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                    </li>
                                    <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                    </li>
                                </ul>

                                <!-- Dropdown Structure -->

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
                                            <th style="text-align: center;">سمت</th>
                                            <th style="text-align: center;">ویرایش</th>
                                            <th style="text-align: center;">حذف</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        require("db.php");
                                        $query = "SELECT name, father, personalcode, melicode, birth, type, number, address, job, id, password FROM crew;";
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
                                            echo "<td>" . $row['job'] . "</td>";
                                            echo '<td><a class="sb2-2-1-edit" href="edit.php?v0=' . $row[0] .
                                                "&v1=".$row[1]."&v2=".$row[2]."&v3=".$row[3]."&v4=".$row[4]."&v5=".$row[5].
                                                "&v6=".$row[6]."&v7=".$row[7]."&v8=".$row[8]."&v9=".$row[9]."&v10=".$row[10].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>';

                                            echo "<td>" . '<a href="upload-delete.php?v0=' . $row[9] .'" class="sb2-2-1-edit">' . '<i class="fa fa-trash-o" aria-hidden="true"></i></a>'
                                                . "</td>";

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