<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package c20
 */

global $post;

$is_wh_page = get_post_meta( $post->ID, 'c20_common_header_v2', 1 );

?>


<div class="col-12 col-sm-10 col-lg-5 col-xl-4 offset-sm-1 offset-lg-0">
	
	<aside id="c20-sidebar" class="main-sidebar widget-area">
        <h3 class="widget-title">
            Commercial Services
        </h3>
		<?php
		
			if($is_wh_page == 'on') {

				dynamic_sidebar( 'sidebar-2' );

			} else {

				dynamic_sidebar( 'sidebar-1' );
			}
		?>
	</aside>
	
</div>

