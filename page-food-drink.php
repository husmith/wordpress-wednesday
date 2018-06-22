<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wednesday
 */

get_header();
?>

<div class="page-banner">
FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;FOOD&amp;DRANK&amp;
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
 <section class="section-wrapper container">
                <div class="grid">
                    <div class="grid-sizer col-sm-12 col-md-6"></div>
		<?php 
$args = array ( 'category' => 4, 'posts_per_page' => 10);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);
get_template_part( 'template-parts/post/content-excerpt');
 ?>
<?php endforeach; ?>
                  </div>
                  </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
