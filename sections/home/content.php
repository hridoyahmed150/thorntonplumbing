<?php

$home_meta = 'c20_home_';

$content_blurbs = get_post_meta( get_the_ID(), $home_meta . 'content', 1 );
$blogs = get_post_meta( get_the_ID(), $home_meta . 'blog', 1 );

$blurb_image = $blurb_link = '';

?>

<div class="c20-sec-content">

	<div class="container">
	
		<div class="row">
            <?php
                foreach ((array)$blogs as $blog):
                $blog_title = $blog[$home_meta . 'blog_heading'];
                $blog_description = $blog[$home_meta . 'blog_description'];
                $blog_font = $blog[$home_meta . 'font_size'];
            ?>
                <div class="col-sm-12 single-post pb-5">

                    <<?php echo ($blog_font) ? $blog_font : 'h3'; ?> class="<?php echo ($blog_font == "h2") ? 'h1' : ''; ?> text-blue">
                        <?php echo ($blog_title) ? $blog_title : ""; ?>
                    </<?php echo ($blog_font) ? $blog_font : 'h3'; ?>>
    
                        <p class="h6"><?php echo ($blog_description) ? $blog_description : ""; ?></p>

                </div>
            <?php endforeach; ?>
		</div>


		<?php 

			$coupons = get_post_meta( get_the_ID(), $landing_meta.'coupons', true );
			$coupon_title = $coupon_image = $coupon_subtitle =  $coupon_amount = $coupon_description = '';
		 ?>

		<?php if($coupons) : ?>

			<div class="row">
                <div class="col-sm-12 col-lg-8 coupon-list d-flex my-5">

				<?php foreach ( (array) $coupons as $key => $coupon_data ) :
					$coupon_image 		= $coupon_data[$landing_meta.'coupon_image'];
					$coupon_title 		= $coupon_data[$landing_meta.'coupon_title'];
					$coupon_subtitle 	= $coupon_data[$landing_meta.'coupon_subtitle'];
					$coupon_amount 		= $coupon_data[$landing_meta.'coupon_amount'];
					$coupon_description = $coupon_data[$landing_meta.'coupon_description'];
					?>

					<?php if($coupon_title && $coupon_amount && $coupon_image) : ?>

						<div class="mb-4 mb-lg-0 image-coupon " data-aos-duration="500" data-aos-delay="500" data-aos="zoom-in">

							<div class="print-coupon">
<!--                                <div class="coupon">-->
<!--                                    <div class="coupon-top">-->
<!--                                        <img src="--><?php //echo $img_dir; ?><!--/coupon-logo.png" alt="" style="width: 90px">-->
<!--                                        <a href="#">ThrontonPlumbingllc.com</a>-->
<!--                                    </div>-->
<!--                                    <div class="coupon-price">-->
<!--                                        $ <strong>--><?php //echo $coupon_amount ?><!--</strong> off-->
<!--                                    </div>-->
<!--                                    <div class="coupon-body">-->
<!--                                        <div class="coupon-title">-->
<!--                                            --><?php //echo $coupon_title ?>
<!--                                        </div>-->
<!--                                        <div class="coupon-subtitle text-center">-->
<!--                                            --><?php //echo $coupon_subtitle ?>
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="coupon-footer text-center">-->
<!--                                        --><?php //echo $coupon_description ?>
<!--                                    </div>-->
<!--                                </div>-->
								<img class="lozad" data-src="<?php echo $coupon_image; ?>" alt="<?php echo $coupon_title; ?>">

								<?php if( shortcode_exists( 'coupon' ) ) : ?>

									<?php echo do_shortcode( '[coupon wrapper="off" title="'.$coupon_title.'" amount="'.$coupon_amount.'" subtitle="'.$coupon_subtitle.'" description="'.$coupon_description.'"]' ); ?>
								<?php endif; ?>

							</div>

						</div>

					<?php endif; ?>

				<?php endforeach; ?>
                </div>
                <div class="col-sm-12 col-lg-4 position-relative coupon-slogan">
                    <img class="slogan" src="<?php  echo $img_dir;?>/slogan.png" alt="">
                </div>
			</div>

		<?php endif; ?>


	</div>

</div>

