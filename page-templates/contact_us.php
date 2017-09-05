<?php /* Template Name: Contact us */ 

get_header() ?>

<div class="container-full contact-container">
<section class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Contact us</h1>
			<div class="form-container">
				<h2>Your details</h2>
				<?php echo do_shortcode('[contact-form-7 id="69" title="Contact us"]'); ?>

				<p>All fonts marked with * are required</p>
			</div>
		</div>
	</div>
</section>
</div>

<?php get_footer() ?>
