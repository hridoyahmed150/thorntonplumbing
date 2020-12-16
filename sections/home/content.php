<?php

$home_meta = 'c20_home_';

$content_blurbs = get_post_meta( get_the_ID(), $home_meta . 'content', 1 );

$blurb_image = $blurb_link = '';

?>


<div class="c20-sec">

	<div class="container">
	
		<div class="row">

            <div class="col-sm-12">

            </div>

		</div>


		<?php 

			$coupons = get_post_meta( get_the_ID(), $landing_meta.'coupons', true );
			$coupon_title = $coupon_image = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
		 ?>

<!--		--><?php //if($coupons) : ?>
<!---->
<!--			<div class="row coupon-list text-center">-->
<!---->
<!--				--><?php //foreach ( (array) $coupons as $key => $coupon_data ) :
//
//					$coupon_image 		= $coupon_data[$landing_meta.'coupon_image'];
//					$coupon_title 		= $coupon_data[$landing_meta.'coupon_title'];
//					$coupon_subtitle 	= $coupon_data[$landing_meta.'coupon_subtitle'];
//					$coupon_amount 		= $coupon_data[$landing_meta.'coupon_amount'];
//					$coupon_description = $coupon_data[$landing_meta.'coupon_description'];  ?>
<!---->
<!--					--><?php //if($coupon_title && $coupon_amount && $coupon_image ) : ?>
<!---->
<!--						<div class="mb-4 mb-lg-0 image-coupon" data-aos-duration="500" data-aos-delay="500" data-aos="zoom-in">-->
<!---->
<!--							<div class="print-coupon">-->
<!---->
<!--								<img class="lozad" data-src="--><?php //echo $coupon_image; ?><!--" alt="--><?php //echo $coupon_title; ?><!--">-->
<!---->
<!--								--><?php //if( shortcode_exists( 'coupon' ) ) : ?>
<!---->
<!--									--><?php //echo do_shortcode( '[coupon wrapper="off" title="'.$coupon_title.'" amount="'.$coupon_amount.'" subtitle="'.$coupon_subtitle.'" description="'.$coupon_description.'"]' ); ?>
<!--								--><?php //endif; ?>
<!---->
<!--							</div>-->
<!---->
<!--						</div>-->
<!---->
<!--					--><?php //endif; ?>
<!---->
<!--				--><?php //endforeach; ?>
<!---->
<!--			</div>-->
<!---->
<!--		--><?php //endif; ?>


	</div>

</div>

