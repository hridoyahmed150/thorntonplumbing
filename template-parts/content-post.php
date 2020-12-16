<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix c20-post-card'); ?>>

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


		</div>
	<?php endif; ?>

	<div class="blog-page-post-body">
		
		<header class="entry-header">
			<h3><a class="text-primary" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		</header>

		<ul class="entry-meta">
			<li>Published at <?php echo get_the_date( 'F j, Y' ); ?></li>
			<li>Category: <?php the_category( ',') ;?></li>
		</ul>


		<div class="entry-content">
			<?php the_excerpt();?>
		</div>

		<div class="post-footer">
			<a class="text-primary font-weight-bold" href="<?php the_permalink(); ?>" class="readMore">Continue reading</a>
		</div>

	</div>

</article>
<!-- #post-<?php the_ID(); ?> -->
