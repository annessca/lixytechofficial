<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lixytechofficial
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<!--? Hero Start -->
			<div class="slider-area2">
				<div class="slider-height2 d-flex align-items-center">
					<div class="container">
						<div class="row">
							<div class="col-xl-12">
								<div class="hero-cap hero-cap2 pt-70">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( '%s', 'lixytechofficial' ), '<span id="search-result">Search ResultS for: </span><h2>' . get_search_query() . '</h2>' ); 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hero End -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
