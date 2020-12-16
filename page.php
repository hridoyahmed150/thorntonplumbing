<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

get_header();

$img_dir			= get_template_directory_uri().'/assets/img';
$global_blog_page	= c20_cmb2_get_general('general_blog_page'); 

while(have_posts()) :  ?>


	<div class="c20-sec">

		<div class="container">

			<div class="row">
				
				<div <?php post_class('col-12 col-sm-10 col-lg-7 col-xl-8 offset-sm-1 offset-lg-0 mb-5'); ?>>

					<div class="entry-content pr-xl-4">
						<?php
							the_post();
							the_content();
						?>
					</div>

				</div>


				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>

	<?php include 'sections/blog.php'; ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer();

