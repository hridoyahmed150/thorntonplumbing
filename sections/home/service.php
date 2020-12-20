<?php 
 	$service_heading = get_post_meta( get_the_ID(), $home_meta . 'service_heading', 1 );
 	$services = get_post_meta( get_the_ID(), $home_meta . 'services', 1 );
	$service_title	= $service_text 	= $service_url 	= $service_icon = '';

 ?>	

<div class="c20-sec pb-3 pb-md-4 has-image-bg lozad" style="background-color:#172750;" data-background-image="<?php echo $img_dir; ?>/service-bg.png">
	<div class="container">

		<?php if($service_heading) : ?>

		<div class="c20-heading pt-3" data-aos="fade-down">
			<h2 class="c20-title text-center text-light"><?php echo $service_heading; ?></h2>
		</div> 
		<?php endif; ?>

		<?php 


		if($services) : 

			$service_loop = 300; ?>

			<div class="row pt-5">
				<?php 

				foreach ( (array) $services as $key => $service ) :
					$service_title = $service[$home_meta.'service_title'];
					$service_text = $service[$home_meta.'service_text'];
					$service_url = $service[$home_meta.'service_url'];
					$service_icon = $service[$home_meta.'service_icon']; ?>

					<div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-4 offset-md-0 text-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="<?php echo $service_loop; ?>">

						<div class="c20-iconbox mb-5 px-xl-4">
							
							<div class="c20-iconbox-thumb mb-4">
								<a href="<?php echo $service_url ? esc_url( $service_url) : '#'; ?>">
									<img class="lozad" data-src="<?php echo $service_icon; ?>" alt="<?php echo $service_title; ?>">
								</a>
							</div>

							<div class="c20-iconbox-body">
								<h2 class="h3 m-0 mb-3 text-uppercase"><a class="text-light" href="<?php echo $service_url ? esc_url( $service_url) : '#'; ?>"><?php echo $service_title; ?></a></h2>

								<div class="c20-iconbox-text text-light">
									<?php echo $service_text; ?>
								</div>
							</div>
						</div>
						
					</div> <?php $service_loop=$service_loop+200; ?>
				<?php endforeach;  ?>

			</div>
		<?php endif; ?>

	</div>
</div>
