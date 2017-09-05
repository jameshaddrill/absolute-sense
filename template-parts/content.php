<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolute_Sense
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-full home-section-container">	
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="h3"><?php echo get_field('home_title') ?></h1>
				<?php echo get_field('body_content') ?>

				<p class="discover-more"><a href="#">Discover more</a></p>
			</div>
		</div>
	</section>

</div>
	

	<!-- <footer class="entry-footer">
		<?php absolute_sense_entry_footer(); ?>
	</footer><!-- .entry-footer --> -->
</article><!-- #post-<?php the_ID(); ?> -->
