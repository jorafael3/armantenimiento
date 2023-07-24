<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">Acerca de Nosotros</h3>
          <img loading="lazy" width="150px" class="footer-logo" src="assets/img/logo/logoarmantenimientosa.png" alt="Constra">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing
            elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua.
          </p>
          <div class="footer-social">
            <ul>
              <li><a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#!" aria-label="Github"><i class="fab fa-github"></i></a>
              </li>
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Horarios</h3>
          <div class="working-hours">
            Trabajamos los 7 días de la semana, contactenos para mas informacion,
            siguenos en nuestraas redes sociales.
            <br><br> Lunes - Viernes: <span class="text-right">10:00 - 16:00 </span>
            <br> Sabados: <span class="text-right">12:00 - 15:00</span>
            <br> Domingos y Feriados: <span class="text-right">09:00 - 12:00</span>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Servicios</h3>
          <ul class="list-arrow">
            <?php
            $con = 0;
            foreach ($SERVICIOS as $row) {

            ?>

              <li><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></li>

            <?php
            }
            ?>

          </ul>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info">
            <span>Copyright &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, Ar Mantenimientos
            </span>
          </div>
        </div>

        <div class="col-md-6">
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
        </div>
      </div><!-- Row end -->

      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->


<!-- Javascript Files
  ================================================== -->

<!-- initialize jQuery Library -->
<script src="assets/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="assets/plugins/bootstrap/bootstrap.min.js" defer></script>
<!-- Slick Carousel -->
<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="assets/plugins/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="assets/plugins/shuffle/shuffle.min.js" defer></script>


<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="assets/plugins/google-map/map.js" defer></script>

<!-- Template custom -->
<script src="assets/js/script.js"></script>

</div><!-- Body inner end -->
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