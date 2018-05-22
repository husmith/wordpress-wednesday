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
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ):
				the_custom_logo(); ?>
			<?php else: ?>
				<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo"> -->
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-small.svg" width=100 /> -->
				<!-- </a> -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><div class="site-brand">WTF IS HANNAH</div></a>
			<?php endif?>
		<?php
			$wednesday_description = get_bloginfo( 'description', 'display' );
			if ( $wednesday_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $wednesday_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation <?= is_front_page() || is_home() ? 'homepage-nav' : 'subpage-nav'?>">
		<?/*
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wednesday' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu'
			) );
			?>
		*/?>
		<div class="menu-main-container">
		<ul>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/music" class="link">Music</a></li>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/places" class="link">Places</a></li>
			<li class="link-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/food-drink" class="link">Food & Drink</a></li>
		</ul>
		</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
