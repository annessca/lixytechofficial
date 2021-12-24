<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lixytechofficial
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<div class="col-lg-6">
		<div class="as-pic">
			<?php lixytechofficial_post_thumbnail(); ?>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="as-text">
			<div class="blog-section-title">
				<?php the_title( '<h2 class="entry-title">', '</h2>' );?>
				<?php
				if ( 'post' === get_post_type() ) :
					lixytechofficial_feature_blog_info();
				endif; 
				?>
			</div>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="primary-btn">Read More</a>
			<div class="bt-author">
				<div class="ba-pic">
					<?php 
					$current_user = get_the_author_meta('email');
					if ($current_user) {
						echo get_avatar($current_user, '40');
					}
					?>
				</div>
				<div class="ba-text">
					<h5><?php the_author(); ?></h5>
					<span><?php the_author_meta( 'description' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div-->
</article><!-- #post-<?php the_ID(); ?> -->