<?php

$banner_title = get_post_meta( get_the_ID(), $home_meta.'banner_title', 1 );

$banner_images = get_post_meta( get_the_ID(), $home_meta . 'banner_bg', 1 );
$banner_subtitle = get_post_meta( get_the_ID(), $home_meta . 'banner_subtitle', 1 );
$banner_read_more_text = get_post_meta( get_the_ID(), $home_meta . 'banner_read_more', 1 );
$banner_read_more_url = get_post_meta( get_the_ID(), $home_meta . 'banner_read_more_url', 1 );


$banner_image  = $banner_image_url = '';

$phone      = c20_cmb2_get_general('general_phone'); 
$wh_page    = c20_cmb2_get_general('general_wh_page');  ?>
 

<div class="c20-sec has-image-bg c20-sec-home-banner pb-0" style="background-image: url(<?php echo $banner_images; ?>);">

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
                    <?php if ($banner_title): ?>
                        <h2 class="text-white"><?php echo $banner_title ?></h2>
                    <?php endif ?>

                    
                    <?php echo ($banner_subtitle) ? $banner_subtitle : "";?>
                    <?php if ($banner_read_more_text) : ?>
                        <a href="<?php echo ($banner_read_more_url) ? $banner_read_more_url : '#'; ?>" class="read-more text-yellow"><?php echo $banner_read_more_text?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

