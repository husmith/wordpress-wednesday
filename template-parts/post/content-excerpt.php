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

<article id="post-<?php the_ID(); ?>" <?php post_class('post-wrapper'); ?>> 
<div class="post-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>'">
	<header class="entry-header">

		<?php if ( is_front_page()) {
			// The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        } ?>
         <!-- <?php if ( has_post_thumbnail()) {
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				echo '<img src="'.$featured_img_url.'" class="post-img">'; 
            }
            ?> -->
       <?php if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php the_date('M d, Y', '<h4>', '</h4>'); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	   </div>
</article><!-- #post-## -->
