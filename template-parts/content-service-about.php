<?php
/**
 * Template part for displaying the "Services" and "About" summaries in the index page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lixytechofficial
 */

?>

<!-- Services Area Start -->
<div class="categories-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70">
                    <span>Our Services</span>
                    <h2>A Range of Services We Provide</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-development"></span>
                    </div>
                    <div class="cat-cap">
                        <h5>Web Application</h5>
                        <p>LIXY’s team of talented in-house engineers use structured framework programming, best programming practices, coding guidelines and standards. We tailor our solutions to meet our customers’ individual needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-result"></span>
                    </div>
                    <div class="cat-cap">
                        <h5>Mobile Applications</h5>
                        <p>LIXY builds mobile applications using our expertise with native SDKs and cross-platform tools to create products that work on any device or platform. We leverage our years of experience to deliver on-time and under budget.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span class="flaticon-team"></span>
                    </div>
                    <div class="cat-cap">
                        <h5>Talent Outsourcing</h5>
                        <p>LIXY provides organisations with high quality technical talent for both recruitment and product development purposes at cost effective rates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!--? Why Lixy Start-->
<div class="support-company-area pt-100 pb-100 section-bg fix" data-background="<?php echo get_template_directory_uri() ?>/assets/img/gallery/whylixy-bg.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/about.png" alt="Work with us">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-50">
                        <span>We Help You Execute Your Vision</span>
                        <h2>WHY LIXY</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Competitive advantage comes with finding and exploiting untapped markets. LIXY identifies, trains, and manages quality engineers from from Africa, allowing you to benefit from the reduced costs in finding the right and quality engineers.</p>
                        <p class="mb-65">We hire experienced engineers on your behalf, at a fraction of what you would pay a beginner in the local market. We also train and ensure a sustained performance for your team, so you can focus on product development.</p>
                        <a href="<?php echo get_option('moreaboutlixy'); ?>" class="btn post-btn">More About Us</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Why Lixy End-->

<!-- Review Section -->
<section class="review-section spad" data-background="<?php echo get_template_directory_uri() ?>/assets/img/gallery/review-bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 m-auto">
				<div class="review-slider owl-carousel">
                <?php
                    $args =  array(
                        'post_type' => 'testimonials', 
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 16
                    );
                    $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                    ?>
                        <div class="review-item">
                            <div class="ri-img">
                                <?php the_post_thumbnail( 'full', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
                            </div>
                            <div class="ri-text">
                                <?php the_content(); ?>
                                <h4><?php the_title(); ?></h4>
                                <h6><?php the_excerpt(); ?></h6>
                            </div>
                        </div>
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>

