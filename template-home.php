<?php

/**
 * Template Name: Homepage
 *
 * @package c20
 */

get_header();

while ( have_posts() ) : the_post();
	
$home_meta 		= 'c20_home_';
$landing_meta 	= 'c20_landing_';
$img_dir 		= get_template_directory_uri().'/assets/img';


$global_blog_page 		= c20_cmb2_get_general('general_blog_page'); 
$global_contact_page 	= c20_cmb2_get_general('general_contact_page'); 
$global_about_us 		= c20_cmb2_get_general('general_about_us'); 
$review_buzz_url 		= c20_cmb2_get_social('social_review_buzz_url'); 
$bbb_url 				= c20_cmb2_get_social('social_bbb_url'); 


include 'sections/home/banner.php';

include 'sections/home/utility.php';

    include 'sections/home/content.php';

    include 'sections/home/testimonials.php';

    include 'sections/home/service.php';

    include 'sections/home/cta.php';

include 'sections/service-area.php';

include 'sections/blog.php';


endwhile; // End of the loop. ?>


<?php get_footer();
