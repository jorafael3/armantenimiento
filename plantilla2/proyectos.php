<?php
include("header.php");
$ARRAY_PROYECTOS = proyectos();

?>

<div id="banner-area" class="banner-area" style="background-image:url(assets/images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Proyectos</h1>

                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

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
                                        <p class="project-cat"><?php echo $row["CATEGORIA_TEXT"] ?></p>
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

         

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->
<?php
include("footer.php");
?>