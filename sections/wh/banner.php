<?php

$banner_title = get_post_meta( get_the_ID(), $home_meta.'banner_title', 1 );

$banner_images = get_post_meta( get_the_ID(), $home_meta . 'banner_images', 1 );

$banner_image  = $banner_image_url = ''; 

?>


<div class="c20-sec has-image-bg c20-sec-wh-banner" style="background-image: url(<?php echo $img_dir; ?>/banner-wh.png);">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-0">

                <div class="wh-banner-content text-center" data-aos-delay="300" data-aos-duration="800" data-aos="fade-down"> 

                    <h2 class="text-uppercase wh-banner-title m-0 mb-4 text-primary">Affordable, Same Day Hot Water Service</h2>

                    <h3 class="text-uppercase m-0 mb-4 pb-2 px-xl-5 ">So You Can Get Back To The Things In Life That Metter Most</h3>

                    <h3 class="h4 text-uppercase m-0 mb-4 pb-2 font-600 text-secondary">If You Need it Quick</h3>

                </div>

                <?php if($phone) : ?>
                    <div class="text-center" data-aos-delay="300" data-aos-duration="1100" data-aos="zoom-in-up">
                        <a href="tel:<?php echo $phone; ?>" class="btn btn-primary btn-xs-full btn-width">Call Rick!</a> 
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>

</div>





