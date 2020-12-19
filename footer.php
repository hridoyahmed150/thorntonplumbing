<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package c20
 */

    $temp_dir = get_template_directory_uri();
	$img_dir 		= get_template_directory_uri().'/assets/img';
	$footer_text 	= c20_cmb2_get_footer('footer_text'); 
	$footer_scripts = c20_cmb2_get_footer('footer_scripts'); 
	$modal_title 	= c20_cmb2_get_general('general_modal_title'); 
	$is_wh_page 	= get_post_meta( $post->ID, 'c20_common_header_v2', 1 ); ?>

	</div>

	<?php if( (!is_front_page() && is_home() ) || !is_page_template( 'template-wh.php' ) ) : ?>

		<div class="modal fade" id="commonContactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormTitle" aria-hidden="true">

			<div class="modal-dialog" role="document">

				<div class="modal-content">

					<div class="modal-header">

						<h5 class="modal-title" id="contactFormTitle"><?php echo ($modal_title) ? $modal_title : 'Request an Estimate'; ?></h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>

					<div class="modal-body">
						<?php echo do_shortcode( '[contact-form-7 id="4445" title="Sidebar"]' ); ?>
					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>


	<footer id="colophon" class="site-footer">
        <div class="header-top">`
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 d-flex justify-content-end align-items-center">
<!--                        <p class="m-0">We’re open! Actions We Are Taking Regarding the COVID-19.</p>-->
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

		<div class="footer-bottom lozad has-image-bg" style="background-image: url(<?php echo $img_dir; ?>/drop-shadow.png);">

			<div class="container">

				<div class="row">

					<?php if($is_wh_page=='on' || is_page_template( 'template-wh.php' ) ) : ?>

						<div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
							<?php dynamic_sidebar( 'footer-wh-1' ); ?>
						</div>

						<div class="col-md-12 col-lg-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
							<?php dynamic_sidebar( 'footer-wh-2' ); ?>
						</div>

						<div class="col-md-12 col-lg-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
							<?php dynamic_sidebar( 'footer-wh-3' ); ?>
						</div>
						
						<div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
							<?php dynamic_sidebar( 'footer-wh-4' ); ?>
						</div>


						<?php else : ?>

                        <div class="coll-md-12 col-lg-3">
                            <a class="navbar-brand" href="<?php echo $site_url; ?>">
                                <?php if($site_logo): ?>
                                    <img src="<?php echo esc_url( $site_logo); ?>" alt="<?php echo bloginfo('name'); ?>">
                                <?php else : ?>
                                    <img class="static-img" src="<?php echo $temp_dir; ?>/assets/img/site-logo.png" alt="<?php echo bloginfo('name'); ?>">
                                <?php endif; ?>
                            </a>
                        </div>

						<div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>

						<div class="col-md-12 col-lg-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>

						<div class="col-md-12 col-lg-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
						
						<div class="col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
					<?php endif; ?>

				</div>

			</div>

		</div>

<!--		<div class="footer-bottom">-->
<!---->
<!--			<div class="container">-->
<!---->
<!--				<div class="row">-->
<!---->
<!--					<div class="col-sm-12">-->
<!--						<div class="pb-4 mb-3" style="border-top: 1px solid rgba(0,0,0,0.1);"></div>-->
<!--					</div>-->
<!--				-->
<!--					<div class="col-sm-12 copyright text-center">-->
<!--						--><?php //echo do_shortcode( $footer_text ); ?>
<!--					</div>-->
<!--					-->
<!--				</div>-->
<!---->
<!--			</div>-->
<!---->
<!--		</div>-->

	</footer>

</div><!-- #page -->


<?php wp_footer(); ?>


<?php if($footer_scripts): ?>

	<?php echo $footer_scripts; ?>

<?php endif; ?>

<script>
	!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.lozad=e()}(this,function(){"use strict";var g=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(t[o]=r[o])}return t},n="undefined"!=typeof document&&document.documentMode,l={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=document.createElement("img");n&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),t.appendChild(e)}if("video"===t.nodeName.toLowerCase()&&!t.getAttribute("data-src")&&t.children){for(var r=t.children,o=void 0,a=0;a<=r.length-1;a++)(o=r[a].getAttribute("data-src"))&&(r[a].src=o);t.load()}t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&t.setAttribute("srcset",t.getAttribute("data-srcset")),t.getAttribute("data-background-image")&&(t.style.backgroundImage="url('"+t.getAttribute("data-background-image")+"')"),t.getAttribute("data-toggle-class")&&t.classList.toggle(t.getAttribute("data-toggle-class"))},loaded:function(){}};
		function f(t){t.setAttribute("data-loaded",!0)}var b=function(t){return"true"===t.getAttribute("data-loaded")};return function(){var r,o,a=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},e=g({},l,t),n=e.root,i=e.rootMargin,d=e.threshold,c=e.load,u=e.loaded,s=void 0;return window.IntersectionObserver&&(s=new IntersectionObserver((r=c,o=u,function(t,e){t.forEach(function(t){(0<t.intersectionRatio||t.isIntersecting)&&(e.unobserve(t.target),b(t.target)||(r(t.target),f(t.target),o(t.target)))})}),{root:n,rootMargin:i,threshold:d})),{observe:function(){for(var t=function(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return t instanceof Element?[t]:t instanceof NodeList?t:e.querySelectorAll(t)}(a,n),e=0;e<t.length;e++)b(t[e])||(s?s.observe(t[e]):(c(t[e]),f(t[e]),u(t[e])))},triggerLoad:function(t){b(t)||(c(t),f(t),u(t))},observer:s}}});

	const observer = lozad('.lozad', {
	    rootMargin: '100px 0px', // syntax similar to that of CSS Margin
	    threshold: 0.1 // ratio of element convergence
	});
	observer.observe();
</script>

</body>
</html>
