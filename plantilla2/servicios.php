<?php
include("header.php");
$ARRAY_SERVICIO = Servicios()[0];

?>

<div id="banner-area" class="banner-area" style="background-image:url(assets/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Servicios</h1>

                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

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
            ?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="assets/images/services/service1.jpg" alt="service-image">
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="assets/images/icon-image/service-icon1.png" alt="service-icon" />
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href=<?php echo $row["LINK_DETALLE"]  ?>><?php echo $row["NOMBRE"]  ?></a></h3>
                                <p><?php echo $row["DESCRIPCION"]  ?>.</p>
                                <a class="learn-more d-inline-block" href="<?php echo $row["LINK_DETALLE"]  ?>" aria-label="service-details"><i class="fa fa-caret-right"></i>Mas detalles</a>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

            <?php
                $i++;
            }
            ?>
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->


<?php
include("footer.php");
?>