<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage wednesday
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12 col-md-6 grid-item post-item'); ?>> 
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-wrapper">
		<img src="<?php !has_post_thumbnail() ?: get_the_post_thumbnail_url(get_the_ID(),'full')?>" class="card-img">
		<div class="card-img-overlay">
			<div class="card-title"><?php !is_front_page() ?: the_title()?></div>
			<div class="card-text post-date d-md-none d-lg-block"><?php get_post_type() !== 'post' ?: the_date('M d, Y', '<h4>', '</h4>'); ?></div>
       		<div class="card-text post-summary d-md-none d-lg-block"><?php the_excerpt(); ?></div><!-- .entry-summary -->
		</div>
	</a>
	</article><!-- #post-## -->
