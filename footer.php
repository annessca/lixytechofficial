<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lixytechofficial
 */

?>
	<footer>
    	<!--? Footer Start-->
		<div class="footer-area black-bg site-footer">
			<div class="container site-info">
				<div class="footer-top footer-padding">
					<!-- Footer Menu -->
					<div class="row">
						<div class="col-xl-12">
							<div class="single-footer-caption mb-50 text-center">
								<!-- logo -->
								<div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
									<?php the_custom_logo();?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								</div>
								<!-- Menu -->
								<div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
									<div class="main-header main-header2">
										<div class="menu-wrapper menu-wrapper2">
											<!-- Footer-sub-menu -->
											<div class="main-menu main-menu2 text-center">
												<nav>
													<?php
													wp_nav_menu(
														array(
															'theme_location'	=> 'menu-2',
															'container'			=> 'ul',
															'menu_id'			=> 'footernav',
														)
													);
													?>
												</nav>
											</div>   
										</div>
									</div>
								</div>
								<!-- social -->
								<div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
									<a href="<?php echo get_option('twitter'); ?>"><i class="fab fa-twitter"></i></a>
									<a href="<?php echo get_option('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
									<a href="<?php echo get_option('linkedin'); ?>"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="row d-flex align-items-center">
						<div class="col-lg-12">
							<div class="footer-copy-right text-center">
								<p>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This theme is developed by <a>LixyTECH</a> and powered by <a href="https://wordpress.org/" target="_blank">WordPress </a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
		<!-- Footer End-->
	</footer>
	<!-- Scroll Up -->
	<div id="back-top" >
		<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
