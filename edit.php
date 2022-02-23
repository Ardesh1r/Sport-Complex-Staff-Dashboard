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
            <div class="top-not-cen">
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o"
                                                             aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o"
                                                             aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                    src="images/user/6.png" alt=""/>My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin
                        Setting</a>
                </li>
                <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i>
                        Listings</a>
                </li>
                <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i>
                        Hotels</a>
                </li>
                <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i>
                        Tour Packages</a>
                </li>
                <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered"
                                                                     aria-hidden="true"></i> Events</a>
                </li>
                <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                </li>
                <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add
                        New User</a>
                </li>
                <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                </li>
                <li class="divider"></li>
                <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row" dir="rtl" style="direction: rtl;">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="images/placeholder.jpg" alt="">
                    </li>
                    <li>
                        <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
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
                                    <h4>ویرایش کارمندان</h4>

                                </div>
                                <div class="tab-inn">
                                    <form method="post" action="upload-edit.php">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="name" type="text" class="validate"
                                                       value="<?php echo $_GET['v0']; ?>" required>
                                                <label style="text-align: center; for=" last_name"></label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="father" type="text" class="validate"
                                                       value="<?php echo $_GET['v1']; ?>" required>
                                                <label style="text-align: center; for=" first_name"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="personalcode" type="text" class="validate"
                                                       value="<?php echo $_GET['v2']; ?>" required>
                                                <label style="text-align: center; for=" cphone"></label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="melicode" type="text" class="validate"
                                                       value="<?php echo $_GET['v3']; ?>" required>
                                                <label style="text-align: center;" for="phone"></label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="birth" type="date" class="validate"
                                                       value="<?php echo $_GET['v4']; ?>" required>
                                                <label style="text-align: center;" for=" country"></label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="type" type="text" class="validate"
                                                       value="<?php echo $_GET['v5']; ?>" required>
                                                <label style="text-align: center; for=" city"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="telnum" type="text" class="validate"
                                                       value="<?php echo $_GET['v6']; ?>" required>
                                                <label style="text-align: center; for=" phone"></label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="job" type="text" class="validate"
                                                       value="<?php echo $_GET['v7']; ?>" required>
                                                <label style="text-align: center; for=" password"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="address" type="text" class="validate"
                                                       value="<?php echo $_GET['v8']; ?>" required>
                                                <label style="text-align: center; for="address"></label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="password" type="text" class="validate"
                                                       value="<?php echo $_GET['v10']; ?>" required>
                                                <label style="text-align: center; for=" password"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6" style="visibility: hidden;">
                                                <input name="id" type="text" class="validate"
                                                       value="<?php echo $_GET['v9']; ?>" required>
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

</body>
</html>