<?php include("header.php") ?>


<?php
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

<section class="htc__project__details__page ptb--50 bg__white">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line"><?php echo $ARRAY["NOMBRE"]  ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 ptb--50">
                <div class="htc__single__service">
                    <div class="htc__single__service__tab">
                        <div class="ht-portfolio-pic-show">
                            <div class="ht-portfolio-full-image tab-content">
                                <?php
                                for ($i = 0; $i < count($FILTRADO["IMAGENES_PRINCIPALES"]); $i++) {
                                    // echo $FILTRADO["IMAGENES_PRINCIPALES"][$i];
                                    $active = "active";
                                    if ($i != 0) {
                                        $active = "";
                                    }
                                ?>
                                    <div role="tabpanel" class="tab-pane fade in <?php echo $active ?>" id="img-tab-<?php echo $i + 1 ?>">
                                        <img src="<?php echo $FILTRADO["IMAGENES_PRINCIPALES"][$i]  ?>" alt="full-image">
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                        <!-- Start Small images -->
                        <div class="ht__service__small__image nav nav-tabs clearfix">
                            <ul role="tablist" class="prodict-det-small  clearfix">
                                <?php
                                for ($i = 0; $i < count($FILTRADO["IMAGENES_PRINCIPALES"]); $i++) {
                                    // echo $FILTRADO["IMAGENES_PRINCIPALES"][$i];
                                    $active = "active";
                                    if ($i != 0) {
                                        $active = "";
                                    }
                                ?>


                                    <li role="presentation" class="pot-small-img img-tab-<?php echo $i + 1 ?> <?php echo $active ?>">
                                        <a href="#img-tab-<?php echo $i + 1 ?>" role="tab" data-toggle="tab">
                                            <img src="<?php echo $FILTRADO["IMAGENES_PRINCIPALES"][$i]  ?>" alt="small-image">
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>


                            </ul>
                        </div>
                        <!-- End Small images -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single__project__rightsidebar">
                    <!-- Start Single Item -->
                    <div class="pro__dtl__inner bg__gray">
                        <h2>DETALLES DEL PROYECTO</h2>
                        <div class="pro__dtl__content">
                            <ul class="pro__dtl__list font__bold">
                                <li>CLIENTE :</li>
                                <li>LOCALIZACION :</li>
                                <li>SECTOR :</li>
                                <li>DURACION :</li>
                            </ul>
                            <ul class="pro__dtl__list">
                                <li><?php echo $FILTRADO["CLIENTE"]  ?></li>
                                <li><?php echo $FILTRADO["LOCALIZACION"]  ?></li>
                                <li><?php echo $FILTRADO["SECTOR"]  ?></li>
                                <li><?php echo $FILTRADO["DURACION"]  ?></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Start Single Item -->
                    <!-- <div class="download__project bg__gray">
                        <h2><a href="#">DOWNLOADPROJECT REPORT</a></h2>
                    </div> -->
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="htc__blog__details">
                    <h2>DESCRIPCION DEL PROYECTO</h2>
                    <p><?php echo $FILTRADO["DESCRIPCION"]  ?></p>
                </div>
                <div class="htc__pro__desc__container">


                </div>
            </div>
        </div>
    </div>
</section>


<section class="htc__project__area bg__white pb--50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">GALERIA</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="rl__project__wrap clearfix mt--60 xmt-40">
                <!-- Start Single Service -->
                <?php
                for ($i = 0; $i < count($FILTRADO["GALERIA"]); $i++) {
                    // echo $FILTRADO["IMAGENES_PRINCIPALES"][$i];

                ?>

                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pt--10">
                        <div class="rl__project foo">
                            <div class="project__thumb">
                                <a href="#!">
                                    <img src="<?php echo $FILTRADO["GALERIA"][$i]  ?>" alt="project images">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
</section>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
<?php include("footer.php") ?>