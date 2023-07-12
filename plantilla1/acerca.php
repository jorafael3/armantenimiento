<?php include("header.php");

$ARRAY_ACERCA = ACERCA();

$VALORES = $ARRAY_ACERCA[0];
$EQUIPO = $ARRAY_ACERCA[1];

?>


<section class="htc__about__area ptb--150 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-lg-offset-1 col-sm-6 col-xs-12">
                <div class="about foo xmt__40">
                    <div class="about__inner">
                        <h2><a href="#!"><?php echo $VALORES["VALOR1"]  ?></a></h2>
                        <p><?php echo $VALORES["DES1"]  ?></p>

                        <div class="about__icon">
                            <i class="fa fa-users" style="color:white; font-size: 20px;" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="about__inner about__hober__info">
                        <h2><a href="#!"><?php echo $VALORES["VALOR1"]  ?></a></h2>
                        <p><?php echo $VALORES["DES1"]  ?></p>

                        <div class="about__icon">
                            <i class="fa fa-users" style="color:white;font-size: 20px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                <div class="about foo">
                    <div class="about__inner">
                        <h2><a href="#!"><?php echo $VALORES["VALOR2"]  ?></a></h2>
                        <p><?php echo $VALORES["DES2"]  ?></p>

                        <div class="about__icon">
                            <i class="fa fa-book" style="color:white; font-size: 20px;" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="about__inner about__hober__info active">
                        <h2><a href="#!"><?php echo $VALORES["VALOR2"]  ?></a></h2>
                        <p><?php echo $VALORES["DES2"]  ?></p>

                        <div class="about__icon">
                            <i class="fa fa-book" style="color:white;font-size: 20px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 hidden-sm col-xs-12">
                <div class="about foo">
                    <div class="about__inner">
                        <h2><a href="#!"><?php echo $VALORES["VALOR3"]  ?></a></h2>
                        <p><?php echo $VALORES["DES3"]  ?></p>
                        <div class="about__icon">
                            <i class="fa fa-cogs" style="color:white; font-size: 20px;" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="about__inner about__hober__info">
                        <h2><a href="#!"><?php echo $VALORES["VALOR3"]  ?></a></h2>
                        <p><?php echo $VALORES["DES3"]  ?></p>

                        <div class="about__icon">
                            <i class="fa fa-cogs" style="color:white;font-size: 20px;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="htc__team__area pb--120 bg__white">
    <div class="htc__team__container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">NUESTRO <span class="text--theme">EQUIPO</span></h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="htc__team__wrap clearfix mt--30">
                    <!-- Start Single Team -->

                    <?php
                    foreach ($EQUIPO as $row) {
                    ?>
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="team foo">
                                <div class="team__inner">
                                    <div class="team__thumb">
                                        <img src="<?php echo $row["EMP1_IMG"]  ?>" alt="team image">
                                    </div>
                                    <div class="team__hover__info">
                                        <ul class="team__social__link">
                                            <li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="team__details">
                                    <h2><a href="#"><?php echo $row["EMP1"]  ?></a></h2>
                                    <h4><?php echo $row["EMP1_CARGO"]  ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="htc__testimonial__area ptb--130" data--gray__overlay="9" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/1.jpg) no-repeat fixed center center / cover ;">
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
                            <input type="text" placeholder="Nombre">
                            <input type="email" placeholder="EMail">
                        </div>
                        <div class="single__cl__form">
                            <input type="tel" placeholder="Telefono">
                            <input type="text" placeholder="Asunto">
                        </div>
                        <div class="single__cl__message">
                            <textarea name="message" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="clint__submit__btn">
                            <a class="htc__btn" href="#">ENVIAR MENSAJE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>