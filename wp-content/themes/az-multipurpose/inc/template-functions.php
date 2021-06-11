<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package a2zthemes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function az_multipurpose_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'az_multipurpose_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function az_multipurpose_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'az_multipurpose_pingback_header' );



if (!function_exists('az_multipurpose_get_category')) :
	function az_multipurpose_get_category($post_id = 0)
	{

		if (0 == $post_id) {
			global $post;
			$post_id = $post->ID;
		}
		$categories = get_the_category($post_id);
		$output = '';
		$separator = ' ';
		if ($categories) {
			$output .= '<span class="cat-links">';
			foreach ($categories as $category) {
				$output .= '<a class="at-cat-name-' . esc_attr($category->term_id) . '" href="' . esc_url(get_category_link($category->term_id)) . '"  rel="category tag">' . esc_html($category->cat_name) . '</a>' . $separator;

			}
			echo $output;
			$output .= '</span>';
			return $output;

		}
	}
endif;
