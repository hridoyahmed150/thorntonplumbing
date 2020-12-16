<?php 

$testimonials = get_post_meta( get_the_ID(), $landing_meta.'testimonials', true );
$testimonial =  $clients_name =  $clients_role = '';

?>
 
<div class="c20-sec pt-3 c20-sec-light c20-sec-wh-review">
	
	<div class="container-fluid">

		<div class="row">

			<div class="wh-reviews">

				<div class="wh-award-logo mb-4 mb-lg-0" data-aos-duration="700" data-aos="fade-right">

					<div class="p-2">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-angies.png" alt="Angies List">	
					</div>

					<div class="p-2">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-bbb.png" alt="BBB">	
					</div>

					<div class="p-2">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/logo-homeadvisor.png" alt="Home Advisor">	
					</div>

					<div class="p-2 review-buzz">
						<script type="text/javascript" async src="//www.reviewbuzz.com/app/public/js/widget.js?id=1323"></script>
						<noscript>
							<a href="//www.reviewbuzz.com/web-widget/RicksPlumbingServiceInc" style="font-size:12px;">
							<img width="170" style="cursor: pointer" src="//www.reviewbuzz.com/app/public/images/popup-widget/reviewbuzz_widget_icon.png" alt="Ricks Plumbing Service Inc - 152 Customer Reviews - Milford, CT"><br>Ricks Plumbing Service Inc - 152 Customer Reviews - Milford, CT</a>
						</noscript>
					</div>
					
				</div>
				
				<?php if($testimonials) : ?>

				<div class="emg-testimonial-slider" data-aos-duration="700" data-aos="fade-left">

					<div class="emg-testimonial-slider-init">
						
						<?php foreach ( (array) $testimonials as $key => $testimonial_data ) :

							$testimonial = $testimonial_data[$landing_meta.'testimonial']; 
							$clients_name = $testimonial_data[$landing_meta.'clients_name'];
							$clients_role = $testimonial_data[$landing_meta.'clients_role'];  ?>

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
			</div>

		</div>

	</div>

</div>
