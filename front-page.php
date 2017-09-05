<?php
/**
 * The homepage template file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolute_Sense
 */

get_header(); 

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

$menuID = $menuLocations['menu-1']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

$menuIDs =array();

foreach ( $primaryNav as $navItem ) {
	if ($navItem->title != 'Home') {
		$pageid = get_post_meta( $navItem->ID, '_menu_item_object_id', true );
		array_push($menuIDs, $pageid);
	}
}

$menuIDss = array_reverse($menuIDs);

query_posts(array(post_parent => '0', 'post_type' => 'page', 'post__in' => $menuIDs, 'orderby' => 'post__in'));

while (have_posts()) { the_post(); ?>
	<div class="container-full home-section-container">	
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="h3"><?php echo get_field('home_title') ?></h1>
				<?php echo get_field('body_content') ?>

				<p class="discover-more"><a href="<?php echo get_permalink() ?>">Discover more</a></p>
			</div>
		</div>
	</section>

</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_field('image')['url']; ?>"></div>
   
<?php
}

wp_reset_query();  // Restore global post data  ?>
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


<?php get_footer ?>