<?php
/**
 * Template part for displaying case studies
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
				<div class="col-lg-8 p-0 m-auto">
					<div class="bh-text">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                    <?php  echo '<p class="text-white">' . get_the_excerpt() . '</p>' ?>;
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog Details Section Begin -->
<section id="post-<?php the_ID(); ?>" <?php post_class('blog-details-section spad'); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div id="post-<?php the_ID(); ?>" <?php post_class('class-details-text'); ?>>
                    <div class="cd-pic">
                        <?php lixytechofficial_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="bd-text">
                    <?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lixytechofficial' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->