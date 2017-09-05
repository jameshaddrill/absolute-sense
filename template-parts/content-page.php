<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolute_Sense
 */

?>

<article class="inner-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-full home-section-container">	
		<section class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="h3"><?php echo get_field('home_title') ?></h1>
					<?php echo get_field('body_content') ?>
				</div>
			</div>
		</section>
	</div>

	<?php 
		if (get_field('white_background_content_left')) { ?>
			<div class="container-full container-white">
				<section class="container">
					<div class="row">
						<div class="col-sm-6">
							<?php echo get_field('white_background_content_left') ?>
						</div>

						<div class="col-sm-6">
							<?php if (get_field('white_background_content_right')) {
								echo get_field('white_background_content_right');
							} ?>
						</div>
					</div>
				</section>
			</div>

		<?php }
	?>
	
	<div class="container-full inner-page-bg" style="background: url(<?php echo get_field('image')['url'] ?>) center no-repeat;">
		<?php 
			if (get_field('picture_background_content')) { ?>
				<section class="container">
					<div class="col-xs-12">
						<?php echo get_field('picture_background_content'); ?>
					</div>
				</section>
			<?php }
		?>
	</div>
	
	
</article><!-- #post-<?php the_ID(); ?> -->
