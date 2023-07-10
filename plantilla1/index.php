<!-- CABECERA -->

<?php include("header.php");
$ARRAY_SERVICIO = Servicios();


?>


<div class="slider__container">
    <div class="slider__activation__wrap owl-carousel owl-theme">
        <!-- Start Single Slide -->
        <div class="slide slider__fixed--height slide__align--center" style="background: rgba(0, 0, 0, 0) url(assets/images/slider/bg/1.jpg) no-repeat scroll 0 0 / cover;" data--black__overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="slider__inner">
                            <h4 data-animation-in="slideInLeft">DESDE 2020</h4>
                            <h1>CONSTRUIMOS</h1>
                            <p>

                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed
                            </p>
                            <!-- <div class="slider__btn">
                                        <a class="htc__btn btn-celestes" href="contact.html">CONTACTENOS</a>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="htc__slider__fornt__img">
                <img src="images/slider/fornt-img/1.png" alt="slider images">
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide slider__fixed--height slide__align--center" style="background: rgba(0, 0, 0, 0) url(assets/images/slider/bg/2.jpg) no-repeat scroll 0 0 / cover;" data--black__overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="slider__inner">
                            <h4>DESDE 2020</h4>
                            <h1>CONSTRUIMOST</h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed
                            </p>
                            <!-- <div class="slider__btn">
                                        <a class="htc__btn" href="contact.html">CONTACT US</a>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="htc__slider__fornt__img">
                <img src="assets/images/slider/fornt-img/1.png" alt="slider images">
            </div>
        </div>
        <!-- End Single Slide -->
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

                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="service foo">
                            <div class="service__thumb">
                                <a href="<?php echo $row["LINK_DETALLE"]  ?>">
                                    <img src="<?php echo $row["IMG_BACKGROUND"]  ?>" alt="service images">
                                </a>
                                <div class="service__hover">
                                    <div class="service__action">
                                        <a href="<?php echo $row["LINK_DETALLE"]  ?>">DETALLES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__details">
                                <h2><a href="<?php echo $row["LINK_DETALLE"]  ?>"><?php echo $row["NOMBRE"]  ?></a></h2>
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

<section class="htc__latest__project__area ptb--80 bg__white text__pos">

    <div class="container_p">
        <video width="100%" height="100%" loop controls controlslist="nodownload">
            <source src="https://www.torresytorres.com/wp-content/uploads/2022/09/Torres-video-corporativo.mp4" type='video/mp4' ; codecs="hvc1">
            <!-- <source src="https://rotato.netlify.app/alpha-demo/movie-webm.webm" type="video/webm"> -->

        </video>
        <!-- <div class="player-buttons"></div> -->

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
            <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
                <div class="htc__offer__container">
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/1.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">TRABAJOS EN RH</a></h2>
                            <p>
                                Muebles de oficina, anaqueles de cocina,
                                armarios, paredes, etc. </p>
                        </div>
                    </div>
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/2.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">CCTV</a></h2>
                            <p>

                                Mantenimiento, instalaciones (Domo, 360, IP),
                                circuito cerrado, sensores, alarmas.
                            </p>
                        </div>
                    </div>
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/3.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">ESTIBAS Y LOGISTICA</a></h2>
                            <p>
                                Carga y descarga de cualquier tipo de material
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
                <div class="htc__offer__container">
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/3.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">GASFITERIA</a></h2>
                            <p>
                                Reubicación, instalaciones nuevas, mantenimiento
                                preventivo y correctivo, etc…
                            </p>
                        </div>
                    </div>
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/3.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">ARQUITECTURA</a></h2>
                            <p>
                                Diseños, maqueteria 3D (modelados, renderizado,
                                video renders), construcción, remodelación,

                            </p>
                        </div>
                    </div>
                    <div class="offer">
                        <div class="offer__icon">
                            <img src="assets/images/others/icon-2/3.png" alt="icon images">
                        </div>
                        <div class="offer__details">
                            <h2><a href="#">COTIZACION Y PRESUPUESTO</a></h2>
                            <p>
                                El servicio que brinda AR MANTENIMIENTOS se
                                basa bajo previa fiscalización, políticas y
                                necesidades del cliente. El presupuesto será
                                enviado y canalizado al cliente para su posterior
                                aprovación.
                            </p>
                        </div>
                    </div>
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


<section class="htc__latest__project__area ptb--80 bg__white text__pos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">ULTIMOS <span class="text--theme">PROJECTOS</span></h2>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="htc__latest__project__wrap h1__project clearfix mt--30">
                <!-- Start Single Project -->
                <div class="col-md-5 col-lg-5 hidden-sm col-xs-12">
                    <div class="project__itm foo">
                        <div class="project__thumb">
                            <a href="single-project.html">
                                <img src="assets/images/lst-project-3/1.jpg" alt="project images">
                            </a>
                            <div class="project__hover__info">
                                <div class="project__action">
                                    <h2><a href="single-project.html">CONSTRUCTION</a></h2>
                                    <h4>DURATION : 6 MONTH</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Project -->
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="project__itm foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="assets/images/lst-project-3/2.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">CONSTRUCTION</a></h2>
                                            <h4>DURATION : 6 MONTH</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="project__itm foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="assets/images/lst-project-3/3.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">CONSTRUCTION</a></h2>
                                            <h4>DURATION : 6 MONTH</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="project__itm foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="assets/images/lst-project-3/4.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">CONSTRUCTION</a></h2>
                                            <h4>DURATION : 6 MONTH</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="project__itm foo">
                                <div class="project__thumb">
                                    <a href="single-project.html">
                                        <img src="assets/images/lst-project-3/5.jpg" alt="project images">
                                    </a>
                                    <div class="project__hover__info">
                                        <div class="project__action">
                                            <h2><a href="single-project.html">CONSTRUCTION</a></h2>
                                            <h4>DURATION : 6 MONTH</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text__shape">
        <h2>PROJECTS</h2>
    </div>
</section>


<section class="htc__counterup__area ptb--50 " style="background: rgba(0, 0, 0, 0) url(assets/images/bg/counter.png) no-repeat scroll center center / cover ;">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 col-lg-offset-1 col-lg-9 col-sm-12 col-xs-12 ">
                <div class="htc__counterup__wrap">
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__count ">
                                    <span class="count">598</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>PROJECTOS</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__count ">
                                    <span class="count">128</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>CLIENTES</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__count ">
                                    <span class="count">339</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>TERMINADOS</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="funfact">
                        <div class="fact__details">
                            <div class="funfact__count__inner">
                                <div class="fact__count ">
                                    <span class="count">109</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>CERTIFICACIONES</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Fact -->
                </div>
            </div>
        </div>
    </div>
</section>


<div class="htc__brand__area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title text-center">
                    <h2 class="title__line">NUESTROS <span class="text--theme">CLIENTES</span></h2>
                    <p>Ir juntos es comenzar, mantenerse juntos
                        es progresar, trabajar juntos es triunfar</p>
                </div>
            </div>
        </div>
        <div class="row ptb--50">
            <div class="col-md-12">
                <ul class="brand__list">
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="https://2.bp.blogspot.com/-yRtVBYEJCyQ/WH-RHdgRe2I/AAAAAAAAAEQ/K5cYIJ989BUsPfDOtN8hMEC1bkeTWVBwgCEw/s1600/tpglogo.gif" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="data:image/png;base64,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" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="https://pbs.twimg.com/profile_images/1102608614076878848/3tn_vU1A_400x400.png" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="data:image/png;base64,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" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="https://media.licdn.com/dms/image/C560BAQGs5nC_yKkjzw/company-logo_200_200/0/1631639032978?e=2147483647&v=beta&t=4ae0WZpNJ3is8hYycqqtZQt4EQVR78zcmXVDeIZHMIE" alt="brand images"></a></li>
                </ul>
            </div>
            <div class="col-md-12 pt--50">
                <ul class="brand__list">
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="https://www.edina.com.ec/logos/2210100075-358691.jpg" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="https://a.calameoassets.com/5987924/picture.jpg?_u=190729034232" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="data:image/jpeg;base64,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" alt="brand images"></a></li>
                    <li><a style="width: 200px; height: 200px;" href="#!"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABIFBMVEX////hABoZGBvgAADgABX/8fTmHTH0mKEAAADY2drz8/TgAAUwLzEUExbycXzqABo1FBwUGBsDAAh8fH2hoKLKAAC4AADDAADbABnIOknUAAD8+fn72NxCQ0TgmKDSAAD7x87WABJwcHFhYWLiUFbFIDPHYWS6DBvvsbPtpajwjJXt7e0kIya0AADKy8zhAA/QbHRVVVbxgIqGhoeurq744eTpXWn94OTsu8D1sbiPkJJPTlC6urvOzs88PD5ycXP0eoZILDLiDSTWMz7mHzTad4DZiZHnQ1DNGyzsxMjCABHfLzvaUFbJUVnMRlLnVWC6KTW2FCXfr7G3BhfETVLQen71pK3LWmPhbHDZEyjrZHDPM0Hkpq3elZwnAAD5mKHV/U6BAAAIH0lEQVR4nO2bDVvaTBaGBxMsJNjdLYTEJBBD9G1rRAqCpYDoasXvVtu11ha3//9f7DkToPiBVSuL233u621I5ou558xMhl5vhQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwB9P/Mmi3Y+Rhhub00+Uf6buwdLKSMPnivo0+dvf/zFzdxLp0YZ67GlChlN35wUMnyAwhCEMJw8MYTgOQ1VR1Edr7CkaqpuVxfPHU7zBcPiY9juGiq7rsqMq3Sl375I+J0TNsGRFpaT8oqqqK6V7Gs7khvgNQ+XZ3Nzcls8xoZsv3t0Va9ScSYb69LNaPL5XsW4pq7zfePf11ravGyaSP1lemnmwoR6n1G36cn2Dbmr7t/XzcqcrQnTIUN+JR03v+qPLLlL+G2MyhiXu3x59ufKObuIvuZtqSaeJN1hj8knOsVKJU9XowzaLWYtCL9t1hEsPlPWz4lAryrO+IdVVFLkqKFcfWsZjM1Tfs2GcQqfIUJyQobI5/7xS+XgeFdV1flrdou5szs/PH6jqdPSxc3h4qMaUVxz62ezCEcVTmV6tbHyMcUVF31rdqFS+cT115zUV6hyex5TY/GqlUjmntbvzvPL8QB+/YWlHJn/wSx/lzaxPwYymXXzb5p6u1qKa7m5pnj7ynv6cPwzlLa9Df5oDeGxavk+Ci7JmbdWmOd+rJurnqt6bx3/ZP+Sdc+5vzsmb1/avDNeWmdZvGH6VyXmPJpJDN2deb7pKbzumbHBHXM6ataWhIQ0vTMWljKxd4UmetQarrUZFne+qDG3Uyp5h9w0N6UXlbZebpT+vvF8YrryYuoF7GPL+Qv13Td0VdcrvGLHSfPe4mP1O31831Gn6cIvZ7kjDLyLacGjCH/AIFbM1ltLZcLb4kiP5wdvh+p2jXY8MnZPPCwaPxXYxT9cj77rhTEIiDdPR/cMNedy71NfsliM6NNSfTOqqYdi2R75vTf0H1fmXab8eacgBPzP624lb3Le3KXYLNhsu+PaiDJ0tdxrT4ndo/LPv87StFX1fjqJ11XCmmZFIw5a8bSw93JBicEFj+YZmKw94nQ2VncocT0xXziYn6yujDd1oanNT1P1PWVtZ5UHxIkMlMuzvpVyEtmv1PatlLZo3Ip69ZviikLzK2sPXobLH04fiWKdBpS/cM2OlgzkRrRI369N2UstatxhyDN9EhpTgfnFrcel8m2G0ZZkWP4o7Gf7GXqpQ3E6NuIjXaPznWMef5il0VKyzoVWT11sMv8i0vqHkbf3T8R0Mo8exG6oUpDNTBu3I5K2myGvGOcl69X4MnVsNeS99K3ca7m/t9MN+sWiavn3rLD1w5HqQY3KTYfh4s1TlgH03uJvxl3LcTZvU4kWL3xnROuSOjjT0LSGnKR1QeEmLoulbvt07CIwylKeLmqmq8cGb5tJO014vEIF0yxQkD95LS7SFin3/vZAvKe7Ogkdqzq6tR4bs3jX0yJCHvrZvDxtaXI4evy5WbD487O3ayvTGgXrZUJ5584bVN5SVzjzOjN40V94WL5je+zDB9w//9SRXRNayaTKemrIfZ943utY6i3IF+jxNhStPObO+TtuScOLOsKHq917nNVPuOk6c8re9y4bRyck5snuG6jm3wRXpnXH9fRjxOG/80rdondEEO44ObheG3DwktMeUtuL9p1laP/2jGA29PLXRFCtt9RLp7dftV4ze+APDmJwE4i/5xufDvX7oRMNy0v8xMzbDj/l8hwJx0Lvm82eG5X3P1123nn+Tpa9XjdNX9fyeNKSH7e6eW+92TrJ+qZLPX/AUo8RX7l73A9kas3nOpoqlr9TWrsXt56lizDvr1rvH3gbV+cxO9n6n7tZPi4Nfa2M7tameYVgWf0RXg48YvmGY2axp+Pz1lmeYZjcylA9RjhWzDVmVEm2D0uR68gcVS9SWHzUpm+FWfEvvP0Ytmf7g5+jYDEdhWdbP38JWtNP413Oul74pu59zvdbPhxsMG0z56ibzWIaXUYYMx8QNfxMlj9w3Cv4phrfw6Ial1U7nYsF/ZKlLTPrvSwcbxtiYtOH4gSEMYTh5YAjD/yPDb8pT5d+J+7A+0vDdj2dPkx+Ze9EaaQgAAOB/FscZ3A0ufHWG/597Z+jPoEiUIMtpV+pPjnXNCcRKRhRCEba5M1ozCLRMVSQpuVyuimbQbIkgKIdrTboRwTLXSgfl5VYzaES5zYDKFYJykqoVksu5XFWsNJshtdRcdqjq2kQNy5rTFusJrRmKRo5fzSF1TTSWxHqbrLUpUaYUUU5qIp2hwCTbhaiWENVM6IiUCMt8yckiWrsViHYYhmuBqKZp6JJlutDDZA0FGTbWybC8VqYEbSog2WY1CEShEKyLpaCdEe3mmgiDmWXRWGvz/AumWqKaovPmDOdOBe2GyDWTZJ0IxRLlZzJk7iwFqZaTSzerEzUMklqOptZKIkzONBPU+5A1V1oJikahlRROM0wJh6MQimSKVJe4v2Waz1WOeErLaXyh8eHWQjqCpkItSWFrUQzDJaGVk+Ek/YRYazczIp10UmFjTVSp91oqKGuNZEYLRJr6RnIUEFqbyWquWU2mBQ0IjQsNRSsXrIgcTVa6tBqiHAQtEaY5nYKWLudCrSAaVW30sfu/Bf+rJPlffwfUtFDuf1FKL0+jNUcleZvtl3P4HzT1a/aK9BoQHPGhZgEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8OfzHwXeW1fm1uwkAAAAAElFTkSuQmCC" alt="brand images"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- End Contact Address -->
<!-- Start Footer Area -->


<?php include("footer.php") ?>