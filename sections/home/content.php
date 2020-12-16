<?php

$home_meta = 'c20_home_';

$content_blurbs = get_post_meta( get_the_ID(), $home_meta . 'content', 1 );

$blurb_image = $blurb_link = '';

?>


<div class="c20-sec">

	<div class="container">
	
		<div class="row">
		
			<div class="col-lg-8 col-xl-9 mb-5 mb-lg-0">

				<div class="entry-content">

					<h2 class="h1 mb-4 text-dark" data-aos-duration="600" data-aos-delay="400" data-aos="fade-down">Professional Plumbing & Heating Services in Milford, CT</h2>

					<div class="row flex-xl-row-reverse">

						<div class="col-12 col-xl-6 mb-4 mb-xl-0" data-aos-duration="800" data-aos-delay="600" data-aos="fade-left">

							<div class="embed-responsive embed-responsive-16by9">

								<iframe class="embed-responsive-item lozad" data-src="https://www.youtube.com/embed/Shmiy_OeUow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							</div>
							
						</div>

						<div class="col-12 col-xl-6 pr-xl-4" data-aos-duration="800" data-aos-delay="600" data-aos="fade-right">

							<p class="mb-0 pr-xl-4">Rick’s Plumbing has been a mainstay within New Haven and Fairfield Counties since 1992. As a premier local plumbing service, we have been around for the community to complete any type of job - big or small. We only hire skilled professional plumbers to complete each task for our customers, ensuring the highest level of service is achived within the shortest time possible. Whether you are looking for plumbing service or heating service, we’ve got you covered.</p>
							
						</div>

						
					</div>

				</div>

			</div>

			
			<div class="col-lg-4 col-xl-2 offset-xl-1">

				<div class="row justify-content-center text-center align-items-center">

					<div class="col-6 col-sm-4 col-lg-12 mb-lg-4" data-aos-duration="700" data-aos-delay="800" data-aos="zoom-in-up">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-angies.png" alt="Angies List">
					</div>

					<div class="col-6 col-sm-4 col-lg-12 mb-lg-4" data-aos-duration="700" data-aos-delay="900" data-aos="zoom-in-up">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-bbb.png" alt="BBB">
					</div>

					<div class="col-6 col-sm-4 col-lg-12 mb-lg-4" data-aos-duration="700" data-aos-delay="1000" data-aos="zoom-in-up">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-homeadvisor.png" alt="Home Advisor">
					</div>

				</div>

	
			</div>

		</div>

		<div class="row">

			<div class="col-sm-12">
				<div class="my-4 my-sm-5" style="border-bottom:1px dashed #000; opacity: .1;"></div>
			</div>

		</div>


		<?php 

			$coupons = get_post_meta( get_the_ID(), $landing_meta.'coupons', true );
			$coupon_title = $coupon_image = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
		 ?>

		<?php if($coupons) : ?>

			<div class="row coupon-list text-center">

				<?php foreach ( (array) $coupons as $key => $coupon_data ) :

					$coupon_image 		= $coupon_data[$landing_meta.'coupon_image']; 
					$coupon_title 		= $coupon_data[$landing_meta.'coupon_title']; 
					$coupon_subtitle 	= $coupon_data[$landing_meta.'coupon_subtitle'];
					$coupon_amount 		= $coupon_data[$landing_meta.'coupon_amount'];
					$coupon_description = $coupon_data[$landing_meta.'coupon_description'];  ?>

					<?php if($coupon_title && $coupon_amount && $coupon_image ) : ?>

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

		<?php endif; ?>


	</div>

</div>

