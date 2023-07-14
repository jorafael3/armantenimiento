<?php
include("header.php");

if (isset($_GET["ID"])) {

    $ID = $_GET["ID"];
    $ARRAY_SERVICIOS = Servicios()[0];
    $ARRAY = $ARRAY_SERVICIOS[$ID];
    //var_dump(($ARRAY["IMAGENES_PRINCIPALES"]));
    // var_dump($FILTRADO);
} else {
    include("footer.php");
    die();
}
?>


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">Servicios</h3>
                        <ul class="nav service-menu">
                            <?php
                            foreach ($ARRAY_SERVICIOS as $row) {
                                $activo = "";
                                if ($row["ID"] == $ID) {
                                    $activo = "active";
                                }
                            ?>
                                <li class="<?php echo $activo ?>"><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                            <?php
                            }
                            ?>

                        </ul>
                    </div><!-- Widget end -->



                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0"><?php echo $ARRAY["NOMBRE"] ?></h2>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?php echo $ARRAY["DESCRIPCION"] ?>
                            </p>
                        </div><!-- col end -->
                    </div><!-- 1st row end-->

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        <?php
                        for ($i = 0; $i < count($ARRAY["IMAGENES_PRINCIPALES"]); $i++) {
                            // echo $FILTRADO["IMAGENES_PRINCIPALES"][$i];
                        ?>
                            <div class="item">
                                <img loading="lazy" class="img-fluid" src="<?php echo $ARRAY["IMAGENES_PRINCIPALES"][$i] ?>" alt="project-slider-image" />
                            </div>
                        <?php
                        }
                        ?>
                    </div><!-- Page slider end -->

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="column-title-small">descripcion2</h3>

                            <p>
                                <?php echo $ARRAY["DESCRIPCION2"] ?>
                            </p>
                            <ul class="list-arrow">
                                <li>Partnership Strategy tristique eleifend.</li>
                                <li>Opporutnity to work with amet elit a.</li>
                                <li>Saving Time to Deal with commodo iaculis.</li>
                                <li>Leadership skills to manage erat volutpat.</li>
                                <li>Cut cost without sacrificing dolore magna.</li>
                                <li>Automate your business elis tristique.</li>
                            </ul>
                        </div>

                        <div class="col-md-6 mt-5 mt-md-0">
                            <h3 class="column-title-small">Detalles</h3>

                            <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?php echo $ARRAY["DETALLE1"] ?>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <?php echo $ARRAY["DETALLE1_DESC"] ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <?php echo $ARRAY["DETALLE2"] ?>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <?php echo $ARRAY["DETALLE2_DESC"] ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <?php echo $ARRAY["DETALLE3"] ?>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#construction-accordion">
                                        <div class="card-body">
                                            <?php echo $ARRAY["DETALLE3_DESC"] ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Accordion end -->
                        </div>
                    </div>
                    <!--2nd row end -->

                    <div class="gap-40"></div>

                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">Interesado en este servicio</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" target="_blank" href=" <?php echo $INFO["WHATS"] ?>">Contactanos</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->

                </div><!-- Content inner end -->
            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
include("footer.php");
?>