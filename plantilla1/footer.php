<div class="htc__contact__address add-res bg__cat--1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="htc__contact__wrap clearfix">
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon map-pin">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                        <div class="ht__address__details">
                            <p>Av 123
                                <br>calle 123, EC
                            </p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon glob">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="#">info@mail.com</a></p>
                            <p><a href="#">www.armantenimiento.com</a></p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="#">(593) 0999999999</a></p>
                            <p><a href="#">(593) 0999999999</a></p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="htc__footer__area">
    <div class="footer__top ptb--50" data--1f2d30__overlay="9.5" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/2.jpg) no-repeat fixed center center / cover ;">
        <div class="container">
            <div class="row">
                <div class="htc__footer__wrap clearfix">
                    <!-- Start Single Footer -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="footer foo">
                            <div class="footer__widget">
                                <h2 class="ft__title">ACERCA</h2>
                            </div>
                            <div class="ft__details">
                                <p>
                                    Acerca de armantenimietos
                                    Acerca de armantenimietos
                                    Acerca de armantenimietos
                                    Acerca de armantenimietos,
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 xmt-40">
                        <div class="footer quick__link foo">
                            <div class="footer__widget">
                                <h2 class="ft__title">LINKS</h2>
                            </div>
                            <div class="footer__link">
                                <ul class="ft__menu">
                                <?php
                                    foreach ($ARRAY_RUTAS as $row) {
                                    ?>
                                        <li><a href="<?php echo $row["LINK"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                                <!-- <ul class="ft__menu">
                                    <li><a href="#">Quote</a></li>
                                    <li><a href="projects-one.html">Projects</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#">Features</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 smt-40 xmt-40">
                        <div class="footer foo">
                            <div class="footer__widget">
                                <h2 class="ft__title">REDES SOCIALES</h2>
                            </div>
                            <ul class="footer__instagram">
                                <li><a href="#!"><img style="width: 50px; height: 50px;" src="assets/img/social/facebook.png" alt="images"></a></li>
                                <li><a href="#!"><img style="width: 50px; height: 50px;" src="assets/img/social/instagram.png" alt="images"></a></li>
                                <li><a href="#!"><img style="width: 50px; height: 50px;" src="assets/img/social/tik-tok.png" alt="images"></a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <!-- <div class="col-md-3 col-lg-2 col-lg-offset-1 col-sm-6 col-xs-12 smt-40 xmt-40">
                        <div class="footer foo">
                            <div class="footer__widget">
                                <h2 class="ft__title">INQUARY</h2>
                                <div class="footer__link">
                                    <ul class="ft__menu">
                                        <li><a href="index.php">INICIO</a></li>
                                        <li><a href="service.html">SERVICIOS</a></li>
                                        <li><a href="#">PROJECTOS</a></li>
                                        <li><a href="contact.html">CONTACTOS</a></li>
                                        <li><a href="about.html">QUIENES SOMOS</a></li>
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Footer -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg__theme">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner">
                        <p style="color:white ">Copyright ArMantenimientos</a>
                            Todos los derechos reservados 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstraassets/p framework js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- All js passets/lugins included in this file. -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Waypointassets/s.min.js. -->
<script src="assets/js/waypoints.min.js"></script>
<!-- Main js assets/file that contents all jQuery plugins activation. -->
<script src="assets/js/main.js"></script>

</body>

<script src="https://sleekflow.io/whatsapp-button.js" async onLoad="whatsappButton({
		buttonName:'Contactanos',
		buttonIconSize: '22',
		brandImageUrl:'https://sleekflow.io/static/images/sleekflow-icon.png',
		buttonMargin:'true',
		brandName:'Empresa',
		brandSubtitleText:'empresa',
		buttonSize:'regular',
		callToAction:'Iniciar Chat',
		phoneNumber:'593969786231',
		welcomeMessage:'Hola',
		})">
		</script>

</html>