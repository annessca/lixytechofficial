<?php
/**
 * lixytechofficial functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lixytechofficial
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lixytechofficial_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lixytechofficial_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lixytechofficial, use a find and replace
		 * to change 'lixytechofficial' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lixytechofficial', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'blog-archive', 105, 70 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lixytechofficial' ),
				'menu-2' => esc_html__( 'Secondary', 'lixytechofficial' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lixytechofficial_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 50,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lixytechofficial_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lixytechofficial_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lixytechofficial_content_width', 640 );
}
add_action( 'after_setup_theme', 'lixytechofficial_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lixytechofficial_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lixytechofficial' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lixytechofficial' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lixytechofficial_widgets_init' );

function lixytechofficial_custom_links() {
	add_menu_page( 'Custom Links', 'Custom Links', 'manage_options', 'custom-links', 'custom_links_page', null, 99);
}
add_action( 'admin_menu', 'lixytechofficial_custom_links' );

// Create Global Custom Links
function custom_links_page() {
	?>
	<div class="wrap">
		<h1>Custom Links</h1>
		<form method="post" action="options.php">
			<?php 
				settings_fields( 'section' );
				do_settings_sections( 'theme-options' );
				submit_button();
			?>
		</form>
	</div>
<?php
}

// Twitter
function twitter_link() {
	?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
	<?php 
}

// Facebook
function facebook_link() {
	?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
	<?php 
}

// Linkedin
function linkedin_link() {
	?>
	<input type="text" name="linkedin" id="linkedin" value="<?php echo get_option( 'linkedin' ); ?>" />
	<?php 
}
// Partner With Us
function partner_with_lixy_link() {
	?>
	<input type="text" name="partnerwithlixy" id="partnerwithlixy" value="<?php echo get_option( 'partnerwithlixy' ); ?>" />
	<?php
}
// More About Lixy
function more_about_lixy_link() {
	?>
	<input type="text" name="moreaboutlixy" id="moreaboutlixy" value="<?php echo get_option( 'moreaboutlixy' ); ?>" />
	<?php
}

function custom_links_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
	add_settings_field( 'twitter', 'Twitter URL', 'twitter_link', 'theme-options', 'section' );
	add_settings_field( 'facebook', 'Facebook URL', 'facebook_link', 'theme-options', 'section' );
	add_settings_field( 'linkedin', 'LinkedIn URL', 'linkedin_link', 'theme-options', 'section' );
	add_settings_field( 'partnerwithlixy', 'Partner With Lixy URL', 'partner_with_lixy_link', 'theme-options', 'section' );
	add_settings_field( 'moreaboutlixy', 'More About Lixy URL', 'more_about_lixy_link', 'theme-options', 'section' );

	register_setting('section', 'twitter');
	register_setting('section', 'facebook');
	register_setting('section', 'linkedin');
	register_setting('section', 'partnerwithlixy');
	register_setting('section', 'moreaboutlixy');
}

add_action( 'admin_init', 'custom_links_page_setup');

/**
 * Enqueue scripts and styles.
 */
function lixytechofficial_scripts() {
	wp_enqueue_style( 'lixytechofficial-slicknav', get_template_directory_uri() . '/css/slicknav.css' );
	wp_enqueue_style( 'lixytechofficial-main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'lixytechofficial-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'lixytechofficial-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'lixytechofficial-slick', get_template_directory_uri() . '/css/slick.css' );
	
	wp_enqueue_script( 'lixytechofficial-navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-hide-elements', get_template_directory_uri() . '/js/hide-elements.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-animated.headline', get_template_directory_uri() . '/js/animated.headline.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.4.1', true );
	wp_enqueue_script( 'lixytechofficial-wow', get_template_directory_uri() . '/js/wow.min.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-popper', get_template_directory_uri() . '/js/popper.min.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array(), true );
	wp_enqueue_script( 'lixytechofficial-modernizr-3.5.0', get_template_directory_uri() . '/js/modernizr-3.5.0.min.js', array(), '3.5.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lixytechofficial_scripts' );

/**
 * Remove custom logo classes.
 */

function lixytechofficial_logo_class($html)
{
	$html = str_replace('class="custom-logo"', '', $html);
	$html = str_replace('class="custom-logo-link"', '', $html);
	return $html;
}

add_filter('get_custom_logo','lixytechofficial_logo_class');

/**
 * Set the Slicknav to fire on page load
 */

function slicknav_fire() {
	$output="<script>
	jQuery(function() {
		var menu = jQuery('ul#navigation');
		if(menu.length){
			menu.slicknav({
			  prependTo: '.mobile_menu',
			  closedSymbol: '+',
			  openedSymbol:'-'
			});
		};
	});
	</script>";
	echo $output;
}
add_action('wp_head','slicknav_fire');

/**
 * Register a custom post type.
 *
 * This function makes it possible to create custom posts for testimonials post entries.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function lixytechofficial_testimonials() {
    register_post_type( 'testimonials', array(
        'labels'    => array(
            'name'  => __( 'Testimonials' ),
			'singular_name' => __( 'Testimonials' )
        ),
        'public'			=> true,
        'hierarchical'		=> true,
        'has_archive'		=> true,
		'menu_icon'			=> 'dashicons-testimonial',
        'supports'			=> array(
            'title',
			'editor',
			'excerpt',
            'thumbnail',
        )
    ));
}
add_action( 'init', 'lixytechofficial_testimonials', 0 );

/**
 * Register a custom post type.
 *
 * This function makes it possible to create custom posts for case studies post entries.
 *
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 */
function lixytechofficial_casestudies() {
    register_post_type( 'lixy-projects', array(
        'labels'    => array(
            'name'  => __( 'Case Studies' ),
			'singular_name' => __( 'Case Studies' )
        ),
        'public'			=> true,
        'hierarchical'		=> true,
        'has_archive'		=> true,
		'menu_icon'			=> 'dashicons-performance',
		'show_in_rest'		=> true,
        'supports'			=> array(
            'title',
			'editor',
			'excerpt',
            'thumbnail',
        )
    ));
}
add_action( 'init', 'lixytechofficial_casestudies', 0 );

// PAGINATION
function lixytechofficial_custom_pagination($numpages = '', $pagerange = '', $paged='') {
    if (empty($pagerange)) {
        $pagerange = 0;
    }
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }
    /** 
     * We construct the pagination arguments to enter into our paginate_links
     * function. 
     */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 14,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => "Previous",
        'next_text'       => "Next",
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );
    $paginate_links = paginate_links($pagination_args);
    if ($paginate_links) {
        echo "<div class='custom-pagination'>";
            echo $paginate_links;
        echo "</div>";
    }
}
add_action( 'wp_loaded', 'lixytechofficial_custom_pagination' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

