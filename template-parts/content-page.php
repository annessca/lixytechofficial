<?php
/**
 * Template part for displaying page content in page.php
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
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="about-details section-padding30">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-lg-8">

					<?php lixytechofficial_post_thumbnail(); ?>

					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lixytechofficial' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'lixytechofficial' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								),
								'<span class="edit-link">',
								'</span>'
							);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
