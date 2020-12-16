<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package c20
 */

get_header(); ?>

	<div class="c20-sec">

		<div class="container">

			<div class="row">

				<div class="col-12 col-sm-10 col-lg-7 col-xl-8 offset-sm-1 offset-lg-0 mb-5">

					<div class="entry-content pr-xl-4">

						<?php if ( have_posts() ) : ?>

							<?php
							while ( have_posts() ) :

								the_post();
								get_template_part( 'template-parts/content', 'post' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
						
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>


<?php
get_footer();
