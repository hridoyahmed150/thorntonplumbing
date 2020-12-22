<!-- Coupon section -->
<?php

$coupon_heading = get_post_meta( get_the_ID(), $home_meta. 'coupon_heading', true );

$coupons = get_post_meta( get_the_ID(), $home_meta. 'coupons', true );
$coupon_title = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
?>

<div class="c20-sec c20-sec-home-coupon has-image-bg c20-sec-gray lozad" data-background-image="<?php echo $img_dir; ?>/darknight-bg-800.png">

    <div class="home-coupon-inner has-image-bg lozad d-lg-none" data-background-image="<?php echo $img_dir; ?>/darknight-bg-800-md.jpg"></div>

    <div class="container">

        <?php if($coupon_heading): ?>

            <div class="row">
                <div class="col c20-heading mb-5" data-aos-offset="200" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                    <h2 class="c20-title d-border font-800 text-center text-light"><?php echo $coupon_heading; ?></h2>
                </div>
            </div>
        <?php endif; ?>


        <div class="row">

            <div class="col-lg-4 col-md-12">

                <div class="text-center c20-coupon print-coupon">

                    <div class="c20-coupon-inner">

                        <h2 class="coupon-price"><span><span>$</span>49</span> OFF</h2>


                        <p class="coupon-subtitle">on Any Plumbing Service</p>


                        <div class="desclimer">From a leaky faucet to a busted water heater. No matter the service, you can enjoy additional savings on our already competitive pricing.</div>

                        <div class="coupon-call font-800">
                            <a href="tel:773-219-1200">Call Now: (773) 219-1200</a>
                        </div>

                    </div>

                    <div class="coupon-desclimer">*A few restrictions may apply. Call for details.</div>

                    <img src="<?php echo $img_dir; ?>/coupon-bg.png" alt="Coupon">

                </div>
                <!-- End c20-coupon -->

            </div>

            <div class="col-lg-4 col-md-12">

                <div class="text-center c20-coupon print-coupon">

                    <div class="c20-coupon-inner">

                        <h2 class="coupon-price"><span>Free</span></h2>


                        <p class="coupon-subtitle">Sewer Camera Inspection ($199 value) with Drain Cleaning Service.</p>


                        <div class="desclimer">Our full motion video capture device works from inside the pipe or drain to fully assess the problem so we can fix it right the first time.</div>

                        <div class="coupon-call font-800">
                            <a href="tel:773-219-1200">Call Now: (773) 219-1200</a>
                        </div>


                    </div>

                    <div class="coupon-desclimer">*A few restrictions may apply. Call for details.</div>

                    <img src="<?php echo $img_dir; ?>/coupon-bg.png" alt="Coupon">

                </div>
                <!-- End c20-coupon -->

            </div>

            <div class="col-lg-4 col-md-12">

                <div class="text-center c20-coupon">

                    <div class="c20-coupon-inner">

                        <div class="coupon-no-text"><img src="/wp-content/uploads/2020/08/greensky-c20.png" alt="greensky"></div>

                        <div class="coupon-call font-800"><a href="/financing/">Apply Now</a></div>

                    </div>



                    <img src="<?php echo $img_dir; ?>/coupon-bg.png" alt="Coupon">

                </div>
                <!-- End c20-coupon -->

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center pt-xl-5">

                <div class="">
                    <span class="d-block h3 text-brand">Receive these coupons and more exclusive offers:</span>

                    <div class="coupon-share">
                        <form action="/">
                            <input type="email" validate placeholder="Email">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
