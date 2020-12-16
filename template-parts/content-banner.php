<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */


global $post;


$post_id = get_the_ID();

if(is_home() && !is_front_page()){
	$post_id = get_option( 'page_for_posts' );
}



$show_page_title = get_post_meta( $post_id, 'c20_common_title_show', 1 ); 

$prefix = 'c20_global_banner_';


$global_page_banner = c20_cmb2_get_components( 'components_page_banner_title' );


$final_banner_title = get_the_title($post_id);


if(is_search()){
	$final_banner_title = 'Search Results for: '.'<span>'.get_search_query().'</span>';
}

if(is_404()){
	$final_banner_title = 'Oops! That page can&rsquo;t be found.';
}

if(is_archive()){
	$final_banner_title = get_the_archive_title();
}


$banner_title 		= get_post_meta( $post_id, $prefix . 'title', 1 );
$banner_alignment 	= get_post_meta( $post_id, $prefix . 'alignment', 1 );
$banner_title_tag 	= get_post_meta( $post_id, $prefix . 'tag', 1 );


if(empty($banner_title_tag)) {
	$banner_title_tag = 'h2';
}

if(is_single()){
	$final_banner_title	 = get_the_title();
	$banner_title_tag = 'h1';
}

if(is_home() && !is_front_page()){
	$post_id = get_option( 'page_for_posts' );
}

// var_dump($banner_title);

if($banner_title){
	$final_banner_title = $banner_title;
}

// if(is_page() && empty($banner_title)) {
// 	$final_banner_title = $global_page_banner;
// }

if($show_page_title) {
	$final_banner_title = get_the_title($post_id);
}



$banner_class = array('c20-sec has-image-bg c20-sec-page-banner lozad');

if($banner_alignment){
	switch ($banner_alignment) {

		case 'right':
			$banner_class[] = 'text-right';
		break;
		
		case 'center':
			$banner_class[] = 'text-center';
		break;
		
		default:
			$banner_class[] = 'text-left';
		break;
	}
}

?>
 

<div class="<?php echo implode(' ', $banner_class); ?>" style="background-color:#364D7E;" data-background-image="<?php echo get_template_directory_uri(); ?>/assets/img/page-banner.png">

	<div class="container py-lg-2">
		<div class="row py-2 py-md-3 py-lg-0">
			<div class="col-sm-12">
				<?php if($show_page_title || $final_banner_title) : ?>

					<<?php echo $banner_title_tag ?> class="text-light h1 m-0 banner-title" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300"><?php echo $final_banner_title; ?></<?php echo $banner_title_tag ?>>

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
