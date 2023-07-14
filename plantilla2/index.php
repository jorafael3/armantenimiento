<?php
include("header.php");
$ARRAY_SERVICIO = Servicios()[0];
$ARRAY_SERVICIO_ADICIONALES = Servicios()[1];
$ARRAY_PROYECTOS = proyectos();
$CLIENTES = INDEX()[0];

?>

<div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg1.jpg)">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">8 año de excelencia</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">industria de la construccion</h3>
                        <p data-animation-in="slideInLeft" data-duration-in="1.2">
                            <a href="servicios.php" class="slider btn btn-primary">Nuestros servicios</a>
                            <a href="contactos.php" class="slider btn btn-primary border">Contactanos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg2.jpg)">
        <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title-box" data-animation-in="slideInDown">Servicio de clase</h2>
                        <h3 class="slide-title" data-animation-in="fadeIn">Cuando el servicio importa</h3>
                        <h3 class="slide-sub-title" data-animation-in="slideInLeft">tu elección es simple</h3>
                        <p data-animation-in="slideInRight">
                            <a href="servicios.php" class="slider btn btn-primary border">Nuestros servicios</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(assets/images/slider-main/bg3.jpg)">
        <div class="slider-content text-right">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown">Conocenos</h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn">nosotros creemos en la sostenibilidad</h3>
                        <p class="slider-description lead" data-animation-in="slideInRight">nosotros nos ocuparemos</p>
                        <div data-animation-in="slideInLeft">
                            <a href="contactos.php" class="slider btn btn-primary" aria-label="contact-with-us">contactanos</a>
                            <a href="acerca.php" class="slider btn btn-primary border" aria-label="learn-more-about-us">acerca de nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">nosotros tenemos lo que necesitas</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="contact.html"><i class="fab fa-whatsapp" style="font-size: 20px;"></i> Comunicate</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">SOMOS especialistas</h2>
                <h3 class="section-sub-title">NUESTROS SERVICIOS</h3>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($ARRAY_SERVICIO as $row) {
                if ($i < 6) {
            ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" style="width: 300px;height: 300px;" class="w-100" src="<?php echo $row["IMG_BACKGROUND"] ?>" alt="service-image">
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-box-img">
                                    <img style="width: 64px;height: 64px;"  loading="lazy" src="<?php echo $row["ICONO"]  ?>" alt="service-icon" />
                                </div>
                                <div class="ts-service-info">
                                    <h3 class="service-box-title"><a href="<?php echo $row["LINK_DETALLE"] ?>"><?php echo $row["NOMBRE"]  ?></a></h3>
                                    <p><?php echo $row["DESCRIPCION"]  ?>.</p>
                                    <a class="learn-more d-inline-block" href="<?php echo $row["LINK_DETALLE"]  ?>" aria-label="service-details"><i class="fa fa-caret-right"></i>Mas detalles</a>
                                </div>
                            </div>
                        </div><!-- Service1 end -->
                    </div><!-- Col 1 end -->

            <?php
                }
                $i++;
            }
            ?>
            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">Ver Todos los servicios</a>
                </div>
            </div>
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">TAMBIEN OFRECEMOS</h2>
                <h3 class="section-sub-title">SERVICIOS ADICIONALES</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">

                <?php
                $i = 0;
                foreach ($ARRAY_SERVICIO_ADICIONALES as $row) {
                    if ($i <= 3) {
                ?>
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img style="width: 64px; height: 64px;" loading="lazy" src="<?php echo $row["ICONO"] ?>" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#!"><?php echo $row["NOMBRE"]  ?></a></h3>
                                <p><?php echo $row["DESCRIPCION"] ?></p>
                            </div>
                        </div><!-- Service 1 end -->


                <?php
                    }
                    $i++;
                }
                ?>
            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="assets/images/services/service-center.jpg" alt="service-avater-image">
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">

                <?php
                $i = 0;
                foreach ($ARRAY_SERVICIO_ADICIONALES as $row) {
                    if ($i > 3) {
                ?>
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img style="width: 64px; height: 64px;" loading="lazy" src="<?php echo $row["ICONO"] ?>" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#!"><?php echo $row["NOMBRE"]  ?></a></h3>
                                <p><?php echo $row["DESCRIPCION"] ?></p>
                            </div>
                        </div><!-- Service 1 end -->


                <?php
                    }
                    $i++;
                }
                ?>
            </div><!-- Content row end -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">trabajos de excelencia</h2>
                <h3 class="section-sub-title">Proyectos recientes</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">TODOS
                    </label>
                    <label for="commercial">
                        <input type="radio" name="shuffle-filter" id="commercial" value="commercial">SOLDADURA
                    </label>
                    <label for="education">
                        <input type="radio" name="shuffle-filter" id="education" value="education">CONSTRUCCION
                    </label>
                    <label for="government">
                        <input type="radio" name="shuffle-filter" id="government" value="government">CCTV
                    </label>

                </div><!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <?php
                    $i = 0;
                    foreach ($ARRAY_PROYECTOS as $row) {
                    ?>

                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;<?php echo $row["CATEGORIA"] ?>&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="<?php echo $row["IMG_BACKGROUND"] ?>" aria-label="project-img">
                                    <img class="img-fluid" src="<?php echo $row["IMG_BACKGROUND"] ?>" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="<?php echo $row["LINK_DETALLE"] ?>"><?php echo $row["NOMBRE"] ?></a>
                                        </h3>
                                        <p class="project-cat"><?php echo $row["CATEGORIA"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 1 end -->
                    <?php
                        $i++;
                    }
                    ?>
                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">Ver todos lo proyectos</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="facts-wrapper">
            <div class="row">
                <div class="col-md-3 col-sm-6 ts-facts">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="assets/images/icon-image/fact1.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="100">0</span></h2>
                        <h3 class="ts-facts-title">Proyectos realizados</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="assets/images/icon-image/fact2.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="10">0</span></h2>
                        <h3 class="ts-facts-title">Clientes</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="assets/images/icon-image/fact3.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="10">0</span></h2>
                        <h3 class="ts-facts-title">servicios</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="assets/images/icon-image/fact4.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="5">0</span></h2>
                        <h3 class="ts-facts-title">Certificaciones</h3>
                    </div>
                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->



<section class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 mt-5 mt-lg-0">

                <h3 class="column-title">Nuestro clientes</h3>

                <div class="row all-clients">
                    <?php
                    foreach ($CLIENTES as $row) {
                    ?>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!" style="width: 200px;height: 200px;">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $row["IMG"]  ?>" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 1 end -->
                    <?php
                    }
                    ?>

                </div><!-- Clients row end -->

            </div><!-- Col end -->

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Content end -->


<?php
include("footer.php");
?>