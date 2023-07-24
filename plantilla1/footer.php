<!-- <div class="htc__contact__address add-res bg__cat--1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="htc__contact__wrap clearfix">
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
                    <div class="ht__address__inner">
                        <div class="ht__address__icon glob">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="#">info@mail.com</a></p>
                            <p><a href="#">www.armantenimiento.com</a></p>
                        </div>
                    </div>
                    <div class="ht__address__inner">
                        <div class="ht__address__icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="#">(593) 0999999999</a></p>
                            <p><a href="#">(593) 0999999999</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <footer class="htc__footer__area">
    <div class="footer__top ptb--50" data--1f2d30__overlay="9.5" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/2.jpg) no-repeat fixed center center / cover ;">
        <div class="container">
            <div class="row">
                <div class="htc__footer__wrap clearfix">
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
                            </div>
                        </div>
                    </div>
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
</footer> -->

<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <!-- <h3 class="widget-title">Acerca de Nosotros</h3> -->
                    <img loading="lazy" width="250px" class="footer-logo" src="assets/img/logo/logoarmantenimientosa.png" alt="Constra">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua.
                    </p> -->
                    <!-- <div class="footer-social">
                        <ul>
                            <li><a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!" aria-label="Github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div> -->
                </div><!-- Col end -->
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Servicios</h3>
                    <ul class="list-arrow">
                        <?php
                        $con = 0;
                        foreach ($ARRAY_SERVICIO as $row) {

                        ?>

                            <li><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

                        <?php
                        }
                        ?>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Contáctenos</h3>
                    <div class="working-hours">

                        <i class="fas fa-envelope"></i> correo@armantenimientos.com
                        <br>
                        <i class="fas fa-phone"></i> (593) 099999999

                        <!-- Trabajamos los 7 días de la semana, contactenos para mas informacion,
                        siguenos en nuestraas redes sociales.
                        <br><br> Lunes - Viernes: <span class="text-right">10:00 - 16:00 </span>
                        <br> Sabados: <span class="text-right">12:00 - 15:00</span>
                        <br> Domingos y Feriados: <span class="text-right">09:00 - 12:00</span> -->
                        <div class="footer-social">
                            <ul>
                                <li><a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                                </li>
                                <li><a href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <!-- <li><a href="#!" aria-label="Github"><i class="fab fa-github"></i></a> -->
                                </li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div>
                </div><!-- Col end -->


            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="copyright-info" style="color: white;">
                        <span>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, Ar Mantenimientos
                        </span>
                    </div>
                </div>

                <!-- <div class="col-md-6">
          <div class="footer-menu text-center text-md-right">
            <ul class="list-unstyled">
              <?php
                $con = 0;
                foreach ($ARRAY_RUTAS as $row) {
                    $active = "active";
                    if ($con != 0) {
                        $active = "";
                    }
                ?>

                <li><a href="<?php echo $row["LINK"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

              <?php
                    $con++;
                }
                ?>

            </ul>
          </div>
        </div> -->
            </div><!-- Row end -->

            <!-- <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div> -->

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer><!-- Footer end -->
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