<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Absolute_Sense
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'absolute-sense' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-full">
			<div class="container">
				<div class="row">
					<div class="">
						<div class="site-branding col-sm-3 col-xs-9">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif; ?>
						</div><!-- .site-branding -->

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'absolute-sense' ); ?></button>

						<div class="mobile-toggle">

							<nav id="site-navigation" class="main-navigation col-sm-7">

								<?php
									if ( ! is_home() ) {
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										) );
									}
								?>
							</nav><!-- #site-navigation -->

							<div class="site-utility col-sm-2">
								<div class="search">
									<?php get_search_form() ?>
								</div>
								<div class="buy-button">
									<p>BUY</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-full nav-container secondary-nav-container">
			<?php if(!is_home()) { ?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php       

		                    if(  $post->post_parent ) 
		                    {
		                      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
		                    } 
		                    else 
		                    {
		                      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		                    }

		                    if ($children) { ?>
		                       <ul>

		                            <?php 
		                            	$contact_url = esc_url( home_url( '/' ) ) . 'contact-us';
		                            	echo $children . '<p class="contact-nav"><a href="' . $contact_url . '">Contact us</a></p>'; ?> 

		                       </ul>

		                    <?php 
		                        } else {
		                        }
		                ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
