<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lixytechofficial
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!--? slider Area Start-->
		<div class="slider-area position-relative">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider slider-height d-flex align-items-center">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-9 col-md-10">
								<div class="hero__caption">
									<?php

									$lixytechofficial_name = get_bloginfo( 'name', 'display' );
									$lixytechofficial_description = get_bloginfo( 'description', 'display' );
									
									?>
									<span data-animation="fadeInLeft" data-delay="0.1s"><?php echo $lixytechofficial_name; ?></span>
									<h1 data-animation="fadeInLeft" data-delay="0.4s"><?php echo $lixytechofficial_description; ?></p></h1>
								</div>
							</div>
						</div>
					</div>          
				</div>
			</div>
    	</div>
    	<!-- slider Area End -->
		<?php get_template_part( 'template-parts/content-service-about', 'none' ); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>
				<!-- Blog Section Begin -->
				<section class="about-us-section blog-spad">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-tittle">
									<span>Sharing Knowledge, Accepting Challenges</span>
									<h2>From Our Blog</h2>
								</div>
							</div>
						</div>
						<?php get_template_part( 'template-parts/content', 'index' ); ?>
					</div>
				</section>
				<!-- About Us Section End -->
				<?php
			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<!-- Brand Area Start -->
		<div class="brand-area pb-80 pt-80">
        	<div class="container">
            	<div class="brand-active brand-border pb-40 pt-40">
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand1.png" alt="Brightlight logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand2.png" alt="CodeWalker logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand3.png" alt="Outmatch logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand4.png" alt="Wellnite logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/bindrsmall.png" alt="Bindr logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand1.png" alt="Brightlight logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand2.png" alt="CodeWalker logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand3.png" alt="Outmatch logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/logobrand4.png" alt="Wellnite logo">
					</div>
					<div class="single-brand">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/bindrsmall.png" alt="Bindr logo">
					</div>
            	</div>
        	</div>
    	</div>
    	<!-- Brand Area End -->

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
