<?php

// $home_meta = 'c20_home_';

// $content_blurbs = get_post_meta( get_the_ID(), $home_meta . 'content', 1 );

// $blurb_image = $blurb_link = '';


$carrer_page = c20_cmb2_get_general('general_carrer_page'); 

?>

<div class="c20-sec py-5 has-image-bg lozad" style="background-color:#2D8CC4;" data-background-image="<?php echo $img_dir; ?>/cta-bg.png">

	<div class="container">

		<div class="row">

			<div class="col-12 col-md-10 offset-md-1 col-xl-12 offset-xl-0 text-center inline-cta">
				
				<h2 class="text-light font-600 m-0 mb-4" data-aos="fade-right" data-aos-delay="500">Interested in working for Ricks’s?  Check out exiciting oppurtunites here !</h2>

				<?php if($carrer_page) : ?>
					<a href="<?php echo ($carrer_page) ? $carrer_page : '#'; ?>" class="btn btn-primary btn-sm" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="500">Apply Online</a>
				<?php endif; ?>

			</div>

		</div>

	</div>
</div>















