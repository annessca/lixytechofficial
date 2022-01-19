<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lixytechofficial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.slicknav.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/hover-direction-snake.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/main.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
		jQuery(document).ready(function($){
			// Remove width and height attributes from Image tags
  			$('img').each(function(){
  				$(this).removeAttr('width')
  				$(this).removeAttr('height');
 			});

			 // Attach the background-image style to the data-background attribute
			$('[data-background').each(function () {
				$(this).css('background-image', 'url(' + $(this).attr('data-background') + ')')
			});

  			// Call the Owl Carousel Plugin
			$('.review-slider').owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				items: 1,
				autoplay: true
    		});

			/* Brand Active */
  			$('.brand-active').slick({
				dots: false,
				infinite: true,
				autoplay: true,
				speed: 400,
				arrows: false,
				slidesToShow: 5,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
						slidesToShow: 4,
						slidesToScroll: 3,
						infinite: true,
						dots: false,
						}
					},
					{
						breakpoint: 1024,
						settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: false,
						}
					},
					{
						breakpoint: 991,
						settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false,
						}
					},
					{
						breakpoint: 768,
						settings: {
						slidesToShow: 2,
						slidesToScroll: 1
						}
					},
					{
						breakpoint: 480,
						settings: {
						slidesToShow: 1,
						slidesToScroll: 1
						}
					},
				]
  			});

		});
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- ? Preloader Start -->
	<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/loading.gif" alt="Website logo">
                </div>
            </div>
        </div>
    </div>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lixytechofficial' ); ?></a>
		<header>
			<div class="header-area header-transparent">
				<div class="main-header header-sticky">
					<div class="container-fluid">
						<div class="menu-wrapper d-flex align-items-center justify-content-between">
							<div class="logo">
								<?php
								the_custom_logo();
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div>
							<div class="main-menu f-right d-none d-lg-block">
								<nav>
									
									<?php
									wp_nav_menu(
										array(
											'theme_location'	=> 'menu-1',
											'container'			=> 'ul',
											'menu_id'			=> 'navigation',
										)
									);
									?>
								</nav><!-- #site-navigation -->
							</div>
							<!-- Header-btn -->
							<div class="header-btns d-none d-lg-block f-right">
                           		<a href="<?php echo get_option('partnerwithlixy'); ?>" class="btn">Partner With Lixy</a>
                       		</div>
							<!-- Mobile Menu -->
							<div class="col-12">
                            	<div class="mobile_menu d-block d-lg-none"></div>
                        	</div>
							
						</div>
					</div>
				</div><!-- .main-header header-sticky -->
			</div>
		</header><!-- #masthead -->
