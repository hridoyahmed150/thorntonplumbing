<?php

$banner_title = get_post_meta( get_the_ID(), $home_meta.'banner_title', 1 );

$banner_images = get_post_meta( get_the_ID(), $home_meta . 'banner_images', 1 );

$banner_image  = $banner_image_url = '';

$phone      = c20_cmb2_get_general('general_phone'); 
$wh_page    = c20_cmb2_get_general('general_wh_page');  ?>
 

<div class="c20-sec has-image-bg c20-sec-home-banner pb-0" style="background-image: url(<?php echo $img_dir; ?>/banner-home.png);">

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
    <div class="banner-bottom position-relative py-4">
        <div class="overlay position-absolute"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-2 offset-xl-1">
                    <h2 class="text-white">What our customers say about us</h2>
                    <h6 class="text-white">“I'm taking this opportunity to let you know how pleased I am with the work your employees have done in correcting the mess…” - Mrs. Conor
                        Read more Testimonials
                        <a href="#">
                            <span class="text-yellow">- Mrs. Conor</span>
                        </a>
                    </h6>
                    <a href="#" class="read-more text-yellow">Read more Testimonials</a>
                </div>
            </div>
        </div>
    </div>
</div>

