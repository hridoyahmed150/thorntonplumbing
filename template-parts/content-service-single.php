<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

?>

<?php 
	$show_page_title = get_post_meta( get_the_ID(), 'c20_common_title_show', 1 );
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if($show_page_title) : ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<?php // c20_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
