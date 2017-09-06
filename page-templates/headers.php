<?php /* Template Name: Headers */ 

get_header() ?>


<?php if(get_field('section_1_title')) { ?>

<section style="background: url('<?php echo get_field("section_1_image")['url'] ?>'); background-size: cover;">
	<?php if(get_field('header_1_background') == 'background') { ?>
		<div class="container-full header-section header-section-background" style="background: url('<?php echo get_field("header_1_background_image")['url'] ?>')">	
	<?php } else { ?>	
	<div class="container-full header-section header-section-<?php the_field('header_1_background') ?>">
	<?php } ?>
		<header class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="h2"><?php echo get_field('section_1_title') ?></h1>
					<p class="subhead_large"><?php echo get_field('section_1_subhead') ?></p>
				</div>
			</div>
		</header>
	</div>

	<div class="full-background container-full white-text" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php echo get_field('section_1_content') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>

<?php if(get_field('section_2_title')) { ?>

<section style="background: url('<?php echo get_field("section_2_image")['url'] ?>'); background-size: cover;">
	<?php if(get_field('header_2_background') == 'background') { ?>
		<div class="container-full header-section header-section-background" style="background: url('<?php echo get_field("header_2_background_image")['url'] ?>')">	
	<?php } else { ?>	
	<div class="container-full header-section header-section-<?php the_field('header_2_background') ?>">
	<?php } ?>
		<header class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="h2"><?php echo get_field('section_2_title') ?></h1>
					<p class="subhead_large"><?php echo get_field('section_2_subhead') ?></p>
				</div>
			</div>
		</header>
	</div>

	<div class="full-background container-full white-text" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php echo get_field('section_2_content') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if(get_field('section_3_title')) { ?>

<section style="background: url('<?php echo get_field("section_3_image")['url'] ?>'); background-size: cover;">
	<?php if(get_field('header_3_background') == 'background') { ?>
		<div class="container-full header-section header-section-background" style="background: url('<?php echo get_field("header_3_background_image")['url'] ?>')">	
	<?php } else { ?>	
	<div class="container-full header-section header-section-<?php the_field('header_3_background') ?>">
	<?php } ?>
		<header class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="h2"><?php echo get_field('section_3_title') ?></h1>
					<p class="subhead_large"><?php echo get_field('section_3_subhead') ?></p>
				</div>
			</div>
		</header>
	</div>

	<div class="full-background container-full white-text">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php echo get_field('section_3_content') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>

<?php } ?>




<?php get_footer() ?>
