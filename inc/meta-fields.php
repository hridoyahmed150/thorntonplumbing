<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'c20_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */



/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function c20_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

function c20_hide_cmb_form_this_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.

	$page_list_without_banner = array(
		get_option('page_on_front'), // front page
	);

	//if ($cmb->object_id ==  get_option( 'page_on_front' ) == $cmb->object_id ) {

	if ( in_array($cmb->object_id, $page_list_without_banner) ) {
		return false;
	}

	return true;
}


add_action( 'cmb2_admin_init', 'c20_register_common_metabox' );
function c20_register_common_metabox() {

	$cmb_common = new_cmb2_box( array(
		'id'            => 'c20_common_metabox',
		'title'         => esc_html__( 'Common Metabbox', 'cmb2' ),
		'object_types'  => array( 'page', 'post' ), // Post type
		'context'    	=> 'side',
		'priority'   	=> 'low',
	) );

	$cmb_common->add_field( array(
		'name'	=> esc_html__( 'Water Heater', 'cmb2' ),
		'desc'	=> esc_html__( 'Yes', 'cmb2' ),
		'id'  	=> 'c20_common_header_v2',
		'type'	=> 'checkbox',
	) );

	$cmb_common->add_field( array(
		'name'	=> esc_html__( 'Show Page Title', 'cmb2' ),
		'desc'	=> esc_html__( 'Yes', 'cmb2' ),
		'id'  	=> 'c20_common_title_show',
		'type'	=> 'checkbox',
	) );
}


add_action( 'cmb2_admin_init', 'c20_register_global_banner_metabox' );
function c20_register_global_banner_metabox() {
	$prefix = 'c20_global_banner_';

	$cmb_c20_gloabl_banner = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Page Metabox', 'cmb2' ),
		'object_types'  => array( 'page', 'service' ), // Post type
		// 'show_on' => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'show_on_cb' => 'c20_hide_cmb_form_this_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
	) );

	/*Start Home Page Banner*/

	$cmb_c20_gloabl_banner->add_field( array(
		'before_row'   => '<h1>Page Banner</h1><hr>',
		'name'       => esc_html__( 'Banner Title', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'textarea_small',
	) );

	// $cmb_c20_gloabl_banner->add_field( array(
	// 	'name'       => esc_html__( 'Banner Description', 'cmb2' ),
	// 	'id'         => $prefix . 'banner_description',
	// 	'type'       => 'textarea_small',
	// ) );

	// $cmb_c20_gloabl_banner->add_field( array(
	// 	'name' => esc_html__( 'Banner Button Text', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_btn_txt',
	// 	'type' => 'text_medium',
	// ) );

	// $cmb_c20_gloabl_banner->add_field( array(
	// 	'name' => esc_html__( 'Banner Button URL', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_btn_url',
	// 	'type' => 'text_url',
	// ) );

	// $cmb_c20_gloabl_banner->add_field( array(
	// 	'name' => esc_html__( 'Banner Image', 'cmb2' ),
	// 	'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
	// 	'id'   => $prefix . 'banner_image',
	// 	'type' => 'file',
	// ) );

	$cmb_c20_gloabl_banner->add_field( array(
		'name'             => 'Heading Tag',
		'desc'             => 'Select HTML tag for Heading',
		'id'   				=> $prefix . 'tag',
		'type'             => 'select',
		'default'          => 'div',
		'options'          => array(
			'h1' 	=> __( 'h1', 'cmb2' ),
			'h2'   	=> __( 'h2', 'cmb2' ),
			'h3'    => __( 'h3', 'cmb2' ),
			'h4'    => __( 'h4', 'cmb2' ),
			'h5'    => __( 'h5', 'cmb2' ),
			'h5'    => __( 'h5', 'cmb2' ),
			'h6'    => __( 'h5', 'cmb2' ),
			'div'    => __( 'div', 'cmb2' ),
		),
	) );

	$cmb_c20_gloabl_banner->add_field( array(
		'name'             => 'Content Alignment',
		'desc'             => 'Select banner content alignment',
		'id'   				=> $prefix . 'alignment',
		'type'             => 'select',
		'default'          => 'left',
		'options'          => array(
			'center' => __( 'Center', 'cmb2' ),
			'left'   => __( 'Left', 'cmb2' ),
			'right'  => __( 'Right', 'cmb2' ),
		),
	) );
}

add_action( 'cmb2_admin_init', 'c20_register_home_metabox' );

function c20_register_home_metabox() {

	$prefix = 'c20_home_';

	$cmb_c20_home = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Home Page Metabox', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on' 		=> array( 'key' => 'page-template', 'value' => 'template-home.php' ),
		'context'    	=> 'normal',
		'priority'   	=> 'high',

	) );

	/*Start Home Page Banner*/
	$cmb_c20_home->add_field( array(
		'before_row'   		=> '<h1>Home Banner</h1><hr>',
		'name' => esc_html__( 'Banner Background Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'banner_bg',
		'type' => 'file',
	) );

	$cmb_c20_home->add_field( array(
		'name'       		=> esc_html__( 'Banner Title', 'cmb2' ),
		'id'         		=> $prefix . 'banner_title',
		'type'       		=> 'textarea_small',
	) );


	/*Start Home Page Service*/
	$cmb_c20_home->add_field( array(
		'before_row'   => '<h1>Service</h1><hr>',
		'name'       => esc_html__( 'Service Section Title', 'cmb2' ),
		'id'         => $prefix . 'service_heading',
		'type'       => 'text',
	) );

	/* Service */
	$cmb_c20_service = $cmb_c20_home->add_field( array(
		'id'          => $prefix.'services',
		'type'        => 'group',
		'description' => __( '<h3>Add Service</h3>', 'cmb2' ),
		'options'     => array(
			'group_title'       => __( 'Service {#}', 'cmb2' ), 
			'add_button'        => __( 'Add Another Service ', 'cmb2' ),
			'remove_button'     => __( 'Remove Service', 'cmb2' ),
			'sortable'          => true,
		),
	) );

	$cmb_c20_home->add_group_field( $cmb_c20_service, array(
		'name' => 'Title',
		'id'   => $prefix.'service_title',
		'type' => 'text',
		'sanitization_cb' => 'c20_sanitize_text_callback',
	) );

	$cmb_c20_home->add_group_field( $cmb_c20_service, array(
		'name' => 'Service Page URL',
		'id'   => $prefix.'service_url',
		'type' => 'text_url',
	) );

	$cmb_c20_home->add_group_field( $cmb_c20_service, array(
		'name' => 'Description',
		'id'   => $prefix.'service_text',
		'type' => 'textarea_small',
	) );

	$cmb_c20_home->add_group_field( $cmb_c20_service, array(
		'name' => 'Service Icon',
		'id'   => $prefix.'service_icon',
		'type' => 'file',
	) );

	/* Blog  */
	$cmb_c20_home->add_field( array(
		'before_row'   => '<h1>Blog</h1><hr>',
		'name'       => esc_html__( 'Section Title', 'cmb2' ),
		'id'         => $prefix . 'blog_heading',
		'type'       => 'text',
	) );

	$cmb_c20_home->add_field( array(
		'name' => esc_html__( 'Button Text', 'cmb2' ),
		'id'   => $prefix . 'blog_btn_txt',
		'type' => 'text_medium',
	) );

}


add_action( 'cmb2_admin_init', 'c20_register_landing_page_metabox' );

function c20_register_landing_page_metabox() {
	
	$cmb_c20_landing = new_cmb2_box( array(
		'id'            => 'c20_landing_metabox',
		'title'         => esc_html__( 'Landing Page Metabox', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on' 		=> array( 'key' => 'page-template', 'value' => array('template-home.php', 'template-wh.php') ),
		'context'    	=> 'normal',
		'priority'   	=> 'high',
	) );


	$cmb_c20_coupon = $cmb_c20_landing->add_field( array(
		'id'          => 'c20_landing_coupons',
		'type'        => 'group',
		'description' => __( '<h1>Add Coupon</h1>', 'cmb2' ),
		'options'     => array(
			'group_title'       => __( 'Coupon {#}', 'cmb2' ), 
			'add_button'        => __( 'Add Another Coupon ', 'cmb2' ),
			'remove_button'     => __( 'Remove Coupon', 'cmb2' ),
			'sortable'          => true,
		),
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_coupon, array(
		'name' => 'Coupon Image',
		'id'   => 'c20_landing_coupon_image',
		'type' => 'file',
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_coupon, array(
		'name' => 'Service Name',
		'id'   => 'c20_landing_coupon_title',
		'type' => 'text',
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_coupon, array(
		'name' => 'License',
		'id'   => 'c20_landing_coupon_subtitle',
		'type' => 'text',
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_coupon, array(
		'name' => 'Amount',
		'id'   => 'c20_landing_coupon_amount',
		'type' => 'text_small',
	) );


	$cmb_c20_landing->add_group_field( $cmb_c20_coupon, array(
		'name' => 'Description',
		'id'   => 'c20_landing_coupon_description',
		'type' => 'textarea_small',
	) );

	
	$cmb_c20_landing_testimonial = $cmb_c20_landing->add_field( array(
		'id'          => 'c20_landing_testimonials',
		'description' => __( '<h1>Add Testimonial</h1>', 'cmb2' ),
		'type'        => 'group',
		'options'     => array(
			'group_title'       => __( 'Testimonial {#}', 'cmb2' ), 
			'add_button'        => __( 'Add Another Testimonial ', 'cmb2' ),
			'remove_button'     => __( 'Remove Testimonial', 'cmb2' ),
			'sortable'          => true,
		),
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_landing_testimonial, array(
		'name' => 'Name',
		'id'   => 'c20_landing_clients_name',
		'type' => 'textarea_small',
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_landing_testimonial, array(
		'name' => 'Role',
		'id'   => 'c20_landing_clients_role',
		'type' => 'text',
	) );

	$cmb_c20_landing->add_group_field( $cmb_c20_landing_testimonial, array(
		'name' => 'Testimonial',
		'id'   => 'c20_landing_testimonial',
		'type' => 'textarea_small',
	) );


	/* Area Served */
		
	$cmb_c20_landing->add_field( array(
		'before_row'   		=> '<h1>Service Area</h1><hr>',
		'name'       		=> esc_html__( 'ZIP Title', 'cmb2' ),
		'id'         		=> 'c20_landing_zip_title',
		'type'       		=> 'text'
	) );

	$cmb_c20_landing->add_field( array(
		'name'       		=> esc_html__( 'ZIP Codes', 'cmb2' ),
		'id'         		=> 'c20_landing_zip_list',
		'type'       		=> 'textarea',
		'sanitization_cb' 	=> 'c20_sanitize_text_callback',
	) );
		
		
	$cmb_c20_landing->add_field( array(
		'name'       	=> esc_html__( 'Area Title', 'cmb2' ),
		'id'         	=> 'c20_landing_area_title',
		'type'       	=> 'text'
	) );

	$cmb_c20_landing->add_field( array(
		'name'       		=> esc_html__( 'Cities', 'cmb2' ),
		'id'         		=> 'c20_landing_city_list',
		'type'       		=> 'textarea',
		'sanitization_cb' 	=> 'c20_sanitize_text_callback',
	) );
}






add_action( 'cmb2_admin_init', 'c20_register_theme_options_metabox' );


function c20_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_general_options = new_cmb2_box( array(
		'id'           	=> 'c20_theme_options_page',
		'title'        	=> esc_html__( 'Theme Options', 'cmb2' ),
		'object_types' 	=> array( 'options-page' ),
		'option_key'    => 'c20_theme_options_general',
		'icon_url'      => 'dashicons-hammer',
		'tab_group'     => 'Tab',
		'tab_title'     => 'General',
	) );


	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Site Logo Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => 'general_site_logo',
		'type' => 'file',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Modal Form Title', 'cmb2' ),
		'id'   => 'general_modal_title',
		'type' => 'text',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Header Phone Label', 'cmb2' ),
		'id'   => 'general_phone_label',
		'type' => 'text',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Phone', 'cmb2' ),
		'id'   => 'general_phone',
		'type' => 'text',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Email', 'cmb2' ),
		'id'   => 'general_email',
		'type' => 'text_email',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Water Heater Page', 'cmb2' ),
		'id'   => 'general_wh_page',
		'type' => 'text_url',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Contact Page', 'cmb2' ),
		'id'   => 'general_contact_page',
		'type' => 'text_url',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'About Us Page', 'cmb2' ),
		'id'   => 'general_about_us',
		'type' => 'text_url',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Blog Page', 'cmb2' ),
		'id'   => 'general_blog_page',
		'type' => 'text_url',
	) );

	$cmb_general_options->add_field( array(
		'name' => esc_html__( 'Employment Page', 'cmb2' ),
		'id'   => 'general_carrer_page',
		'type' => 'text_url',
	) );


	$cmb_header_options = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_header',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_header',
		'menu_title'   => esc_html__( 'Header Options', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Header Options',
	) );


	$cmb_header_options->add_field( array(
		'name' => esc_html__( 'Header Scripts', 'cmb2' ),
		'id'   => 'header_scripts',
		'type' => 'textarea_code',
	) );



	$cmb_social_options = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_social',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_social',
		'menu_title'   => esc_html__( 'Social Options', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Social Options',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Review Buzz', 'cmb2' ),
		'id'   => 'social_review_buzz_url',
		'type' => 'text_url',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'BBB URL', 'cmb2' ),
		'id'   => 'social_bbb_url',
		'type' => 'text_url',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Facebook', 'cmb2' ),
		'id'   => 'social_facebook_url',
		'type' => 'text_url',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Twitter', 'cmb2' ),
		'id'   => 'social_twitter_url',
		'type' => 'text_url',
	) );
	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Youtube', 'cmb2' ),
		'id'   => 'social_youtube_url',
		'type' => 'text_url',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Instagram', 'cmb2' ),
		'id'   => 'social_instagram_url',
		'type' => 'text_url',
	) );

	$cmb_social_options->add_field( array(
		'name' => esc_html__( 'Google Review', 'cmb2' ),
		'id'   => 'social_greview_url',
		'type' => 'text_url',
	) );




	$cmb_components = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_components',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_components',
		'menu_title'   => esc_html__( 'Components', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Components',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Page Banner Title', 'cmb2' ),
		'id'   => 'components_page_banner_title',
		'type' => 'textarea_small',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan Image', 'cmb2' ),
		'id'   => 'components_slogan_image',
		'type' => 'file',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 1 Title', 'cmb2' ),
		'id'   => 'components_slogan_1_title',
		'type' => 'textarea_small',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 1 Button', 'cmb2' ),
		'id'   => 'components_slogan_1_btn',
		'type' => 'text',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 1 URL', 'cmb2' ),
		'id'   => 'components_slogan_1_url',
		'type' => 'text_url',
	) );


	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 2 Title', 'cmb2' ),
		'id'   => 'components_slogan_2_title',
		'type' => 'textarea_small',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 2 Button', 'cmb2' ),
		'id'   => 'components_slogan_2_btn',
		'type' => 'text',
	) );

	$cmb_components->add_field( array(
		'name' => esc_html__( 'Slogan 2 URL', 'cmb2' ),
		'id'   => 'components_slogan_2_url',
		'type' => 'text_url',
	) );



	$cmb_expert_review = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_review',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_review',
		'menu_title'   => esc_html__( 'Review', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Review',
	) );


	$cmb_expert_review->add_field( array(
		'name' => esc_html__( 'Title', 'cmb2' ),
		'id'   => 'review_title',
		'type' => 'text',
	) );

	$cmb_expert_review->add_field( array(
		'name' => esc_html__( 'Content', 'cmb2' ),
		'id'   => 'review_text',
		'type' => 'textarea_small',
	) );

	$cmb_expert_review->add_field( array(
		'name' => esc_html__( 'Author', 'cmb2' ),
		'id'   => 'review_author',
		'type' => 'text',
	) );

	$cmb_expert_review->add_field( array(
		'name' => esc_html__( 'Review Page Link', 'cmb2' ),
		'id'   => 'review_page_link',
		'type' => 'text',
	) );



	$cmb_expert_tips = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_tips',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_tips',
		'menu_title'   => esc_html__( 'Expert Tips', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Expert Tips',
	) );

	$cmb_expert_tips->add_field( array(
		'name' => esc_html__( 'Expert Tips Box Title', 'cmb2' ),
		'id'   => 'tips_title',
		'type' => 'text',
	) );

	$cmb_expert_tips->add_field( array(
		'name' => esc_html__( 'Experts Name', 'cmb2' ),
		'id'   => 'tips_name',
		'type' => 'text',
	) );

	$cmb_expert_tips->add_field( array(
		'name' => esc_html__( 'Experts Photo', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => 'tips_thumb',
		'type' => 'file',
	) );

	$cmb_expert_tips->add_field( array(
		'name' => esc_html__( 'Experts Tips', 'cmb2' ),
		'id'   => 'tips_text',
		'type' => 'textarea',
	) );



	$cmb_footer_options = new_cmb2_box( array(
		'id'           => 'c20_theme_options_page_footer',
		'object_types' => array( 'options-page' ),
		'option_key'   => 'c20_theme_options_footer',
		'menu_title'   => esc_html__( 'Footer', 'cmb2' ),
		'parent_slug'  => 'c20_theme_options_general',
		'tab_group'    => 'Tab',
		'tab_title'    => 'Footer',
	) );

	$cmb_footer_options->add_field( array(
		'name' => esc_html__( 'Footer Text', 'cmb2' ),
		'id'   => 'footer_text',
		'type' => 'textarea_small',
	) );

	$cmb_footer_options->add_field( array(
		'name' => esc_html__( 'footer Scripts', 'cmb2' ),
		'id'   => 'footer_scripts',
		'type' => 'textarea_code',
	) );


}



function c20_cmb2_get_general( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'c20_theme_options_general', $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'c20_theme_options_general', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}

function c20_cmb2_get_header( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'c20_theme_options_header', $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'c20_theme_options_header', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}

function c20_cmb2_get_social( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'c20_theme_options_social', $key, $default );
	}
	$opts = get_option( 'c20_theme_options_social', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}

function c20_cmb2_get_components( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'c20_theme_options_components', $key, $default );
	}

	$opts = get_option( 'c20_theme_options_components', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}
function c20_cmb2_get_tips( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'c20_theme_options_tips', $key, $default );
	}

	$opts = get_option( 'c20_theme_options_tips', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}
function c20_cmb2_get_review( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'c20_theme_options_review', $key, $default );
	}

	$opts = get_option( 'c20_theme_options_review', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}

function c20_cmb2_get_footer( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		return cmb2_get_option( 'c20_theme_options_footer', $key, $default );
	}

	$opts = get_option( 'c20_theme_options_footer', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}


/**
 * Callback to define the optionss-saved message.
 *
 * @param CMB2  $cmb The CMB2 object.
 * @param array $args {
 *     An array of message arguments
 *
 *     @type bool   $is_options_page Whether current page is this options page.
 *     @type bool   $should_notify   Whether options were saved and we should be notified.
 *     @type bool   $is_updated      Whether options were updated with save (or stayed the same).
 *     @type string $setting         For add_settings_error(), Slug title of the setting to which
 *                                   this error applies.
 *     @type string $code            For add_settings_error(), Slug-name to identify the error.
 *                                   Used as part of 'id' attribute in HTML output.
 *     @type string $message         For add_settings_error(), The formatted message text to display
 *                                   to the user (will be shown inside styled `<div>` and `<p>` tags).
 *                                   Will be 'Settings updated.' if $is_updated is true, else 'Nothing to update.'
 *     @type string $type            For add_settings_error(), Message type, controls HTML class.
 *                                   Accepts 'error', 'updated', '', 'notice-warning', etc.
 *                                   Will be 'updated' if $is_updated is true, else 'notice-warning'.
 * }
 */
function c20_options_page_message_callback( $cmb, $args ) {
	if ( ! empty( $args['should_notify'] ) ) {

		if ( $args['is_updated'] ) {

			// Modify the updated message.
			$args['message'] = sprintf( esc_html__( '%s &mdash; Updated!', 'cmb2' ), $cmb->prop( 'title' ) );
		}

		add_settings_error( $args['setting'], $args['code'], $args['message'], $args['type'] );
	}
}

/**
 * Only show this box in the CMB2 REST API if the user is logged in.
 *
 * @param  bool                 $is_allowed     Whether this box and its fields are allowed to be viewed.
 * @param  CMB2_REST_Controller $cmb_controller The controller object.
 *                                              CMB2 object available via `$cmb_controller->rest_box->cmb`.
 *
 * @return bool                 Whether this box and its fields are allowed to be viewed.
 */
function c20_limit_rest_view_to_logged_in_users( $is_allowed, $cmb_controller ) {
	if ( ! is_user_logged_in() ) {
		$is_allowed = false;
	}

	return $is_allowed;
}

// add_action( 'cmb2_init', 'c20_register_rest_api_box' );
/**
 * Hook in and add a box to be available in the CMB2 REST API. Can only happen on the 'cmb2_init' hook.
 * More info: https://github.com/CMB2/CMB2/wiki/REST-API
 */
function c20_register_rest_api_box() {
	$prefix = 'c20_rest_';

	$cmb_rest = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'REST Test Box', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'c20_limit_rest_view_to_logged_in_users',
	) );

	$cmb_rest->add_field( array(
		'name'       => esc_html__( 'REST Test Text', 'cmb2' ),
		'desc'       => esc_html__( 'Will show in the REST API for this box and for pages.', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'text',
	) );

	$cmb_rest->add_field( array(
		'name'       => esc_html__( 'REST Editable Test Text', 'cmb2' ),
		'desc'       => esc_html__( 'Will show in REST API "editable" contexts only (`POST` requests).', 'cmb2' ),
		'id'         => $prefix . 'editable_text',
		'type'       => 'text',
		'show_in_rest' => WP_REST_Server::EDITABLE,// WP_REST_Server::ALLMETHODS|WP_REST_Server::READABLE, // Determines which HTTP methods the field is visible in. Will override the cmb2_box 'show_in_rest' param.
	) );
}



///// WYSIWYG
function c20_wysiwyg_output( $meta_key, $post_id = 0 ) {
    global $wp_embed;
    $post_id = $post_id ? $post_id : get_the_id();
    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );
    return $content;
}