<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @subpackage wednesday
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            
            <section class="section-wrapper container">
                <div class="grid">
                    <div class="grid-sizer col-sm-12 col-md-6"></div>
                    <?php
                        while ( have_posts() ) :
				            the_post(); 
                            get_template_part( 'template-parts/post/content-excerpt', get_post_type() );
                        endwhile;
                    ?>
                </div>
            </section>
    </main>
    <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer();