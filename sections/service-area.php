<?php 

$zip_title = get_post_meta( get_the_ID(), $landing_meta . 'zip_title', 1 );
$zip_list = get_post_meta( get_the_ID(), $landing_meta . 'zip_list', 1 );

$zip_list_formated = explode(',' , $zip_list); 

$area_title = get_post_meta( get_the_ID(), $landing_meta . 'area_title', 1 );
$city_list = get_post_meta( get_the_ID(), $landing_meta . 'city_list', 1 );
$city_list_formated = explode("\n" , $city_list); 

?>
 
<div class="c20-sec py-0 section-service-area">

	<div class="service-area">

		<div class="embed-responsive embed-responsive-21by9">
			<iframe class="embed-responsive-item lozad" data-src="https://www.google.com/maps/d/embed?mid=1lPBVvWk_LtqhdbPHmyz-7OgroCxAd2Wk"></iframe>
		</div>

		<?php if($zip_list_formated || $city_list_formated) : ?>

			<div class="floating-lists">

				<?php if($zip_list_formated) : ?>

					<div class="floating-list" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
						<h3 class="list-title"><?php echo ($zip_title) ? $zip_title : 'ZIP CODES WE SERVE'; ?></h3>
						<ul>
						<?php foreach($zip_list_formated as $zip) : ?>
							<li><?php echo $zip; ?></li>
						<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if($city_list_formated): ?>

					<div class="floating-list" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
						<h3 class="list-title"><?php echo ($area_title) ? $area_title : 'Areas we serve' ?></h3>
						<ul>

						<?php foreach($city_list_formated as $city) :  ?>
						
							<?php 
								$city_formated = explode('|' , $city);
								$city_name = trim($city_formated[0]);
								$city_link = trim($city_formated[1]); ?>

							<li>
								<?php if( !empty( $city_link ) ) : ?>

									<a href="<?php echo $city_link; ?>"><?php echo $city_name; ?></a>

								<?php else: ?>

									<?php echo $city_name; ?>

								<?php endif; ?>

							</li>

						<?php endforeach; ?>
						</ul>
					</div>

				<?php endif; ?>
				
			</div>
		<?php endif; ?>

	</div> 
</div>
