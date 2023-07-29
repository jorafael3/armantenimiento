<?php include("header.php");

$ARRAY_SERVICIO = Servicios()[0];
$ARRAY_SERVICIO_ADICIONALES = Servicios()[1];

?>

<div class="ht__bradcaump__area" data--black__overlay="8" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/5.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">SERVICIOS</h2>
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

<section class="htc__service__area service__page bg__gray ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">NUESTROS <span class="text--theme">SERVICIOS</span></h2>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="service__section__wrap clearfix">
                <!-- Start Single Service -->
                <?php
                foreach ($ARRAY_SERVICIO as $row) {
                ?>

                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 ">

                        <div class="service foo">

                            <div class="service__thumb">
                                <a href="<?php echo $row["LINK_DETALLE"]  ?>">
                                    <img class="rounded" style="width: 100%;height: 300px;" src="<?php echo $row["IMG_BACKGROUND"]  ?>" alt="service images">
                                </a>
                                <div class="service__hovere">
                                    <div class="service__action">
                                        <a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a>
                                    </div>
                                </div>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="service__details">
                                <h2><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></h2>
                            </div> -->
                        </div>

                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>

<section class="htc__offer__area htc__offer__2 ht__offr--3 bg__gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">SERVICIOS <span class="text--theme">ADICIONALES</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="htc__offer__container">

                    <?php
                    $i = 0;
                    foreach ($ARRAY_SERVICIO_ADICIONALES as $row) {
                        if ($i <= 2) {
                    ?>
                            <div class="offer">
                                <div class="offer__icon">
                                    <img src="<?php echo $row["ICONO"] ?>" alt="icon images">
                                </div>
                                <div class="offer__details">
                                    <h2><a href="#"><?php echo $row["NOMBRE"]  ?></a></h2>
                                    <p>
                                        <?php echo $row["DESCRIPCION"] ?></p>
                                </div>
                            </div>

                    <?php
                        }
                        $i++;
                    }
                    ?>


                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="htc__offer__container">
                    <?php
                    $i = 0;
                    foreach ($ARRAY_SERVICIO_ADICIONALES as $row) {
                        if ($i > 2) {
                    ?>
                            <div class="offer">
                                <div class="offer__icon">
                                    <img src="<?php echo $row["ICONO"] ?>" alt="icon images">
                                </div>
                                <div class="offer__details">
                                    <h2><a href="#"><?php echo $row["NOMBRE"]  ?></a></h2>
                                    <p>
                                        <?php echo $row["DESCRIPCION"] ?></p>
                                </div>
                            </div>

                    <?php
                        }
                        $i++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="htc__offer__thumb">
                <div class="htc__offer__thumb__inner">
                    <img src="assets/images/about/1.jpg" alt="offer img">
                </div>
            </div> -->
</section>

<section class="htc__testimonial__area ptb--130 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
                <div class="htc__testimonial__wrap">
                    <div class="section__title text-left">
                        <h2 class="title__line">AR <span class="text--theme">MANTENIMIENTOS</span></h2>
                    </div>
                    <div class="testimonial__activation clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="testimonial">
                            <div class="testimonial__thumb">
                                <img src="assets/images/test/client/1.jpg" alt="clint image">
                            </div>
                            <div class="testimonial__details">
                                <div class="tes__icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>
                                    AR MANTENIMIENTOS tiene
                                    el compromiso de brindar
                                    excelente servicio no solo en
                                    mano de obra, también
                                    incluye: gestión de
                                    documentación, ingeniería,
                                    supervisión e inspección en
                                    campo y gestión logística.
                                </p>
                                <h2><a href="#">Alexander Rodrigo</a></h2>
                                <h4>CEO</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6  col-lg-offset-1 col-sm-12 col-xs-12 smt-40">
                <div class="reguest__quote">
                    <div class="section__title text-left">
                        <h2 class="title__line">SOLICITAR <span class="text--theme">PRESUPUESTO</span></h2>
                        <p>
                            Indicanos en que te podemos ayudar
                        </p>
                    </div>
                    <div class="clint__comment__form">
                    <div class="single__cl__form">
                            <input id="nombre" type="text" placeholder="Nombre">
                            <input id="email" type="email" placeholder="Email">
                        </div>
                        <div class="single__cl__form">
                            <!-- <input type="tel" placeholder="Telefono"> -->
                            <input id="asunto"  type="text" placeholder="Asunto">
                        </div>
                        <div class="single__cl__message">
                            <textarea id="detalle" name="message" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="clint__submit__btn">
                            <button id="BTN_ENVIAR" class="htc__btn" href="#">ENVIAR MENSAJE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php") ?>