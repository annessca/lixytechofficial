<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lixytechofficial
 */

get_header();
?>

	<main id="primary" class="site-main">

		
		<!--? Hero Start -->
		<div class="slider-area2">
			<div class="slider-height2 d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="hero-cap hero-cap2 pt-70">
								<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lixytechofficial' ); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero End -->
			
		<div class="about-details section-padding30">
			<div class="container">
				<div class="row">
					<div class="offset-xl-1 col-lg-8">
						<div class="about-details-cap mb-50">
							<h2><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lixytechofficial' ); ?></h2>

							<?php lixytechofficial_searchbar(); ?>
							<br><br>
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
