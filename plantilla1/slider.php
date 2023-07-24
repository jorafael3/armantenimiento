<?php 

include_once("libs_p2.php");

$SLIDER = SLIDER();
// var_dump($SLIDER);
?>



<div class="banner-carousel banner-carousel-1">
    <div class="banner-carousel-item" style="background-image:url(<?php echo $SLIDER[0]["IMAGEN"] ?>)">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center" style="padding-top: 80px;">
                        <h2 class="slide-title" data-animation-in="slideInLeft"><?php echo $SLIDER[0]["TEXTO2"] ?></h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight"><?php echo $SLIDER[0]["TEXTO3"] ?></h3>
                        <p data-animation-in="slideInLeft" data-duration-in="1.2">
                            <a href="<?php echo $SLIDER[0]["LINKS"][0]["PAGINA"] ?>" class="slider btn btn-primary"><?php echo $SLIDER[0]["LINKS"][0]["TEXTO"] ?></a>
                            <a href="<?php echo $SLIDER[0]["LINKS"][1]["PAGINA"] ?>" class="slider btn btn-primary border"><?php echo $SLIDER[0]["LINKS"][1]["TEXTO"] ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-carousel-item" style="background-image:url(<?php echo $SLIDER[1]["IMAGEN"] ?>)">
        <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100" style="padding-top: 80px;">
                    <div class="col-md-12">
                        <h2 class="slide-title-box" data-animation-in="slideInDown"><?php echo $SLIDER[1]["TEXTO1"] ?></h2>
                        <h3 class="slide-title" data-animation-in="fadeIn"><?php echo $SLIDER[1]["TEXTO2"] ?></h3>
                        <h3 class="slide-sub-title" data-animation-in="slideInLeft"><?php echo $SLIDER[1]["TEXTO3"] ?></h3>
                        <p data-animation-in="slideInRight">
                        <a href="<?php echo $SLIDER[1]["LINKS"][0]["PAGINA"] ?>" class="slider btn btn-primary"><?php echo $SLIDER[0]["LINKS"][0]["TEXTO"] ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(<?php echo $SLIDER[2]["IMAGEN"] ?>)">
        <div class="slider-content text-right">
            <div class="container h-100">
                <div class="row align-items-center h-100" style="padding-top: 80px;">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown"><?php echo $SLIDER[2]["TEXTO1"] ?></h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn"><?php echo $SLIDER[2]["TEXTO2"] ?></h3>
                        <p class="slider-description lead" data-animation-in="slideInRight"><?php echo $SLIDER[2]["TEXTO3"] ?></p>
                        <div data-animation-in="slideInLeft">
                            <a href="<?php echo $SLIDER[2]["LINKS"][1]["PAGINA"] ?>" class="slider btn btn-primary border" aria-label="learn-more-about-us"><?php echo $SLIDER[2]["LINKS"][1]["TEXTO"] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>