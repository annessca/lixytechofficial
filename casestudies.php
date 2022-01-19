<?php 

/* Template Name: Casestudies */

/**
 * The template for displaying all custom posts in a Case Studies page
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
                            <h2>Case Studies</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- Case Studies Section Begin -->
    <div class="case-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Success Stories</span>
                        <h2>The reason clients like to work with us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $latest_case_studies_count = intval(get_post_meta($post->ID, 'archived-posts-no', true));
                if($latest_case_studies_count > 200 || $latest_case_studies_count < 2) $latest_case_studies_count = 6;
                $cs_query = new WP_Query('post_type=lixy-projects&nopaging=1');
                if($cs_query->have_posts()) {
                    $counter = 1;
                    while($cs_query->have_posts() && $counter <= $latest_case_studies_count) {
                        $cs_query->the_post();
                        ?>
                        <div class="col-lg-6">
                            <div class="case-item solid-bg set-bg" data-background='<?php echo get_the_post_thumbnail_url(); ?>'>
                                <div class="case-text">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_excerpt(); ?>
                                    <div class="bi-text">
                                        <a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $counter++;
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Case Studies Section End -->
</main>

<?php
get_footer();