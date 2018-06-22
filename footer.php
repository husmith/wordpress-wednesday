<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wednesday
 */

?>

	</div>
	<!-- #content -->

	<footer id="colophon" class="site-footer clearfix">
		<div class="site-info">
			<div class="nav-links">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/about" class="link">About</a>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact" class="link">Contact</a>
			</div>
			<div class="social-links">
			<a class="social-btn"><?php include("assets/images/Orion_foursquare.svg");?></a>
			<a class="social-btn"><?php include("assets/images/Orion_instagram.svg");?></a>
			<a class="social-btn"><?php include("assets/images/Orion_spotify.svg");?></a>
			</div>
		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>
