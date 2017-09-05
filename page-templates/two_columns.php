<?php /* Template Name: Two Columns */ 

get_header() ?>

<article class="inner-page two-col">

<div class="container-full home-section-container">	
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="h3"><?php echo get_field('page_title') ?></h1>
				<?php echo get_field('page_description') ?>
			</div>
		</div>
	</section>
</div>

<div class="container-full">
	<div class="half-background hidden-xs col-sm-6 col-sm-push-6" style="background: url('<?php echo get_field('right_hand_image')['url'] ?>') center no-repeat"></div>

	<div class="container">
		<div class="col-sm-6">
			<?php echo get_field('left_hand_content') ?>
		</div>

		<div class="col-sm-6 right-hand-content">
			<!-- <div class="visible-xs half-background" style="background: url('<?php echo get_field('right_hand_image')['url'] ?>') center no-repeat"></div> -->
			<?php echo get_field('right_hand_content') ?>
		</div>
	</div>
</div>
</article>




<?php get_footer() ?>