<?php session_start();
if (isset($_SESSION['username'])) {
// logged in
?>
<!DOCTYPE html>
<html lang="en">
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
                                    <h4>افزودن کارمند جدید</h4>

                                </div>
                                <div class="tab-inn">
                                    <form method="post" action="upload-crew.php">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="name" type="text" class="validate" required>
                                                <label style="text-align: center; for=" last_name">نام</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="father" type="text" class="validate" required>
                                                <label style="text-align: center; for=" first_name">نام پدر</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="personalcode" type="text" class="validate" required>
                                                <label style="text-align: center; for=" cphone">شماره پرسنلی</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="melicode" type="text" class="validate" required>
                                                <label style="text-align: center;" for="phone">شماره ملی</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="birth" type="date" class="validate" required>
                                                <label style="text-align: center;" for=" country">تاریخ تولد</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="type" type="text" class="validate" required>
                                                <label style="text-align: center; for=" city">شیفت</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="telnum" type="text" class="validate" required>
                                                <label style="text-align: center; for=" phone">شماره</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="job" type="text" class="validate" required>
                                                <label style="text-align: center; for=" password">سمت</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="address" type="text" class="validate" required>
                                                <label style="text-align: center; for="address">آدرس</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="password" type="text" class="validate" required>
                                                <label style="text-align: center; for=" password">گذرواژه</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12" style="text-align: center;">
                                                <input name="submit" type="submit" value="ذخیره"
                                                       class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
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