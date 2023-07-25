<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AR Mantenimientos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logoarmantenimientosa.png">
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
    $TOP_BAR = CABECERA_TOP_BAR()[0];
    // var_dump($TOP_BAR[0]["FACEBOOK"]);
    $CLIENTES = CLIENTES();
    $ARRAY_SERVICIO = Servicios()[0];
    $ARRAY_PROYECTOS= proyectos();

    include_once("libs_p2.php");

    ?>

    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">

        <div id="header" class="htc-header bg__theme">
            <!-- Start Header Top -->
            <div id="top-bar" class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <ul class="top-info text-center text-md-left">
                                <li><i class="fas fa-clock"></i>
                                    <p class="info-text"><?php echo $TOP_BAR["HORARIO"] ?></p>
                                </li>
                            </ul>
                        </div>
                        <!--/ Top info end -->

                        <div class="col-lg-6 col-md-12 top-social text-center text-md-right">
                            <ul class="list-unstyled">
                                <li>
                                    <a title="Facebook" href="<?php echo $TOP_BAR["FACEBOOK"] ?>">
                                        <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                    </a>
                                    <a title="Twitter" href="<?php echo $TOP_BAR["TIKTOK"] ?>">
                                        <span class="social-icon"><i class="fab fa-tiktok"></i></span>
                                    </a>
                                    <a title="Instagram" href="<?php echo $TOP_BAR["INSTAGRAM"] ?>">
                                        <span class="social-icon"><i class="fab fa-instagram"></i></span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                        <!--/ Top social end -->
                    </div>
                    <!--/ Content row end -->
                </div>
                <!--/ Container end -->
            </div>
            <!-- <div class="htc__header__top bg__theme">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <ul class="heaher__top__left">
                                <li class="fw-bold" style="font-size: 14px;font-weight: bold;">
                                    <i class="fa fa-clock-o" style="font-size: 20px;font-weight: bold;"></i>
                                    <?php echo $TOP_BAR[0]["HORARIO"] ?>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="header__top__right">

                                <div class="heaher__top__btn">
                                    <ul class="header__top__right">
                                        <li><a target="_blank" href="<?php echo $TOP_BAR[0]["FACEBOOK"] ?>"><i style="font-size: 18px;" class="fas fa-chevron-left" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $TOP_BAR[0]["TIKTOK"] ?>"><i style="font-size: 18px;" class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="<?php echo $TOP_BAR[0]["INSTAGRAM"] ?>"><i style="font-size: 18px;" class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Header Top -->
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header bg__cat--1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="log">
                                <a href="index.php">
                                    <img style="width: 160px; height: 120px;" src="assets/img/logo/logoarmantenimientosa.png" alt="logo image">
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