<?php /* Template Name: Single Column */ 

get_header() ?>

<article class="inner-page two-col">
<div class="container-full home-section-container home-section-container_wider">	
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="h3"><?php echo get_field('page_title') ?></h1>
				<?php echo get_field('page_description') ?>
			</div>
		</div>
	</section>
</div>

<div class="continer-full white-text full-background" style="background: url('<?php echo get_field('background_image')['url'] ?>') center no-repeat;">
	<div class="container">
		<div class="col-xs-12">
			<?php echo get_field('body_content'); ?>
		</div>
	</div>
</div> 

</article>
