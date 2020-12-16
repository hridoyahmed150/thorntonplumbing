<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package c20
 */

?>

<div class="c20_blurb__header">
	<?php the_post_thumbnail('full'); ?>
</div>
<div class="c20_blurb__body">
	<h3 class="c20_blurb__title"><?php the_title(); ?></h3>
	<div class="c20_blurb__content">
		<?php the_excerpt() ?>
	</div>
</div>
