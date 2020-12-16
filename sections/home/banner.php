<?php

$banner_title = get_post_meta( get_the_ID(), $home_meta.'banner_title', 1 );

$banner_images = get_post_meta( get_the_ID(), $home_meta . 'banner_images', 1 );

$banner_image  = $banner_image_url = '';

$phone      = c20_cmb2_get_general('general_phone'); 
$wh_page    = c20_cmb2_get_general('general_wh_page');  ?>
 

<div class="c20-sec has-image-bg c20-sec-home-banner" style="background-image: url(<?php echo $img_dir; ?>/banner-home.png);">

<!--    <div class="container">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-sm-12 slogan">-->
<!--                <img src="--><?php // echo $img_dir;?><!--/slogan.png" alt="">-->
<!--            </div>-->
<!--            <div class="col-sm-12">-->
<!--                <div class="overlay"></div>-->
<!--                <div class="content">-->
<!--                    <h2>What our customers say about us</h2>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="banner-top">
        <img class="slogan" src="<?php  echo $img_dir;?>/slogan.png" alt="">
    </div>
    <div class="banner-bottom position-relative">
        <div class="overlay position-absolute"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>What our customers say about us</h2>
                </div>
            </div>
        </div>
    </div>
</div>

