<?php


$testimonials = get_post_meta(get_the_ID(), $landing_meta . 'testimonials', true);
$testimonials_banner = get_post_meta(get_the_ID(), $landing_meta . 'testimonial_banner', true);
$service_terms_image = get_post_meta(get_the_ID(), $landing_meta . 'service_terms', true);
$service_terms_list = get_post_meta(get_the_ID(), $landing_meta . 'service_provide', true);

$testimonial = $clients_name = $clients_role = '';

?>

<div class="c20-sec c20-sec-testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="px-3 px-sm-0 mb-4 mb-sm-5 m-md-0 wh-right aos-init aos-animate" data-aos-delay="600" data-aos-duration="800" data-aos="fade-right">
                <div class="wh-image-wrap">

                    <?php if ($service_terms_image): ?>
                        <img class="lozad"
                             data-src="https://www.reicheltplumbing.com/wp-content/themes/reicheltplumbing/assets/img/larege-van.png"
                             alt="Service Van"
                             src="<?php echo $service_terms_image?>"
                             data-loaded="true">
                    <?php endif ?>
                </div>
            </div>
            <div class="wh-left">
                <?php
                    foreach ( (array) $service_terms_list as $service_list ):
                        $service_list_title =  $service_list[$landing_meta.'service_title'];

                ?>
                    <div class="point d-flex align-items-center">
                        <span class="label-circle pt-3 px-3"></span>
                        <h5 class="my-0 ml-3 text-blue"><?php echo $service_list_title?></h5>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<div class="c20-sec-our-client">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 d-flex justify-content-between align-items-center flex-wrap">
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-1.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-2.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-3.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-4.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-5.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-6.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-7.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-8.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-9.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-10.png" alt="client">
                </div>
                <div class="client py-3">
                    <img src="<?php echo $img_dir; ?>/client-11.png" alt="client">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c20-sec py-5 c20-sec-review">


    <div class="container">


        <div class="row has-image-bg review-content" style="background-image: url(<?php echo $img_dir;?>/review-bg.png)">

            <div class="col-sm-12 col-lg-6 c20-sec-review-inner mt-3 d-flex flex-column justify-content-start">
                <div class="group-review text-center mb-5 d-flex justify-content-center">
                    <div class="facebook-review media-review px-3">
                        <img src="<?php echo $img_dir; ?>/ionsocialfacebook.png" alt="">
                        <p class="text-white m-0" >Facebook</p>
                        <p class="text-white m-0">5</p>
                        <img class="star" src="<?php echo $img_dir;?>/control/testimonial-star.png" alt="">
                        <p class="review-count text-white m-0">12 + Reviews</p>
                    </div>
                    <div class="facebook-review media-review px-3">
                        <img src="<?php echo $img_dir; ?>/Bitmap.png" alt="">
                        <p class="text-white m-0">Yelp</p>
                        <p class="rating text-white m-0">5</p>
                        <img class="star" src="<?php echo $img_dir;?>/control/testimonial-star.png" alt="">
                        <p class="review-count text-white m-0">12 + Reviews</p>
                    </div>
                    <div class="facebook-review media-review px-3">
                        <img src="<?php echo $img_dir; ?>/googleFontAwesome.png" alt="">
                        <p class="text-white m-0">Google</p>
                        <p class="rating text-white m-0">5</p>
                        <img class="star" src="<?php echo $img_dir;?>/control/testimonial-star.png" alt="">
                        <p class="review-count text-white m-0">12 + Reviews</p>
                    </div>
                </div>
                <div class="review-logo text-center">
                    <img src="<?php echo $img_dir;?>/review-logo.png" alt="review-logo">
                </div>
            </div>
            <div class="col-sm-12 mt-4 mt-lg-0 col-lg-6 c20-sec-review-slider">
                <?php if ($testimonials) : ?>

                    <div class="testimonial-slider" data-aos-duration="500" data-aos-delay="400"
                         data-aos="fade-up">

                        <div class="testimonial-slider-init mb-4">

                            <?php foreach ((array)$testimonials as $key => $testimonial_data) :

                                $testimonial = $testimonial_data[$landing_meta . 'testimonial'];
                                $clients_name = $testimonial_data[$landing_meta . 'clients_name']; ?>

                                <div class="testimonial-slide">

                                    <div class="testimonial-text">
                                        <h6 class="text-white font-italic"><?php echo $testimonial; ?></h6>
                                    </div>

                                    <div class="testimonial-info">
                                        <div class="testimonial-title text-white font-italic">- <?php echo $clients_name; ?></div>
                                    </div>

                                </div>

                            <?php endforeach; ?>
                        </div>
                        <div class="paginator position-relative">
                            <span class="prev position-absolute d-flex justify-content-center align-items-center">
                                <img src="<?php echo $img_dir; ?>/control/btn-arrow.png" alt="arrow">
                            </span>
                            <span class="next position-absolute d-flex justify-content-center align-items-center">
                                <img src="<?php echo $img_dir; ?>/control/btn-arrow.png" alt="arrow">
                            </span>
                        </div>
                    </div>

                <?php endif; ?>
            </div>

        </div>
    </div>
</div>
<?php if ($testimonials_banner) : ?>
    <div class="c20-sec c20-review-img has-image-bg " style="background-image: url(<?php echo $testimonials_banner ?>)">
    </div>
<?php endif; ?>

<!-- end section -->
