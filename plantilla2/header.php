<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>ArMantnimientos</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="ArMantenimientos">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="">
  <meta name=generator content="">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="assets/img/logo/logoarmantenimientosa.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="assets/plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="assets/css/style.css">
  <?php
  include("datos.php");

  $ARRAY_RUTAS = RUTAS();
  $SERVICIOS = Servicios()[0];
  $INFO = INDEX()[1][0];

  ?>

</head>

<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
              <li><i class="fas fa-map-marker-alt"></i>
                <p class="info-text"><?php echo $INFO["DIRECCION"] ?></p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a title="Facebook" href="<?php echo $INFO["FACEB"] ?>">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="<?php echo $INFO["TIK"] ?>">
                  <span class="social-icon"><i class="fab fa-tiktok"></i></span>
                </a>
                <a title="Instagram" href="<?php echo $INFO["INSTA"] ?>">
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
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
      <div class="bg-white">
        <div class="container">
          <div class="logo-area">
            <div class="row align-items-center">
              <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.php">
                  <img loading="lazy" src="assets/img/logo/logoarmantenimientosa.png" alt="Constra">
                </a>
              </div><!-- logo end -->

              <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <p class="info-box-title">Llamanos</p>
                        <p class="info-box-subtitle"><?php echo $INFO["TELF"] ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <p class="info-box-title">Email</p>
                        <p class="info-box-subtitle"><?php echo $INFO["EMAIL"] ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                        <p class="info-box-title">Certificado</p>
                        <p class="info-box-subtitle"><?php echo $INFO["CERTIFICADO"] ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="<?php echo $INFO["WHATS"] ?>" target="_blank">Obten un presupuesto</a>
                  </li>
                </ul><!-- Ul end -->
              </div><!-- header right end -->
            </div><!-- logo area end -->

          </div><!-- Row end -->
        </div><!-- Container end -->
      </div>

      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">

                    <?php
                    $con = 0;
                    foreach ($ARRAY_RUTAS as $row) {
                      $active = "active";
                      if ($con != 0) {
                        $active = "";
                      }
                    ?>
                      <li class="nav-item dropdown <?php echo $active  ?>">
                        <a href="<?php echo $row["LINK"]  ?>" class="nav-link"><?php echo $row["NOMBRE"]  ?></a>
                      </li>
                    <?php
                      $con++;
                    }
                    ?>

                  </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->

        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>