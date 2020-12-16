<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<?php if(has_post_thumbnail( get_the_ID() )) : ?>
		<div class="post-thumbnail">

		<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>


		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="blog-page-post-body">
		
		<header class="entry-header">
			<h3><a href="<?php the_permalink( ) ?>"><?php the_title(); ?></a></h3>
		</header><!-- .entry-header -->

		<ul class="entry-meta">
			<li>Published at <?php echo get_the_date( 'F j, Y' ); ?></li>
		</ul><!-- .entry-meta -->


		<div class="entry-content">
			<?php the_excerpt();?>
		</div><!-- .entry-content -->

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
