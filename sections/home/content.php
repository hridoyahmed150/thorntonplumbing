<?php

$home_meta = 'c20_home_';

$content_blurbs = get_post_meta( get_the_ID(), $home_meta . 'content', 1 );

$blurb_image = $blurb_link = '';

?>
<div class="c20-sec-content">

	<div class="container">
	
		<div class="row">

            <div class="col-sm-12 single-post pb-5">

                <h2 class="h1 text-blue">Plumbing Company Serving Noblesville Area</h2>

                <p class="h6">Thornton Plumbing has been the plumber of choice in Noblesville and the surrounding areas for more than 15 years. Our plumbing company always provides fast, professional service at the most competitive prices in the industry. All our licensed plumbers are skilled in a wide range of plumbing services. While our plumbers use the most modern plumbing tools and techniques, we hold onto our traditional customer service values. We pride ourselves on being honest and direct with our clients, and we want you to have all the information you need so you can make an informed decision about your plumbing. Our goal is to build lasting customer relationships with all our clients. You, our customer, are our most valuable and appreciated resource. </p>

            </div>
            <div class="col-sm-12 single-post pb-5">

                <h3 class="text-blue">Our Services</h3>

                <p class="h6">We are a full-service plumbing company that specializes in all types of plumbing services—and beyond! We only carry and install quality products, so you know the job will be done right the first time when you call Thornton Plumbing.</p>

            </div>

            <div class="col-sm-12 single-post pb-5">

                <h3 class="text-blue">Emergency Plumbing Services</h3>

                <p class="h6">Thornton Plumbing understands that plumbing mishaps don’t always happen during business hours. That is why we offer emergency plumbing services at your request. Simply call our emergency number and leave a brief message. Our emergency plumbers will return your call and quickly be dispatched to your location. No need to put your business or household on pause due to a plumbing emergency; call the experts at Thornton Plumbing and get it fixed right away!</p>

            </div>

		</div>


		<?php 

			$coupons = get_post_meta( get_the_ID(), $landing_meta.'coupons', true );
			$coupon_title = $coupon_image = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
			var_dump($landing_meta);
		 ?>

		<?php if($coupons) : ?>

			<div class="row">
                <div class="col-sm-8 coupon-list d-flex">

				<?php foreach ( (array) $coupons as $key => $coupon_data ) :
					$coupon_image 		= $coupon_data[$landing_meta.'coupon_image'];
					$coupon_title 		= $coupon_data[$landing_meta.'coupon_title'];
					$coupon_subtitle 	= $coupon_data[$landing_meta.'coupon_subtitle'];
					$coupon_amount 		= $coupon_data[$landing_meta.'coupon_amount'];
					$coupon_description = $coupon_data[$landing_meta.'coupon_description'];  ?>

					<?php if($coupon_title && $coupon_amount && $coupon_image && $key < 2) : ?>

						<div class="mb-4 mb-lg-0 image-coupon" data-aos-duration="500" data-aos-delay="500" data-aos="zoom-in">

							<div class="print-coupon">

								<img class="lozad" data-src="<?php echo $coupon_image; ?>" alt="<?php echo $coupon_title; ?>">

								<?php if( shortcode_exists( 'coupon' ) ) : ?>

									<?php echo do_shortcode( '[coupon wrapper="off" title="'.$coupon_title.'" amount="'.$coupon_amount.'" subtitle="'.$coupon_subtitle.'" description="'.$coupon_description.'"]' ); ?>
								<?php endif; ?>

							</div>

						</div>

					<?php endif; ?>

				<?php endforeach; ?>
                </div>
                <div class="col-sm-4 position-relative coupon-slogan">
                    <img class="slogan" src="<?php  echo $img_dir;?>/slogan.png" alt="">
                </div>
			</div>

		<?php endif; ?>


	</div>

</div>

