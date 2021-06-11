<?php
/**
 * Breadcrumb  display option options
 * @param null
 * @return array $az_multipurpose_show_breadcrumb_option
 *
 */
if (!function_exists('az_multipurpose_show_breadcrumb_option')) :
    function az_multipurpose_show_breadcrumb_option()
    {
        $az_multipurpose_show_breadcrumb_option = array(
            'enable' => esc_html__('Enable', 'az-multipurpose'),
            'disable' => esc_html__('Disable', 'az-multipurpose')
        );
        return apply_filters('az_multipurpose_show_breadcrumb_option', $az_multipurpose_show_breadcrumb_option);
    }
endif;


/**
 * Reset Option
 *
 *
 * @param null
 * @return array $az_multipurpose_reset_option
 *
 */
if (!function_exists('az_multipurpose_reset_option')) :
    function az_multipurpose_reset_option()
    {
        $az_multipurpose_reset_option = array(
            'do-not-reset' => esc_html__('Do Not Reset', 'az-multipurpose'),
            'reset-all' => esc_html__('Reset All', 'az-multipurpose'),
        );
        return apply_filters('az_multipurpose_reset_option', $az_multipurpose_reset_option);
    }
endif;









/**
 * Slider  options
 * @param null
 * @return array $az_multipurpose_slider_option
 *
 */
if (!function_exists('az_multipurpose_slider_option')) :
    function az_multipurpose_slider_option()
    {
        $az_multipurpose_slider_option = array(
            'show' => esc_html__('Show', 'az-multipurpose'),
            'hide' => esc_html__('Hide', 'az-multipurpose')
        );
        return apply_filters('az_multipurpose_slider_option', $az_multipurpose_slider_option);
    }
endif;


/*==========================layout option ========================*/

if (!function_exists('az_multipurpose_sidebar_layout')) :
    function az_multipurpose_sidebar_layout()
    {
        $az_multipurpose_sidebar_layout = array(
            'right-sidebar' => esc_html__('Right Sidebar', 'az-multipurpose'),
            'left-sidebar' => esc_html__('Left Sidebar', 'az-multipurpose'),
            'no-sidebar' => esc_html__('No Sidebar', 'az-multipurpose'),
        );
        return apply_filters('az_multipurpose_sidebar_layout', $az_multipurpose_sidebar_layout);
    }
endif;

/**
 * Blog/Archive Description Option
 *
 * @since a2zthemes1.0.0
 *
 *
 *
 * @param null
 * @return array $az_multipurpose_blog_excerpt
 *
 */
if (!function_exists('az_multipurpose_blog_excerpt')) :
    function az_multipurpose_blog_excerpt()
    {
        $az_multipurpose_blog_excerpt = array(
            'excerpt' => esc_html__('Excerpt', 'az-multipurpose'),
            'content' => esc_html__('Content', 'az-multipurpose'),

        );
        return apply_filters('az_multipurpose_blog_excerpt', $az_multipurpose_blog_excerpt);
    }
endif;

/**
 * Show/Hide Feature Image  options
 *
 * @since a2zthemes 1.0.0
 *
 * @param null
 * @return array $az_multipurpose_show_feature_image_option
 *
 */
if (!function_exists('az_multipurpose_show_feature_image_option')) :
    function az_multipurpose_show_feature_image_option()
    {
        $az_multipurpose_show_feature_image_option = array(
            'show' => esc_html__('Show', 'az-multipurpose'),
            'hide' => esc_html__('Hide', 'az-multipurpose')
        );
        return apply_filters('az_multipurpose_show_feature_image_option', $az_multipurpose_show_feature_image_option);
    }
endif;



if (!function_exists('az_multipurpose_header_layout_option_option')) :
    function az_multipurpose_header_layout_option_option()
    {
        $az_multipurpose_header_layout_option_option = array(
            'layout1' => esc_html__('Layout 1', 'az-multipurpose'),
            'layout2' => esc_html__('Layout2', 'az-multipurpose'),
            'layout3' => esc_html__('Layout3', 'az-multipurpose'),
            'layout4' => esc_html__('Layout4', 'az-multipurpose')



        );
        return apply_filters('az_multipurpose_header_layout_option_option', $az_multipurpose_header_layout_option_option);
    }
endif;
