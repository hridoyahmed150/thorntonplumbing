<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php if(has_post_thumbnail( get_the_ID() )) : ?>
		<div class="post-thumbnail">

			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>

		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content();?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
