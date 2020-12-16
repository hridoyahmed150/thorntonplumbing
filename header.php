<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package c20
 */

global $post;

$temp_dir = get_template_directory_uri();
$img_dir =  $temp_dir. '/assets/img';

$site_logo 		= c20_cmb2_get_general('general_site_logo'); 
$contact_page 	= c20_cmb2_get_general('general_contact_page'); 
$phone 			= c20_cmb2_get_general('general_phone'); 
$email 			= c20_cmb2_get_general('general_email'); 
$header_label 	= c20_cmb2_get_general('general_phone_label'); 
$header_scripts = c20_cmb2_get_header('header_scripts'); 
$wh_page 		= c20_cmb2_get_general('general_wh_page');
$google_review 	= c20_cmb2_get_social('social_greview_url'); 

$is_wh_page 	= get_post_meta( $post->ID, 'c20_common_header_v2', 1 );

$site_url = ($is_wh_page) ? $wh_page : site_url('/');

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel=apple-touch-icon sizes=57x57 href="<?php echo $img_dir; ?>/site-icons/apple-icon-57x57.png">
	<link rel=apple-touch-icon sizes=60x60 href="<?php echo $img_dir; ?>/site-icons/apple-icon-60x60.png">
	<link rel=apple-touch-icon sizes=72x72 href="<?php echo $img_dir; ?>/site-icons/apple-icon-72x72.png">
	<link rel=apple-touch-icon sizes=76x76 href="<?php echo $img_dir; ?>/site-icons/apple-icon-76x76.png">
	<link rel=apple-touch-icon sizes=114x114 href="<?php echo $img_dir; ?>/site-icons/apple-icon-114x114.png">
	<link rel=apple-touch-icon sizes=120x120 href="<?php echo $img_dir; ?>/site-icons/apple-icon-120x120.png">
	<link rel=apple-touch-icon sizes=144x144 href="<?php echo $img_dir; ?>/site-icons/apple-icon-144x144.png">
	<link rel=apple-touch-icon sizes=152x152 href="<?php echo $img_dir; ?>/site-icons/apple-icon-152x152.png">
	<link rel=apple-touch-icon sizes=180x180 href="<?php echo $img_dir; ?>/site-icons/apple-icon-180x180.png">
	<link rel=icon type=image/png sizes=192x192 href="<?php echo $img_dir; ?>/site-icons/android-icon-192x192.png">
	<link rel=icon type=image/png sizes=32x32 href="<?php echo $img_dir; ?>/site-icons/favicon-32x32.png">
	<link rel=icon type=image/png sizes=96x96 href="<?php echo $img_dir; ?>/site-icons/favicon-96x96.png">
	<link rel=icon type=image/png sizes=16x16 href="<?php echo $img_dir; ?>/site-icons/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,500;0,700;0,900;1,300;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel=manifest href=/images/favicons/manifest.json>

	<?php wp_head(); ?>

	<?php if($header_scripts): ?>

		<?php echo $header_scripts; ?>

	<?php endif; ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'c20' ); ?></a>


	<header id="masthead" class="site-header <?php echo ($is_wh_page=='on') ? 'has-top-header' : ''; ?>">

		<div class="mobile-menu-wrap">
			<?php

	            $args = array(
		            'theme_location'    => 'menu-1',
		        	'container'       	=> 'div',
		        	'container_id'    	=> 'c20-mobile-menu',
		        	'items_wrap'      	=> '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
	            );

	            if($is_wh_page=='on') {

		            $args['theme_location'] = 'menu-2';

	            }

	            wp_nav_menu( $args );
			 ?>

		</div>

		<div class="fix-header">

			<div class="container">

				<div class="row align-items-center">

					<div class="col col-sm-6 col-lg-3 fix-header-logo text-left">
						<a href="<?php echo $site_url; ?>">
							<img src="<?php echo $img_dir; ?>/site-logo.png" alt="<?php echo bloginfo('name'); ?>">
						</a>
					</div>

					<div class="col col-sm-6 col-lg-5 fix-header-phone text-center">
						<a class="phone-lg" href="tel:<?php echo $phone; ?>">
							<?php echo $phone; ?>		
						</a>
					</div>

					<div class="col col-sm-6 col-lg-4 fix-header-btn text-right">
						<a class="btn btn-primary btn-lg" href="<?php echo ($contact_page) ? $contact_page : '#'; ?>">Request Booking</a>
					</div>

				</div>

			</div>

		</div>

		<div class="mobile-header">

			<div class="mobile-header-icon">
				<button type="button">
					<img src="<?php echo $img_dir; ?>/mobile/bar.png" alt="MENU">
					<span>MENU</span>
				</button>
			</div>

			<?php if($phone) : ?>

			<div class="mobile-header-icon">
				<a href="tel:<?php echo $phone; ?>">
					<img src="<?php echo $img_dir; ?>/mobile/phone.png" alt="CALL US">
					<span>CALL US</span>
				</a>
			</div>
			<?php endif; ?>

			<?php if($email) : ?>

			<div class="mobile-header-icon">
				<a href="mailto:<?php echo $email; ?>">
					<img src="<?php echo $img_dir; ?>/mobile/email.png" alt="EMAIL US">
					<span>EMAIL US</span>
				</a>
			</div>

			<?php endif; ?>
			
		</div>


		<div class="main-header">

<!--			--><?php //if($is_wh_page == 'on') : ?>

				<div class="header-top">`
					<div class="container">
						<div class="row">
                            <div class="col-sm-8 d-flex justify-content-end align-items-center">
                                <p class="m-0">We’re open! Actions We Are Taking Regarding the COVID-19.</p>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-end align-items-center">
								
								<?php echo do_shortcode( '[c20_social]' ); ?>

<!--								--><?php //if($google_review): ?>
<!--									<a class="g-review ml-3" href="--><?php //echo esc_url($google_review); ?><!--">-->
<!--										<img src="--><?php //echo $img_dir; ?><!--/google-review.png" alt="Google Review">-->
<!--									</a>-->
<!--								--><?php //endif; ?>

							</div>
							
						</div>
					</div>
					
				</div>

<!--			--><?php //endif; ?>


			<div class="header-bottom has-image-bg" style="background-image: url(<?php echo $img_dir; ?>/drop.png);">
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="navbar-header">
					
								<a class="navbar-brand" href="<?php echo $site_url; ?>">
									<?php if($site_logo) : ?>
										<img src="<?php echo esc_url( $site_logo); ?>" alt="<?php echo bloginfo('name'); ?>">
									<?php else : ?>
										<img class="static-img" src="<?php echo $temp_dir; ?>/assets/img/site-logo.png" alt="<?php echo bloginfo('name'); ?>">
									<?php endif; ?>
								</a>

								<div class="header-controller">
									<?php echo ($header_label) ? '<h3 class="header-label">'.$header_label.'</h3>' : ''; ?>
									<a class="btn btn-primary btn-lg" href="<?php echo ($contact_page) ? $contact_page : '#'; ?>">Request Booking</a>
								</div>

								<button class="hamburger hamburger--squeeze c20_ham" type="button">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>  

							</div>

							<nav class="navbar navbar-default">
								
								<?php
			                        $args = array(
				                        'theme_location'  => 'menu-1',
				                    	'container'       => 'div',
				                    	'container_class' => 'c20-desktop-menu-con',
				                    	'container_id'    => 'c20-desktop-menu',
				                    	'menu_class'      => 'nav navbar-nav',
				                    	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			                        );

						            if($is_wh_page=='on') {
						            	
							            $args['theme_location'] = 'menu-2';

						            }

				                    wp_nav_menu( $args );
								 ?>

								 <?php if($phone): ?>

									<div class="header-service">

<!--										--><?php //echo ($header_label) ? '<h3 class="header-label">'.$header_label.'</h3>' : ''; ?>

										<a class="phone-lg" href="tel:<?php echo $phone; ?>">
											<?php echo esc_html( $phone ); ?>		
										</a>

									</div>
								 <?php endif; ?>

							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>


	<div id="content" class="site-content">
		
		<?php

			if( !is_front_page() && !is_page_template( 'template-wh.php' ) ){
				get_template_part( 'template-parts/content', 'banner' );
			}
		 ?>
