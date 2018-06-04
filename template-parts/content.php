<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wednesday
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-container'); ?>>

			<header class="post-header w-100">
				<div class="post-title text-sm-left text-md-center"><?php the_title(); ?>
<div class="post-date"><?php wednesday_posted_on(); ?> </div><!-- .entry-meta -->
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Orion_arrow-down.svg" class="down-arrow mx-auto d-block"/>
					
					<!-- <div class="post-info">
						<h3 class="info-label">Who</h3>
						<div class="info-content"><?php !in_category('listening-to') ?: the_field('who') ?></div>
						<h3 class="info-label">Where</h3>
						<div class="info-content"><?php !in_category('listening-to') ?: the_field('where') ?></div>
					</div>	 -->
			</header><!-- .entry-header -->
					<!-- <div class="post-img-container"><img src="<?php !has_post_thumbnail() ?: the_post_thumbnail_url(get_the_ID(),'full')?>" class="post-img"></div> -->
	<div class="post-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wednesday' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wednesday' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wednesday_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
