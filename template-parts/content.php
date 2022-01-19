<?php
/**
 * Template part for displaying posts
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
						<ul>
							<li>by <?php the_author(); ?></li>
							<li><?php the_date(); ?></li>
							<li><?php the_category(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Blog Section Begin -->
<section class="spad-2 class-details-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div id="post-<?php the_ID(); ?>" <?php post_class('class-details-text'); ?>>
					<div class="cd-pic">
						<?php lixytechofficial_post_thumbnail(); ?>
					</div>
					<div class="cd-text">
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
					<div class="tag-share">
						<div class="tags">
							<?php lixytechofficial_tags_list(); ?>
						</div>
						<!--div class="social-share">
							<span>Share:</span>
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin"></i></a>
						</div-->
					</div>
					<div class="blog-author">
						<?php 
						$current_user = get_the_author_meta('email');
						if ($current_user) {
							echo get_avatar($current_user, '100');
						}
						?>
						<h5><?php the_author(); ?></h5>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="tag-share">
							<?php
							the_post_navigation(
								array(
									'prev_text' => '<div class="prev-text"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'lixytechofficial' ) . '</span> <span class="nav-title">%title</span></div>',
									'next_text' => '<div class="next-text"><span class="nav-subtitle">' . esc_html__( 'Next:', 'lixytechofficial' ) . '</span> <span class="nav-title">%title</span></div>',
								)
							);
							?>
						</div>
					</div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
					<!-- END comment-list -->
				</div><!-- #post-<?php the_ID(); ?> -->
			</div>
			<div class="col-lg-4 col-md-8">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<!-- Blog Section End -->

