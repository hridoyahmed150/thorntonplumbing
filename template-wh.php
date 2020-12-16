<?php

/**
 * Template Name: Water Heater
 *
 * @package c20
 */

get_header();

while ( have_posts() ) : the_post();

$home_meta 		= 'c20_home_';
$landing_meta 	= 'c20_landing_';
$img_dir 		= get_template_directory_uri().'/assets/img';

$phone 			= c20_cmb2_get_general('general_phone'); 


include 'sections/wh/banner.php';

include 'sections/wh/content.php';

include 'sections/wh/wh.php';

include 'sections/wh/testimonials.php';

include 'sections/service-area.php';



endwhile; // End of the loop. ?>


<?php get_footer();
