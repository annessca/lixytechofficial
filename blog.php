<?php 

/* Template Name: Blog */

/**
 * The template for displaying all blog posts in a Posts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lixytechofficial
 */

get_header();
?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Lixy Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 p-0 m-auto">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $custom_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );
                    $post_page_query = new WP_Query( $custom_args );
                    if( $post_page_query->have_posts() ) :
                        while( $post_page_query->have_posts() ) :
                            $post_page_query->the_post(); ?>
                            <div class="blog-item">
                                <?php if ( has_post_thumbnail() ) { ?>  
                                <div class="bi-pic">
                                    <?php the_post_thumbnail(); ?>  
                                </div>
                                <?php } ?>
                                <div class="bi-text">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <ul>
                                        <li>by <?php the_author(); ?></li>
                                        <li><?php the_date(); ?></li>
                                        <li><?php the_category(); ?></li>
                                    </ul>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <?php 
                        endwhile;  
                    endif; 
                    wp_reset_postdata();
                    ?>
                    <div class="blog-pagination">
                        <?php
                        // Add Pagination
                        if (function_exists('lixytechofficial_custom_pagination')) {
                            lixytechofficial_custom_pagination($post_page_query->max_num_pages,"",$paged);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

</main>

<?php
get_footer();