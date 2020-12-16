<?php


$testimonials = get_post_meta(get_the_ID(), $landing_meta . 'testimonials', true);

$testimonial = $clients_name = $clients_role = '';

?>

<div class="c20-sec c20-sec-testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="px-3 px-sm-0 mb-4 mb-sm-5 m-md-0 wh-right aos-init aos-animate" data-aos-delay="600" data-aos-duration="800" data-aos="fade-right">
                <div class="wh-image-wrap">
                    <img class="lozad"
                         data-src="https://www.reicheltplumbing.com/wp-content/themes/reicheltplumbing/assets/img/larege-van.png"
                         alt="Service Van"
                         src="<?php echo $img_dir; ?>/full-service.png  ?>"
                         data-loaded="true">
                </div>
            </div>
            <div class="mx-5 mx-sm-5 m-md-0 my-5 wh-left">
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Fully Stocked Trucks In Your Neighborhood Now</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">24/7 Emergency Service</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Never An Overtime Charge</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Highly Trained Techs Standing By</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">28 Years of Excellence in Plumbing</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Fully Licenced to ensure valid warranties</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Expert Plumbers with Ongoing Training</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Locally Owned Family Business</h5>
                </div>
                <div class="point d-flex align-items-center">
                    <span class="label-circle pt-3 px-3"></span>
                    <h5 class="my-0 ml-3 text-blue">Flexible Same Day Appointments</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c20-sec-our-client">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 d-flex justify-content-between align-items-center">
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-1.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-2.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-3.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-4.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-5.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-6.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-7.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-8.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-9.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-10.png" alt="client">
                </div>
                <div class="client">
                    <img src="<?php echo $img_dir; ?>/client-11.png" alt="client">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c20-sec py-5 c20-sec-gray c20-sec-review">


    <div class="container">


        <div class="row">

            <div class="col-md-12 c20-sec-review-inner">

                <div class="price-calculator mb-5 text-center" data-aos-duration="500" data-aos-delay="500"
                     data-aos="fade-right">

                    <p class="mb-2">Price Your Job in 60 Seconds</p>

                    <a href="https://solo.servicewhale.com/request/wizard?contrid=5782" class="btn btn-primary mb-4 "
                       target="_blank">
                        <img src="<?php echo $img_dir; ?>/usd.png" alt="">
                        <span>Price Calculator</span>
                    </a>

                    <?php echo do_shortcode('[c20_social]'); ?>
                </div>

                <?php if ($testimonials) : ?>

                    <div class="emg-testimonial-slider mb-5 mb-sm-4" data-aos-duration="500" data-aos-delay="400"
                         data-aos="fade-up">

                        <div class="emg-testimonial-slider-init">

                            <?php foreach ((array)$testimonials as $key => $testimonial_data) :

                                $testimonial = $testimonial_data[$landing_meta . 'testimonial'];
                                $clients_name = $testimonial_data[$landing_meta . 'clients_name'];
                                $clients_role = $testimonial_data[$landing_meta . 'clients_role']; ?>

                                <div class="testimonial-slide">

                                    <div class="testimonial-text">
                                        <?php echo $testimonial; ?>
                                    </div>

                                    <div class="testimonial-info">
                                        <div class="testimonial-title"><?php echo $clients_name; ?></div>
                                        <div class="testimonial-role"><?php echo $clients_role; ?></div>
                                    </div>

                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>

                <?php endif; ?>


                <div class="review-buzz-icon" data-aos-duration="500" data-aos-delay="500" data-aos="fade-left">

                    <script async type="text/javascript"
                            src="//www.reviewbuzz.com/app/public/js/widget.js?id=1323"></script>
                    <noscript>
                        <a href="//www.reviewbuzz.com/web-widget/RicksPlumbingServiceInc" style="font-size:12px;">
                            <img width="170" style="cursor: pointer"
                                 src="//www.reviewbuzz.com/app/public/images/popup-widget/reviewbuzz_widget_icon.png"
                                 alt="Ricks Plumbing Service Inc - 152 Customer Reviews - Milford, CT"><br>Ricks
                            Plumbing Service Inc - 152 Customer Reviews - Milford, CT</a>
                    </noscript>
                </div>

            </div>

        </div>
    </div>
</div> <!-- end section -->
