<?php include("header.php");


if (isset($_GET["ID"])) {

    $ID = $_GET["ID"];
    $ARRAY_SERVICIOS = Servicios()[0];
    $ARRAY = $ARRAY_SERVICIOS[$ID];
    $FILTRADO = $ARRAY_SERVICIOS[$ID]["DETALLES_PR"];
    // var_dump($FILTRADO["IMAGENES_PRINCIPALES"]);
    // var_dump($FILTRADO);
} else {
    include("footer.php");
    die();
}
?>

<section class="htc__blog__details__page ptb--100 bg__white">
    <div class="container2" style="padding: 10px;">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="htc__page__sidebar">
                    <!-- Start Single -->
                    <div class="htc__category bg__gray">
                        <h1 class="sidebar__title">SERVICIOS</h1>
                        <ul class="cat__list">
                            <?php
                            foreach ($ARRAY_SERVICIOS as $row) {
                            ?>
                                <li><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- End Single -->
                    <!-- Start Single -->
                    <!-- <div class="htc__broc bg__gray sidebar__separator">
                        <h2 class="sidebar__title">OUR BROCHURE</h2>
                        <ul class="brocure__list">
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i>DOWNLOAD PDF BROCHURE</a></li>
                            <li><a href="#"><i class="fa fa-wordpress"></i>DOWNLOAD DOC BROCHURE</a></li>
                        </ul>
                    </div> -->
                    <!-- End Single -->
                </div>
            </div>
            <div class="col-md-9 col-lg-8 col-sm-12 col-xs-12 smt-40 xmt-40">
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
                                        <img style="width: 100%;height: 750px;" src="<?php echo $FILTRADO["IMAGENES_PRINCIPALES"][$i]  ?>" alt="full-image">
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
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
                                        <img style="width: 150px;height: 150px;" src="<?php echo $FILTRADO["IMAGENES_PRINCIPALES"][$i]  ?>" alt="small-image">
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- End Small images -->
                </div>
                <div class="htc__service__dtl">
                    <!-- Start Single Service -->
                    <div class="htc__ser__dtl">
                        <h2 class="title__line--4"><?php echo $ARRAY["NOMBRE"]  ?></h2>
                        <p>
                            <?php echo $ARRAY["DESCRIPCION"]  ?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 " style="margin-top: 15px;">

                           
                            <ul class="list-arrow">
                            <?php
                            foreach($ARRAY["DESCRIPCION_LISTA"] as $row){

                            ?>

                                <li><?php echo $row ?></li>
                                <?php
                            }
                            ?>
                            </ul>
                        </div>

                       
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<?php include("footer.php") ?>