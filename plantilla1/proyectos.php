<?php include("header.php") ?>


<?php
$ARRAY_PROYECTOS = proyectos();
?>

<div class="ht__bradcaump__area" data--black__overlay="8" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/5.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">PROYECTOS</h2>
                        <!-- <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor">-</span>
                            <span class="breadcrumb-item active">SERVICES</span>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="htc__latest__project__area ptb--150 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">Nuestros <span class="text--theme">PROYECTOS</span></h2>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                </div>
            </div>
        </div>
        <div class="row ptb--50">
            <div class="htc__latest__project__wrap clearfix">
                <!-- Start Single Project -->
                <?php
                foreach ($ARRAY_PROYECTOS as $row) {
                ?>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="project foo">
                            <div class="project__thumb">
                                <a href="<?php echo $row["LINK_DETALLE"]  ?>">
                                    <img src=" <?php echo $row["IMG_BACKGROUND"]  ?>" alt="project images">
                                </a>
                                <div class="project__hover__info">
                                    <div class="project__action">
                                        <h2><a href="<?php echo $row["LINK_DETALLE"]  ?>"> <?php echo $row["NOMBRE"]  ?></a></h2>
                                        <h4>DURACION:  <?php echo $row["DURACION"]  ?></h4>
                                    </div>
                                </div>
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

<?php include("footer.php") ?>