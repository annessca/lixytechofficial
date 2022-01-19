<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lixytechofficial
 */

?>
<!--? Hero Start -->
<div class="slider-area2">
	<div class="slider-height2 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap hero-cap2 pt-70">
						<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'lixytechofficial' ); ?></h2>
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
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'lixytechofficial' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url( admin_url( 'post-new.php' ) )
						);

					elseif ( is_search() ) :
						?>

						<h2><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lixytechofficial' ); ?></h2>
						<?php
						lixytechofficial_searchbar();

					else :
						?>

						<h2><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lixytechofficial' ); ?></h2>
						<?php
						lixytechofficial_searchbar();

					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
