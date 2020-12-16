<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package c20
 */

get_header();
?>

<div class="c20-sec">
	<div class="container">
		<div class="row">

			<div <?php post_class( 'col-12 col-sm-10 col-lg-7 col-xl-8 offset-sm-1 offset-lg-0 mb-5' ); ?>>
				<div class="entry-content pr-xl-4">
				
					<?php while ( have_posts() ) :
						the_post();

						the_content(); ?>

						<ul class="entry-meta">
							<li>Published at <?php echo get_the_date( 'F j, Y' ); ?></li>
							<li>Category: <?php the_category( ',') ;?></li>
						</ul><!-- .entry-meta -->

						<?php 

					endwhile;
					?>			
				</div>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer();
