<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AR Mantenimientos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Carousel  main css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
     -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- This core.css file conteassets/nts all plugings css file. -->
    <link rel="stylesheet" href="assets/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="assets/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/player.css">

    <?php include("datos.php");

    $ARRAY_RUTAS = RUTAS();


    ?>

    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


    <div class="wrapper">
        <div id="header" class="htc-header">
            <!-- Start Header Top -->
            <div class="htc__header__top bg__theme">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <ul class="heaher__top__left">
                                <li class="fw-bold" style="font-size: 14px;font-weight: bold;">
                                    <i class="fa fa-clock-o" style="font-size: 20px;font-weight: bold;"></i>
                                    7.30 AM - 9.30 PM
                                </li>
                                <li style="font-size: 14px;font-weight: bold;">
                                    <a href="#" class="fw-bold">
                                        <i style="font-size: 20px;font-weight: bold;" class="fa fa-phone"></i>
                                        (593) 0969786231</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="header__top__right">
                        <ul class="login-register">
                            <li><a href="login-register.html">LOGIN</a></li>
                            <li class="separator">/</li>
                            <li><a href="login-register.html">REGISTER</a></li>
                        </ul>
                        <div class="heaher__top__btn">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div> -->
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/sinply-construction.png" alt="logo image">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <?php
                                    foreach ($ARRAY_RUTAS as $row) {
                                    ?>
                                        <li><a href="<?php echo $row["LINK"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>

                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <?php
                                        foreach ($ARRAY_RUTAS as $row) {
                                        ?>
                                            <li><a href="<?php echo $row["LINK"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-md-2 col-sm-6 hidden-xs">
                    <div class="htc__header__search">
                        <input type="text" placeholder="SEARCH">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div> -->
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </div>