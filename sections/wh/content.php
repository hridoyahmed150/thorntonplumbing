<div class="c20-sec">

	<div class="container">
	
		<div class="row">
		
			<div class="col-lg-12 text-center mb-3 mb-xl-5" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="300">

				<h3 class="h2 mb-3">Water Heater Repair and Installation In New Haven and Fairfield Counties.</h3>

				<p>Hot water is esential to a healthy life. We all know this but often don’t know what to do when it suddenly stops being there. Rick’s Plumbing has a solution for every budget and schedule. We know you’re busy and that you just want to get back to the important things in life. Let us worry about this important thing. Give us a call. We’re able and ready to solve all of your plumbing and water heater problems.</p>

			</div>

			<div class="col-lg-12 col-xl-10 offset-xl-1 d-flex flex-wrap align-items-lg-center justify-content-between mb-3 mb-xl-5 pb-4">

				<ul class="list-1 mb-3 mb-md-4 mb-lg-0">
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">Tank Water Heaters</li>
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="250">Tankless Water Heaters</li>
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Point Of Use Water Heaters</li>
				</ul>

				<ul class="list-1 mb-5 mb-md-4 mb-lg-0 order-lg-1">
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="350">We Repair All Makes and Models</li>
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="400">Installation and Replacements</li>
					<li data-aos="fade-up" data-aos-duration="700" data-aos-delay="450">Water Purification Systems Available.</li>
				</ul>

				<?php 

					$coupons = get_post_meta( get_the_ID(), $landing_meta.'coupons', true );
					$coupon_title = $coupon_image = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
					$loop = 250;
				 ?>

				<?php if($coupons): ?>
					<div class="d-flex mx-auto mx-lg-0 flex-wrap flex-lg-column align-items-lg-center justify-content-center text-center wh-coupon-list">

						<?php foreach ( (array) $coupons as $key => $coupon_data ) :

							$coupon_image 		= $coupon_data[$landing_meta.'coupon_image']; 
							$coupon_title 		= $coupon_data[$landing_meta.'coupon_title']; 
							$coupon_subtitle 	= $coupon_data[$landing_meta.'coupon_subtitle'];
							$coupon_amount 		= $coupon_data[$landing_meta.'coupon_amount'];
							$coupon_description = $coupon_data[$landing_meta.'coupon_description'];  ?>


							<?php if($coupon_title && $coupon_amount && $coupon_image ) : ?>

								<div class="image-coupon" class="p-2" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="<?php echo $loop; ?>">

									<div class="print-coupon">

										<img class="lozad" data-src="<?php echo $coupon_image; ?>" alt="Coupon">

										<?php if( shortcode_exists( 'coupon' ) ) : ?>

											<?php echo do_shortcode( '[coupon wrapper="off" title="'.$coupon_title.'" amount="'.$coupon_amount.'" subtitle="'.$coupon_subtitle.'" description="'.$coupon_description.'"]' ); ?>
										<?php endif; ?>

									</div>
								</div>

							<?php endif; ?>

						<?php $loop = $loop + 50; endforeach; ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-lg-12 text-center" data-aos="zoom-out" data-aos-duration="600" data-aos-delay="300">
				<h2 class="mb-4">Ricks Makes it <span class="hr-border">Easy</span> for You!</h2>

				<p><span class="hr-border">First:</span> Contact Us To Make Your Appointment.</p>
				<p><span class="hr-border">Next:</span> Select Your Water Heater & Warranty From Our Expert Recommendations.</p>
				<p><span class="hr-border">Then:</span> Enjoy Your Hot Water. We’ll Install it Right Then.</p>

			</div>

			<div class="col-lg-12 d-flex flex-wrap wh-brand-logo" data-aos="zoom-out" data-aos-duration="600" data-aos-delay="300">

				<img class="p-1 p-sm-3 p-md-1 m-auto lozad" data-src="<?php echo $img_dir; ?>/wh-brand/logo-bwc.png" alt="">
				<img class="p-1 p-sm-3 p-md-1 m-auto lozad" data-src="<?php echo $img_dir; ?>/wh-brand/logo-rinnai.png" alt="">
				<img class="p-1 p-sm-3 p-md-1 m-auto lozad" data-src="<?php echo $img_dir; ?>/wh-brand/logo-navien.png" alt="">
				<img class="p-1 p-sm-3 p-md-1 m-auto lozad" data-src="<?php echo $img_dir; ?>/wh-brand/logo-rheem.png" alt="">
				<img class="p-1 p-sm-3 p-md-1 m-auto lozad" data-src="<?php echo $img_dir; ?>/wh-brand/logo-ao-smith.png" alt="">
				
			</div>

		</div>

	</div>

</div>

