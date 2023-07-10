<?php include("header.php");

$ARRAY_ACERCA = ACERCA();

$VALORES = $ARRAY_ACERCA[0];

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

<?php include("footer.php") ?>