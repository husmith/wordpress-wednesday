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
            
            <section class="section-wrapper listening-to">
                <h4 class="section-header">Music</h4>
                <div class="posts-wrapper">
                    <?php
                        global $post;
                        $args = array( 'category_name'=>'listening-to');
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) :
                            setup_postdata($post); 
                            get_template_part( 'template-parts/post/content-excerpt', get_post_type() );
                        endforeach; 
                            wp_reset_postdata(); 
                    ?>
                </div>
            </section>

            <section class="section-wrapper doing">
                <div class="posts-wrapper">
                    <?php
                        global $post;
                        $args = array( 'category_name'=>'doing');
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) :
                            setup_postdata($post); 
                            get_template_part( 'template-parts/post/content-excerpt', get_post_type() );
                        endforeach; 
                            wp_reset_postdata(); 
                    ?>
                </div>
            </section>
            
            <section class="section-wrapper eating-drinking">
                <div class="posts-wrapper">
                    <?php
                        global $post;
                        $args = array( 'category_name'=> array('eating','drinking'));
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ) :
                            setup_postdata($post); 
                            get_template_part( 'template-parts/post/content-excerpt', get_post_type() );
                        endforeach; 
                            wp_reset_postdata(); 
                    ?>
                </div>
            </section>


    </main>
    <!-- #main -->
    </div>
    <!-- #primary -->


    <?php get_footer();