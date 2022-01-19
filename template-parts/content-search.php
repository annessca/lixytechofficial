<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lixytechofficial
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Blog Section Begin -->
	<section class="blog-section spad-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 p-0 m-auto">
					<div class="blog-item">
						<div class="bi-pic">
							<?php lixytechofficial_post_thumbnail(); ?>
						</div>
						<div class="bi-text">
							<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>
							<ul>
								<li>by <?php the_author(); ?></li>
								<li><?php the_date(); ?></li>
								<li><?php the_category(); ?></li>
							</ul>
							<?php the_excerpt(); ?>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section End -->
</article><!-- #post-<?php the_ID(); ?> -->
