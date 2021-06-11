<?php
/**
 *a2zthemesdefault theme options.
 *
 *
 * @subpackage a2zthemes
 */

if ( !function_exists('az_multipurpose_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function az_multipurpose_get_default_theme_options()
    {

        $default = array();
        $default['az_multipurpose_button']=esc_html__('Contact Us', 'az-multipurpose');
        $default['az_multipurpose_apply_button_link']='';



        // footer copyright.
        $default['az_multipurpose_copyright'] = esc_html__('Copyright All Rights Reserved', 'az-multipurpose');

        // Home Page Top header Info.
        $default['az_multipurpose_top_header_section'] = 'hide';
        $default['az_multipurpose_top_header_section_phone_number_icon'] = 'fa-phone';
        $default['az_multipurpose_top_header_section_location_icon']='fa-home';
        $default['az_multipurpose_top_header_location_a']='';
        $default['az_multipurpose_top_header_phone_no'] = '';
        $default['az_multipurpose_email_icon'] = 'fa-envelope-o';
        $default['az_multipurpose_top_header_email'] = '';
        $default['az_multipurpose_social_link_hide_option'] = 1;
	    $default['az_multipurpose_facebook_url']='';
	    $default['az_multipurpose_youtube_url']='';
	    $default['az_multipurpose_linkedin_url']='';
	    $default['az_multipurpose_twitter_url']='';
        $default['az_multipurpose_welcome_message']= esc_html__('Welcome To Our Business Site', 'az-multipurpose');
        // Blog.
        $default['az_multipurpose_sidebar_layout_option'] = 'right-sidebar';
        $default['az_multipurpose_blog_title_option'] = esc_html__('Latest Blog', 'az-multipurpose');
        $default['az_multipurpose_blog_excerpt_option'] = 'excerpt';
        $default['az_multipurpose_description_length_option'] = 40;
        $default['az_multipurpose_exclude_cat_blog_archive_option'] = '';

        $default['az_multipurpose_top_header_layout_section']='layout1';
        // Details page.
        $default['az_multipurpose_show_feature_image_single_option'] = 'show';

        // Color Option.
        $default['az_multipurpose_primary_color'] = ' #f9840b';
        $default['az_multipurpose_top_header_background_color'] = ' #f9840b';
        $default['az_multipurpose_top_footer_background_color'] = '#444444';
        $default['az_multipurpose_bottom_footer_background_color'] = ' #f9840b';
        $default['az_multipurpose_front_page_hide_option'] = 0;
        $default['az_multipurpose_breadcrumb_setting_option'] = 'enable';
        $default['az_multipurpose_post_search_placeholder_option'] = esc_html__('Search', 'az-multipurpose');
        $default['az_multipurpose_hide_breadcrumb_front_page_option'] = 1;
        $default['az_multipurpose_color_reset_option'] = 'do-not-reset';

        //news Section
        $default['az_multipurpose_news_header_section']='hide';
        $default['az_multipurpose_notice']=esc_html__('Notice :', 'az-multipurpose');
        $default['az_multipurpose_news_cat_id']='';
        $default['az_multipurpose_no_of_news']=10;

        // Pass through filter.
        $default = apply_filters( 'az_multipurpose_get_default_theme_options', $default );
        return $default;
    }
endif;
