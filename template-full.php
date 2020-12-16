<?php
/**
 * Template Name: Full Width
 *
 * @package c20
 */


get_header();

while(have_posts()) :  ?>


<div class="c20-sec">
	<div class="container">
		<div class="row">
			<div <?php post_class( 'col-sm-12' ); ?>>
				<div class="entry-content">
					<?php
						the_post();

						the_content( );
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php endwhile; 

get_footer();

