<?php
/**
* a2zthemes functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package a2zthemes
*/
if ( ! function_exists( 'az_multipurpose_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme color, which
	* runs before the init color. The init color is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function az_multipurpose_setup() {
		/*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on a2zthemes, use a find and replace
* to change 'az-multipurpose' to the name of your theme in all the template files.
*/
		load_theme_textdomain( 'az-multipurpose' );
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
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			"primary" => esc_html__( "primary", 'az-multipurpose' ),
		) );
		/*
* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.
*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		/*add excert on page*/
add_post_type_support( 'page', 'excerpt' );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'az_multipurpose_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		/*for header image */
		$az_multipurpose_args = array(
			'flex-width'    => true,
			'width'         => 980,
			'flex-height'    => true,
			'height'        => 200,
			'default-image' => get_template_directory_uri() . '/assets/images/header.png',
		);
		add_theme_support( 'custom-header', $az_multipurpose_args );
		add_theme_support( 'woocommerce' );
// woocommerce images popup code
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
	}
endif;;
add_action( 'after_setup_theme', 'az_multipurpose_setup' );
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function az_multipurpose_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'az_multipurpose_content_width', 640 );
}
add_action( 'after_setup_theme', 'az_multipurpose_content_width', 0 );
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function az_multipurpose_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'az-multipurpose' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'az-multipurpose' ),
		'before_widget' => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer1 ', 'az-multipurpose'),
		'id' => 'footer1',
		'description' => esc_html__('Add widgets here.', 'az-multipurpose'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer2 ', 'az-multipurpose'),
		'id' => 'footer2',
		'description' => esc_html__('Add widgets here.', 'az-multipurpose'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer3 ', 'az-multipurpose'),
		'id' => 'footer3',
		'description' => esc_html__('Add widgets here.', 'az-multipurpose'),
		'before_widget' => '<section id="%1$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'az_multipurpose_widgets_init' );
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
require get_template_directory() . '/inc/fileloader.php';
require get_template_directory() . '/inc/customizer.php';
/**
* Load Jetpack compatibility file.
*/
require get_template_directory() . '/inc/jetpack.php';
/**
* Load Dynamic css.
*/
$az_multipurpose_dynamic_css_options = az_multipurpose_get_option('az_multipurpose_color_reset_option');
if ($az_multipurpose_dynamic_css_options== "do-not-reset" || $az_multipurpose_dynamic_css_options == "") {
	include get_template_directory() . '/inc/color/color.php';
} elseif ($az_multipurpose_dynamic_css_options == "reset-all") {
	do_action('az_multipurpose_colors_reset');
}
/*for header image */
$az_multipurpose_args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/assets/images/header.png',
);
add_theme_support( 'custom-header', $az_multipurpose_args );
/* =============================hook for breadcumb ==================================================*/
if (!function_exists('az_multipurpose_breadcrumb_type')) :
function az_multipurpose_breadcrumb_type()
{
if (function_exists('bcn_display')) {
?>
<div class="page-title">
	<div class="<?php $section_option_layout = az_multipurpose_get_option('az_multipurpose_site_layout_options');
		if($section_option_layout =='boxed'){ echo esc_attr('container'); }else{ echo esc_attr('container-fluid');} ?> ">
		<?php
		echo "<div class='breadcrumbs'><div id='cwp-breadcrumbs' class='cwp-breadcrumbs'>";
			bcn_display();
		echo "</div></div>";
		?>
	</div>
</div>
<?php
}
}
endif;
add_action('az_multipurpose_breadcrumb_type', 'az_multipurpose_breadcrumb_type', 10, 1);
/* =====adding menu last and first class==========*/
function az_multipurpose_first_and_last_menu_class($items) {
$items[1]->classes[] = 'first-menu';
$items[count($items)]->classes[] = 'last-menu';
return $items;
}
add_filter('wp_nav_menu_objects', 'az_multipurpose_first_and_last_menu_class');
/*theme activation plugins*/
require get_template_directory() . '/library/TGM/class-tgm-plugin-activation.php';
require get_template_directory() . '/library/TGM/plugin-slug.php';
/* ====================== No sidebar ======================*/
function az_multipurpose_no_sidebar(){
$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );
if ($sidebardesignlayout != "default-sidebar")
{
$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );
} else
{
$sidebardesignlayout = esc_attr(az_multipurpose_get_option('az_multipurpose_sidebar_layout_option' ));
}
if($sidebardesignlayout == 'no-sidebar'){
?>
<div  id='primary' class="col-lg-12 col-md-12 col-sm-12 blog-post">
	<?php } else{?>
	<div  id='primary' class="col-lg-8 col-md-8 col-sm-12 blog-post">
		<?php }
		}
		/*
		*================== fuction News ticker ==========================================
		*/
		function az_multipurpose_news_ticker(){
			// retrieving Customizer Value
			$section_option = az_multipurpose_get_option('az_multipurpose_top_header_section');
			if ($section_option == 'show') {
					$az_multipurpose_news_section_cat_id = az_multipurpose_get_option('az_multipurpose_news_cat_id');
					$az_multipurpose_news_section_number = az_multipurpose_get_option('az_multipurpose_no_of_news');
					$az_multipurpose_news_section_title = az_multipurpose_get_option('az_multipurpose_notice');
		?>
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-9 col-sm-12">
						<?php
						$az_multipurpose_news_category = get_category($az_multipurpose_news_section_cat_id);
						if(!empty($az_multipurpose_news_section_cat_id))
						{
								if (!empty($az_multipurpose_news_section_cat_id)) {
										$count = $az_multipurpose_news_category->category_count;
										$no_of_news = az_multipurpose_get_option('az_multipurpose_no_of_news');
										if ($count > 0 && $no_of_news > 0) {
						?>
						<!-- Start top contact info Section -->
						<div class="ticker">
							<strong><?php echo esc_html($az_multipurpose_news_section_title); ?></strong>
							<ul>
								<?php
								$i = 0;
								if (!empty($az_multipurpose_news_section_cat_id)) {
										$az_multipurpose_home_news_section = array('cat' => $az_multipurpose_news_section_cat_id, 'posts_per_page' => $az_multipurpose_news_section_number);
										$az_multipurpose_home_news_section_query = new WP_Query($az_multipurpose_home_news_section);
										if ($az_multipurpose_home_news_section_query->have_posts()) {
												while ($az_multipurpose_home_news_section_query->have_posts()) {
														$az_multipurpose_home_news_section_query->the_post();
								?>
								<li><a href="<?php the_permalink()?>"><?php the_title(); ?></a></li>
								<?php
								$i++;
								}
								}
								wp_reset_postdata();
								}
								?>
							</ul>
						</div>
						<?php
						}
						}
						}
						?>
					</div>
					<!-- End top contact info Section -->
					<div class="col-xl-3 col-lg-3 col-sm-12">
						<?php
						$layout_header = az_multipurpose_get_option('az_multipurpose_top_header_layout_section');
						if($layout_header=='layout2'){
						?>
						<?php
						$az_multipurpose_apply_button = az_multipurpose_get_option('az_multipurpose_button');
						$az_multipurpose_apply_link = az_multipurpose_get_option('az_multipurpose_apply_button_link');
						if(!empty($az_multipurpose_apply_link))
						{?>
						<div class="layout2 apply-now">
							<a href="<?php echo esc_url_raw(  $az_multipurpose_apply_link); ?>"
								class="read-more-background"><?php echo  esc_html($az_multipurpose_apply_button); ?>
							</a>
						</div>
						<?php } } else{
																	$social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
																	if ($social_menu == 1) {
						?>
						<div class="top-header-socialicon">
							<ul class="menu-social-menu">
								<?php
								$social_fb = az_multipurpose_get_option('az_multipurpose_facebook_url');
								$social_youtube = az_multipurpose_get_option('az_multipurpose_youtube_url');
								$social_linkedin = az_multipurpose_get_option('az_multipurpose_linkedin_url');
								$social_twitter = az_multipurpose_get_option('az_multipurpose_twitter_url');
								if(!empty($social_fb)){ ?>
								<li><a href="<?php echo esc_url($social_fb); ?>"><i class="fa fa-facebook"></i></a></li>
								<?php }
								if(!empty($social_youtube)){ ?>
								<li><a href="<?php echo esc_url($social_youtube); ?>"><i class="fa fa-youtube"></i></a></li>
								<?php }
								if(!empty($social_linkedin)){ ?>
								<li><a href="<?php echo esc_url($social_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
								<?php }
								if(!empty($social_twitter)){ ?>
								<li><a href="<?php echo esc_url($social_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
								<?php } ?>
							</ul>
						</div>
						<?php }  } ?>
					</div>
				</div>
			</div>
		</div>
		<?php } }?>
