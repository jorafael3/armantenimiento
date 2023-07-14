<?php
include("header.php");
$ARRAY_PROYECTOS = proyectos();

if (isset($_GET["ID"])) {

    $ID = $_GET["ID"];
    $ARRAY = $ARRAY_PROYECTOS[$ID];
    $FILTRADO = $ARRAY_PROYECTOS[$ID]["DETALLES_PR"];
    // var_dump($FILTRADO["IMAGENES_PRINCIPALES"]);
    // var_dump($FILTRADO);
} else {
    include("footer.php");
    die();
}
?>

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div id="page-slider" class="page-slider small-bg">

                    <?php
                    for ($i = 0; $i < count($FILTRADO["IMAGENES_PRINCIPALES"]); $i++) {
                        // echo $FILTRADO["IMAGENES_PRINCIPALES"][$i];
                        $active = "active";
                        if ($i != 0) {
                            $active = "";
                        }
                    ?>

                        <div class="item">
                            <img loading="lazy" class="img-fluid" src="<?php echo $FILTRADO["IMAGENES_PRINCIPALES"][$i]  ?>" alt="project-image" />
                        </div>
                    <?php
                    }
                    ?>

                </div><!-- Page slider end -->
            </div><!-- Slider col end -->

            <div class="col-lg-4 mt-5 mt-lg-0">

                <h3 class="column-title mrt-0"><?php echo $ARRAY["NOMBRE"] ?></h3>
                <p><?php echo $ARRAY["NOMBRE_DESC"] ?></p>

                <ul class="project-info list-unstyled">
                    <li>
                        <p class="project-info-label">Cliente</p>
                        <p class="project-info-content"><?php echo $FILTRADO["CLIENTE"] ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Arquitecto</p>
                        <p class="project-info-content"><?php echo $FILTRADO["ARQUITECTO"] ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Localizacion</p>
                        <p class="project-info-content"><?php echo $FILTRADO["LOCALIZACION"] ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Duracion</p>
                        <p class="project-info-content"><?php echo $FILTRADO["DURACION"] ?></p>
                    </li>
                    <li>
                        <p class="project-info-label">Categorias</p>
                        <p class="project-info-content"><?php echo $FILTRADO["CATEGORIAS"] ?></p>
                    </li>

                </ul>

            </div><!-- Content col end -->

            <div class="col-lg-12 mt-5 mt-lg-0 pt-5">
                <h3 class="column-title mrt-0">Descripcion</h3>

                <p>
                    <?php echo $FILTRADO["DESCRIPCION"] ?>
                </p>

            </div><!-- Row end -->

        </div><!-- Row end -->

    </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
include("footer.php");
?>