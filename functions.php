<?php
/**
 * c20 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package c20
 */

if ( ! function_exists( 'c20_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function c20_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on c20, use a find and replace
		 * to change 'c20' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'c20', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Main', 'c20' ),
			'menu-2' => esc_html__( 'Water Heater ', 'c20' ),
			'menu-3' => esc_html__( 'Footer', 'c20' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'c20_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_image_size( 'page-thumbnail', 630);
		add_image_size( 'gallery-thumbnail', 240);
		add_image_size( 'post-thumbnail', 630);
		
	}
endif;
add_action( 'after_setup_theme', 'c20_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function c20_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'c20_content_width', 640 );
}
add_action( 'after_setup_theme', 'c20_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function c20_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Primary Right Sidebar', 'c20' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'c20' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'c20' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'c20' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'c20' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WH Right Sidebar', 'c20' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WH Footer 1', 'c20' ),
		'id'            => 'footer-wh-1',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WH Footer 2', 'c20' ),
		'id'            => 'footer-wh-2',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'WH Footer 3', 'c20' ),
		'id'            => 'footer-wh-3',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'WH Footer 4', 'c20' ),
		'id'            => 'footer-wh-4',
		'description'   => esc_html__( 'Add widgets here.', 'c20' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}

add_action( 'widgets_init', 'c20_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function c20_register_scripts() {

	$temp_dir = get_template_directory_uri();
	$assets_dir = $temp_dir.'/assets';
	$css_dir = $assets_dir.'/css';
	$libs_dir = $assets_dir.'/libs';

	wp_register_style( 'c20_bs', $libs_dir.'/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
	wp_register_style( 'c20_bs_theme', $libs_dir.'/bootstrap/css/bootstrap-theme.min.css', array(), false, 'all' );
	wp_register_style( 'slick-main', $libs_dir.'/slick/slick.css', array(), false, 'all' );
	wp_register_style( 'slick-theme', $libs_dir.'/slick/slick-theme.css', array(), false, 'all' );

	wp_register_style( 'aos', $libs_dir.'/aos/aos.css', array(), false, 'all' );
	
	wp_register_style( 'c20_settings', $css_dir.'/settings.css', array(), false, 'all' );
	wp_register_style( 'c20_header', $css_dir.'/header.css', array(), false, 'all' );
	wp_register_style( 'c20_main', $css_dir.'/main.css', array(), false, 'all' );
    wp_register_style( 'c20_custom', $css_dir.'/thornton.css', array(), false, 'all' );
    wp_register_style( 'c20_wh', $css_dir.'/wh.css', array(), false, 'all' );
    wp_register_style( 'c20_page', $css_dir.'/page.css', array(), false, 'all' );
    wp_register_style( 'c20_blog', $css_dir.'/blog.css', array(), false, 'all' );
    wp_register_style( 'c20_footer', $css_dir.'/footer.css', array(), false, 'all' );

	wp_enqueue_style( 'aos');

	wp_enqueue_style( 'c20_bs');


	if( ( is_front_page() && !is_home() ) || is_page_template( 'template-wh.php' ) ){
		wp_enqueue_style( 'slick-main');
		wp_enqueue_style( 'slick-theme');
	}


	wp_enqueue_style( 'c20_settings');
	wp_enqueue_style( 'c20_header');


	if(is_front_page() && !is_home()){
		wp_enqueue_style( 'c20_main');
	}

	if(is_front_page() && !is_home()){
	    wp_enqueue_style( 'c20_custom' );
    }


	if(is_page_template( 'template-wh.php' ) ) {
		wp_enqueue_style( 'c20_wh' );
	}


	if(!is_front_page() && !is_page_template( 'template-wh.php' ) ) {
		wp_enqueue_style( 'c20_page');
	}

	if( ( !is_front_page() && is_home() ) || is_single() || is_archive() || is_category() || is_tag() || is_search() ) {

		wp_enqueue_style( 'c20_blog');
	}

	wp_enqueue_style( 'c20_footer');
	wp_enqueue_style( 'c20-style', get_stylesheet_uri() );




	/*Register Scripts*/
	wp_register_script( 'aos_js', $libs_dir.'/aos/aos.js', array(), null, true );
	wp_register_script( 'bs_js', $libs_dir.'/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );
	wp_register_script( 'slick', $libs_dir.'/slick/slick.min.js', array('jquery'), null, true );
	wp_register_script( 'c20_parallax', $assets_dir.'/js/skrollr.js', array('jquery'), null, true );
	wp_register_script( 'c20_main', $assets_dir.'/js/common.js', array('jquery'), null, true );
	wp_register_script( 'c20_scripts', $assets_dir.'/js/main.js', array('bs_js'), null, true );


	wp_enqueue_script('aos_js');
	wp_enqueue_script('bs_js');
	wp_enqueue_script('c20_parallax');
	wp_enqueue_script('slick');
	wp_enqueue_script('c20_main');

	wp_enqueue_script( 'c20-skip-link-focus-fix', $assets_dir.'/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script('c20_scripts');

}
add_action( 'wp_enqueue_scripts', 'c20_register_scripts' );




if ( file_exists( get_template_directory() . '/inc/meta-fields/init.php' ) ) {
	require_once get_template_directory() . '/inc/meta-fields/init.php';
	require_once get_template_directory() . '/inc/meta-fields.php';

}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// require get_template_directory() . '/inc/gutenburg/gutenburg.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function c20_search_form( $form ) { 
     $form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                <label>
                    <span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>
                    <input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search The Blog', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
            </form>';
     return $form;
}
 
add_filter( 'get_search_form', 'c20_search_form' );

function c20_get_attchment_img_alt($url){
	$alt = '';
	if($url) {
		$get_image_id = attachment_url_to_postid($url);
		$alt = get_post_meta($get_image_id, '_wp_attachment_image_alt', true );
		return  $alt;
	}
	return;
}


add_filter( 'walker_nav_menu_start_el', 'emg_add_arrow_to_dorpdown_menu',10,4);
function emg_add_arrow_to_dorpdown_menu( $item_output, $item, $depth, $args ){

    if( ( 'menu-1' == $args->theme_location || 'menu-2' == $args->theme_location ) && $depth == 0 ){

    	$item_output = '<span>'.$item_output;

		if (in_array('menu-item-has-children', $item->classes)) {
        	$item_output .= '<img class="nav-arrow" src="'.get_template_directory_uri().'/assets/img/angle-down-dark.png" />';
		}

    	$item_output .= '</span>';

    }

    return $item_output;
}

add_filter('widget_text', 'do_shortcode');


add_shortcode( 'c20_social', 'c20_social_profiles' );

function c20_social_profiles(){
	$img_dir = get_template_directory_uri().'/assets/img/social-icons';

	$c20_fb = c20_cmb2_get_social('social_facebook_url'); 
	$c20_tw = c20_cmb2_get_social('social_twitter_url'); 
	$c20_yt = c20_cmb2_get_social('social_youtube_url'); 

	$data = '';

	ob_start(); ?>
	<?php if($c20_fb || $c20_tw || $c20_yt) : ?>
	<ul class="c20_social">

		<?php if($c20_fb): ?>
			<li class="icon-fb">
				<a href="<?php echo esc_url( $c20_fb); ?>" target="_blank">
					<img class="lozad" data-src="<?php echo $img_dir; ?>/fb.png" alt="Facebook">
				</a>
			</li>
		<?php endif; ?>

		<?php if($c20_tw) :  ?>
			<li class="icon-tw">
				<a href="<?php echo esc_url( $c20_tw ); ?>" target="_blank">
					<img class="lozad" data-src="<?php echo $img_dir; ?>/tw.png" alt="Twitter">
				</a>
			</li>
		<?php endif; ?>

		<?php if($c20_yt): ?>
			<li class="icon-yt">
				<a href="<?php echo esc_url( $c20_yt ); ?>" target="_blank">
					<img class="lozad" data-src="<?php echo $img_dir; ?>/yt.png" alt="Youtube">
				</a>
			</li>
		<?php endif; ?>

	</ul>

	<?php endif;

	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}


add_shortcode( 'c20_slogan', 'c20_slogan_module' );
function c20_slogan_module(){
	
	$img_dir = get_template_directory_uri().'/assets';

	$slogan_image 	= c20_cmb2_get_components('components_slogan_image'); 
	$slogan_1_title = c20_cmb2_get_components('components_slogan_1_title'); 
	$slogan_1_btn 	= c20_cmb2_get_components('components_slogan_1_btn'); 
	$slogan_1_url 	= c20_cmb2_get_components('components_slogan_1_url'); 
	$slogan_2_title = c20_cmb2_get_components('components_slogan_2_title'); 
	$slogan_2_btn 	= c20_cmb2_get_components('components_slogan_2_btn'); 
	$slogan_2_url 	= c20_cmb2_get_components('components_slogan_2_url'); 

	$data = '';

	ob_start(); ?>


		<div class="slogan-section">
			
			<div class="slogan-section__header">
				<?php if($slogan_image) : ?>

					<img class="lozad" data-src="<?php echo $slogan_image; ?>" alt="<?php echo $slogan_1_title; ?>" data-aos-offset="50" data-aos="fade-down" data-aos-duration="600" data-aos-delay="100">
				<?php endif; ?>

				<?php if($slogan_1_title):  ?>

				<h2 class="h2 m-0 text-primary" data-aos-offset="50" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"><?php echo $slogan_1_title; ?></h2>
				<?php endif; ?>


				<?php if($slogan_1_btn) : ?>

				<a href="<?php echo (!empty($slogan_1_url)) ? $slogan_1_url : '#'; ?>" class="btn btn-default" data-aos-offset="50" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"><?php echo $slogan_1_btn; ?></a>
				<?php endif; ?>

			</div>

			<div class="slogan-section__footer" data-aos-offset="50" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
				<?php if($slogan_2_title): ?>
				<h5 class="h4 text-light mb-3"><?php echo $slogan_2_title; ?></h5>
				<?php endif; ?>

				<?php if($slogan_2_btn): ?>
					<a href="<?php echo (!empty($slogan_2_url)) ? $slogan_2_url : '#'; ?>" class="btn btn-default"><?php echo $slogan_2_btn; ?></a>
				<?php endif; ?>
				
			</div>
		</div>
	<?php 

	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}



add_shortcode( 'c20_collapse', 'c20_register_accordion' );
function c20_register_accordion($atts){

    extract( shortcode_atts( array(
        // 'title'     => '',
        'menu_id'   => '',
    ),  $atts));

	$data = '';

	ob_start();


	$menu_ids = explode(',', $menu_id); 

	$i = 0;

	if(!empty($menu_ids)) {

	echo '<div class="c20_collapse_group">';
		foreach ($menu_ids as $nav_id) { 
			$i++;
			$menu_obj = wp_get_nav_menu_object($nav_id);

			echo ($i==1) ? '<div class="c20_collapse c20_collapse_open">' : '<div class="c20_collapse">';
				echo '<div class="c20_collapse_header"><span class="c20_collapse_title">'.$menu_obj->name.'</span><span class="collapse_status"></span></div>';
				
					wp_nav_menu( array(
						'menu'            => $nav_id,
						'container'       => 'div',
						'container_class' => 'c20_collapse_nav',
					) );
				 
			echo '</div>';
		}
		echo '</div>';
	}



	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}


add_shortcode( 'c20_review', 'c20_register_review_module' );
function c20_register_review_module($atts){

	$data = '';
	$img_dir = get_template_directory_uri().'/assets/img/review';

	$review_title 		= c20_cmb2_get_review('review_title'); 
	$review_text 		= c20_cmb2_get_review('review_text'); 
	$review_author 		= c20_cmb2_get_review('review_author'); 
	$review_page_link 	= c20_cmb2_get_review('review_page_link'); 
	$bbb_url 			= c20_cmb2_get_social('social_bbb_url'); 
	$contact_page 		= c20_cmb2_get_general('general_contact_page'); 

	ob_start();

	if($review_title || $review_text) : ?>

		<div class="page-review" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
			<?php if($review_title): ?>
			<div class="review-header">
				<h2 class="m-0 text-uppercase text-light font-500"><?php echo $review_title; ?></h2>
			</div>
			<?php endif; ?>
		
			<?php if($review_text): ?>

				<div class="review-body">
					<div class="review-star-count">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/star.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100" alt="Rating Star">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/star.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200" alt="Rating Star">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/star.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300" alt="Rating Star">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/star.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="400" alt="Rating Star">
						<img class="lozad" data-src="<?php echo $img_dir; ?>/star.png" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500" alt="Rating Star">
					</div>
					<div class="review-text"><?php echo $review_text; ?></div>

					<?php if($review_author): ?>
						<div class="review-author"><?php echo $review_author; ?></div>
					<?php endif; ?>

				</div>
			<?php endif; ?>

			<?php if($bbb_url || $review_page_link || $contact_page) : ?>

				<div class="review-footer">

					<div class="review-footer__left mb-3 mb-xl-0">
						<?php if($bbb_url): ?>
							<a href="<?php echo esc_url( $bbb_url ); ?>" target="_blank"><img class="lozad" data-src="<?php echo $img_dir; ?>/bbb.png" alt="BBB Logo"></a>
						<?php endif; ?>
					</div>

					<div class="review-footer__right">
						<?php if($review_page_link): ?>
							<a href="<?php echo esc_url( $review_page_link ); ?>" class="btn mx-2 mb-3 mb-xl-0" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">Read More Reviews</a>
						<?php endif; ?>

						<?php if($contact_page): ?>
							<a href="<?php echo esc_url( $contact_page ); ?>" class="btn mx-2 mb-3 mb-xl-0" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">Request Service</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>

	<?php endif;

	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}


// add_shortcode( 'c20_nap', 'c20_register_nap_module' );
function c20_register_nap_module($atts){

    extract( shortcode_atts( array(
        'address'   => '',
        'phone'   	=> '',
        'fax'   	=> '',
    ),  $atts));


	$data = '';
	$img_dir = get_template_directory_uri().'/assets';


	ob_start();

	if($address || $phone || $fax) : ?>


	<ul class="c20_nap">

		<?php if($address): ?>
			<li class="nap_address" style="background-image: url( <?php echo $img_dir;?>/img/icon-map.png);"><?php echo $address; ?></li>
		<?php endif; ?>

		<?php if($phone) : ?>
			<li class="nap_phone" style="background-image: url( <?php echo $img_dir;?>/img/icon-phone.png);"><a href="tel:<?php echo $phone;?>"><?php echo $phone; ?></a></li>
		<?php endif; ?>

		<?php if($fax): ?>
			<li class="nap_fax" style="background-image: url( <?php echo $img_dir;?>/img/icon-print.png);"><?php echo $fax; ?></li>
		<?php endif; ?>

	</ul>

	<?php endif;

	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}

add_shortcode( 'c20_card', 'c20_styled_card' );

function c20_styled_card($atts, $content = null){

    extract( shortcode_atts( array(
        'align'		=> 'left',
        'text'		=> '',
    ),  $atts));


    $img_dir = get_template_directory_uri().'/assets/img/control';


    $alignment = '';

    switch ($align) {

        case 'right':
            $alignment = 'text-right';
            break;

        case 'center':
            $alignment = 'text-center';
            break;

        default:
            $alignment = 'text-left';
            break;
    }

    $data = '';

    ob_start();

    if($text || $content) : ?>

        <div class="c20-quote font-700 <?php echo $alignment; ?>" style="background-image: url(<?php echo $img_dir; ?>/content-card-bg.png);">

            <?php
            if($content) {
                echo do_shortcode( $content );
            } else {
                echo $text;
            }
            ?>
        </div>

    <?php endif;

    $output = ob_get_contents(); $data .= $output; ob_get_clean();
    return $data;
}

add_shortcode( 'coupon', 'c20_register_promotion_details' );
function c20_register_promotion_details($atts){

	$data = '';
	$img_dir = get_template_directory_uri().'/assets/img';

	extract( shortcode_atts( array(
		'title'     	=> '',
		'amount'     	=> '',
		'subtitle'     	=> '',
		'wrapper'     	=> 'on',
		'description'  	=> 'Limit one per customer. Must be presented at time of service. Not valid with any other offer. Minimum purchase of $199 required.'
	),  $atts));

	ob_start(); ?>

	<?php if($wrapper == 'on') :  ?>

		<div class="coupon-wrap print-coupon">

	<?php endif; ?>

		<?php if($title && $amount) : ?>
			<div class="text-center single-coupon">

				<img src="<?php echo $img_dir; ?>/coupon-bg.jpg" alt="Background">

				<div class="coupon-top">
					<img src="<?php echo $img_dir; ?>/site-logo-v2.png" alt="Logo">
					<h2 class="coupon-price" style="margin: 0;"> <span>$</span> <strong><?php echo $amount; ?></strong> Off</h2>
				</div>
				
				<div class="coupon-body">

					<?php if($title) : ?>
						<div class="coupon-title"><?php echo $title; ?></div>
					<?php endif; ?>

					<?php if($subtitle): ?>
						<p class="coupon-subtitle" style="margin: 0;"><?php echo $subtitle; ?></p>
					<?php endif; ?>

				</div>

				<div class="coupon-footer">

					<?php if($description): ?>
						<div class="desclimer" style="text-align: left;"><?php echo $description; ?></div>
					<?php endif; ?>

					<?php 
						$site_url = site_url();
						$find = array( 'http://', 'https://' );
						$replace = '';
						$output = str_replace( $find, $replace, $site_url );
					 ?>

					<p style="margin: 0"><a href="<?php echo site_url('/'); ?>"><?php echo $output; ?></a></p>
					
				</div>
					
			</div>

			<?php else : ?>

			<p>Use argument "title" "amount"</p>

		<?php endif; ?>
		
	<?php if($wrapper == 'on') :  ?>
		</div>
	<?php endif; ?>

	<?php  

	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}



add_filter( 'excerpt_length', 'c20_custom_excerpt_length', 999 );
function c20_custom_excerpt_length( $length ) {

	if(is_home() && !is_front_page()){
		return 45;

	} else {
		
		return 18;
	}
}


add_filter('excerpt_more', 'c20_custom_excerpt_more');
function c20_custom_excerpt_more( $more ) {
    return '...';
}



/* phone number*/
add_shortcode( 'phone', 'c20_common_phone_no' );
function c20_common_phone_no(){

	$c20_global_phone = c20_cmb2_get_general('general_phone'); 

    return "<a href=\"tel:{$c20_global_phone}\" class=\"c20-phone-shortcode\">{$c20_global_phone}</a>";
    // return "<a href=\"tel:000-000-0000\" class=\"c20-phone-shortcode\" onclick=\"ga('send',' event', 'phone', 'call');\">000-000-0000</a>";
}

add_shortcode( 'c20_date', 'c20_show_date' );
function c20_show_date(){
    return date('Y');
}



function c20_sanitize_text_callback( $value, $field_args, $field ) {

    $value = strip_tags( $value, '<p><a><br><br/>' );
    return $value;
}



add_shortcode( 'tips', 'c20_expert_tips' );
function c20_expert_tips($atts){

	$title 	= c20_cmb2_get_tips('tips_title'); 
	$author = c20_cmb2_get_tips('tips_name'); 
	$photo 	= c20_cmb2_get_tips('tips_thumb'); 
	$text 	= c20_cmb2_get_tips('tips_text'); 

	extract( shortcode_atts( array(
		'author' => $author,
		'photo' => $photo,
		'text' => $text,
	),  $atts));
	
	$data = '';

	ob_start();  
	
	$temp_dir = get_template_directory_uri();  

	if($text): ?>

		<div class="c20_expert_tips_box" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
			<div class="tips_box_top"><?php echo $title ? esc_html($title) : 'Exert Tips'; ?></div>
			<div class="tips_box_bottom">
				<?php if($photo): ?>
				<div class="tips_box_thumb">
					<img src="<?php echo esc_url($photo); ?>" alt="<?php echo $author ? esc_attr($author) : esc_attr($title); ?>">
				</div>
				<?php endif; ?>
				
				<div class="tips_box_content">
					<div class="tips"><?php echo $text; ?></div>
					<?php if($author): ?>
						<div class="expert_name"><?php echo esc_html($author); ?></div>
					<?php endif; ?>
				</div>
			</div>
			
		</div>
	<?php endif;
	
	$output = ob_get_contents(); $data .= $output; ob_get_clean();
	return $data;
}






