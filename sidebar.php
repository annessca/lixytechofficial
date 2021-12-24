<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lixytechofficial
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="sidebar-option">
	<aside class="single_sidebar_widget search_widget">
		<h4 class="widget_title">Search Website</h4>
		<?php lixytechofficial_searchbar(); ?>
	</aside>
	<div class="so-categories">
		<h5 class="title">Popular Tags</h5>
		<ul>
			<?php lixytechofficial_tags_list_count(); ?>
		</ul>
	</div>
	<div class="so-latest">
		<h5 class="title">Recent posts</h5>
		<?php 

		$latest_posts_count = intval(get_post_meta($post->ID, 'archived-posts-no', true));
		if($latest_posts_count > 200 || $latest_posts_count < 2) $latest_posts_count = 5;
		$latest_post_query = new WP_Query('post_type=post&nopaging=1');
		if($latest_post_query->have_posts()) {
			$counter = 1;
			while($latest_post_query->have_posts() && $counter <= $latest_posts_count) {
				$latest_post_query->the_post();
				?>
				<div class="latest-item" id="post-<?php the_ID(); ?>">
					<div class="li-pic">
						<?php the_post_thumbnail('blog-archive'); ?>
					</div>
					<div class="li-text">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					</div>
				</div>
				<?php
				$counter++;
			}
		}
		wp_reset_postdata();
		?>
	</div>

	<div class="so-tags">
		<h5 class="title">Categories</h5>
		<?php lixytechofficial_all_categories(); ?>
	</div>
</div>
