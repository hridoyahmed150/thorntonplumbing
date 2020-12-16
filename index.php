<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

get_header(); ?>

	<div class="c20-sec">

		<div class="container">

			<div class="row">

				<div class="col-12 col-sm-10 col-lg-7 col-xl-8 offset-sm-1 offset-lg-0 mb-5">

					<div class="entry-content pr-xl-4">
						
						<?php
						if ( have_posts() ) : ?>

							<?php 

							while ( have_posts() ) : the_post(); ?>
								
								<?php get_template_part( 'template-parts/content', 'post' ); ?>	

							<?php endwhile; ?>

							<div class="c20_pagination">
								<?php 
									global $wp_query;

									$big = 999999999; // need an unlikely integer

									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => '?paged=%#%',
										'current' => max( 1, get_query_var('paged') ),
										'total' => $wp_query->max_num_pages
									) );

								 ?>
							</div>

						<?php 
						else :
						get_template_part( 'template-parts/content', 'none' ); endif; ?>
					</div>
					
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>


<?php
get_footer();
