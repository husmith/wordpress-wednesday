<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wednesday
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wednesday' ); ?></a>
	<div class="container">
	<header id="masthead" class="site-header fixed-top row">
		<div class="site-branding col-sm-10 col-md-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="">
				<div class="site-brand">WTF IS HANNAH</div>
			</a>

			<?php
			$wednesday_description = get_bloginfo( 'description', 'display' );
			if ( $wednesday_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $wednesday_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation d-sm-none d-md-block col-md-6 subpage-nav">

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php include("assets/images/Orion_menu-hamburger.svg"); ?>
		</button>
		

		<div class="menu-main-container">
		<ul>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/music" class="link">Music</a></li>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/places" class="link">Places</a></li>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/food-drink" class="link">Food & Drink</a></li>
		</ul>
		</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
</div>
	<div id="content" class="site-content">
