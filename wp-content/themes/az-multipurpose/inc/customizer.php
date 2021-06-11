<?php
/**
 * a2zthemes Theme Customizer
 *
 * @package a2zthemes
 */
require get_template_directory() . '/inc/customizer-pro/class-customize.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function az_multipurpose_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  $default=az_multipurpose_get_default_theme_options();


	require get_template_directory() . '/inc/a2zthemes/customizer-all-option.php';
	require get_template_directory() . '/inc/a2zthemes/apply-button/apply-button.php';
	require get_template_directory() . '/inc/a2zthemes/news-top/news-customize.php';


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'az_multipurpose_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'az_multipurpose_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'az_multipurpose_customize_register' );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function az_multipurpose_customize_preview_js() {
	wp_enqueue_script( 'az-multipurpose-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'az_multipurpose_customize_preview_js' );
