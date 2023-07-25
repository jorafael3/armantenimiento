<?php include("header.php");

// $ARRAY_SERVICIO = Servicios();

?>

<section class="htc__contact__area bg__white ptb--150">
    <div class="container">
        <div class="row pb--100">
            <div class="col-md-12">
                <div class="htc__contact__inner">
                    <h2 class="title__line--5">INFORMACION DE CONTACTOS</h2>
                    <p>
                        infomraciond e contacto infomraciond e contacto infomraciond e contactoinfomraciond e contacto infomraciond e contactov
                    </p>
                </div>
                <div class="htc__address__container">
                    <!-- Start Single Address -->
                    <div class="ct__address">
                        <div class="ct__address__icon">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                        <div class="ct__details">
                            <p>calle 123 <br> av 123123, EC</p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ct__address">
                        <div class="ct__address__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="ct__details">
                            <p><a href="#">(593) 24568 365 987)</a></p>
                            <p><a href="#">(593) 65897 569 784)</a></p>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="ct__address">
                        <div class="ct__address__icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="ct__details">
                            <p><a href="#">infor@simplyconstruction.com</a></p>
                            <p><a href="#">www.simplyconstruction.com</a></p>
                        </div>
                    </div>

                    <!-- End Single Address -->
                </div>
                <div class="htc__address__container">
                    <!-- Start Single Address -->
                    <div class="ct__address">
                        <div class="ct__address__icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="ct__details">
                            <p>LUNES - VIERNES 8:00 AM - 6PM <br>
                                SABADOS 10:00 AM - 5PM </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="htc__google__map">
                    <h2 class="title__line--5">Donde estamos ubicados</h2>
                    <div class="map__contacts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16337849.384547414!2d-94.6172194477704!3d-1.336589123125705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902387dda89a4bd5%3A0x9d76af04119c3702!2sEcuador!5e0!3m2!1ses-419!2sec!4v1689027128498!5m2!1ses-419!2sec" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="htc__contact__form__wrap">
                    <h2 class="title__line--5">ENVIANOS UN MENSAJE</h2>
                    <div class="contact-form-wrap">
                        <div id="" action="#" method="post">
                            <div class="single-contact-inner">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <span>Nombre*</span>
                                        <input id="nombre" type="text" name="name" required>
                                    </div>
                                    <div class="contact-box email">
                                        <span>Email*</span>
                                        <input id="email" type="email" name="email" required>
                                    </div>
                                    <div class="contact-box subject">
                                        <span>Asunto*</span>
                                        <input id="asunto" type="text" name="subject" required>
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <span>Mensaje*</span>
                                        <textarea id="detalle" name="message" required></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button id="BTN_ENVIAR" type="submit" class="htc__btn btn--theme" name="enviar">ENVIAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $("#BTN_ENVIAR").on("click", function(x) {
        let nombre = $("#nombre").val();
        let email = $("#email").val();
        let asunto = $("#asunto").val();
        let detalle = $("#detalle").val();

        var parametros = {
            "enviar": "1",
            "nombre": nombre,
            "email": email,
            "asunto": asunto,
            "detalle": detalle,
        };
        console.log('parametros: ', parametros);

        $.ajax({
            data: parametros,
            datatype: 'json',
            url: 'correo.php',
            type: 'POST',
            success: function(x) {
                x = JSON.parse(x);
                console.log('x: ', x);
                if (x[1] == 1) {
                    Swal.fire(
                        "Su correo ha sido enviado",
                        'Gracias',
                        'success'
                    )
                } else {
                    Swal.fire(
                        x[0],
                        '',
                        'error'
                    )
                }

            }
        });
    })
</script>