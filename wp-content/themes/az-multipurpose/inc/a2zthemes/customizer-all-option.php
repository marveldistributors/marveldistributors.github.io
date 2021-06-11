<?php
/**
 *a2zthemes  Header Info Section
 *
 */



$wp_customize->add_section(
    'az_multipurpose_top_header_layout_section',
    array(
        'priority' => 22,
        'capability' => 'edit_theme_options',
        'title' => esc_html__(' Header Layout Option', 'az-multipurpose'),
    )
);

$wp_customize->add_setting(
    'az_multipurpose_top_header_layout_section',
    array(
        'default' => $default['az_multipurpose_top_header_layout_section'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
        'transport'         => 'postMessage',
    )
);

$header_layout_option = az_multipurpose_header_layout_option_option();
$wp_customize->add_control(
    'az_multipurpose_top_header_layout_section',
    array(
        'type' => 'radio',
        'label' => esc_html__('Header Layout Choose  Option', 'az-multipurpose'),
        'description' => esc_html__('Show/hide Option for Top Header Info Section.', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_layout_section',
        'choices' => $header_layout_option,
        'priority' => 0
    )
);



/*========================================top header Section==================================================*/




$wp_customize->add_section(
    'az_multipurpose_top_header_info_section',
    array(
        'priority' => 22,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Top Header Info', 'az-multipurpose'),
    )
);

$wp_customize->add_setting(
    'az_multipurpose_top_header_section',
    array(
        'default' => $default['az_multipurpose_top_header_section'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
    )
);

$hide_show_top_header_option = az_multipurpose_slider_option();
$wp_customize->add_control(
    'az_multipurpose_top_header_section',
    array(
        'type' => 'radio',
        'label' => esc_html__('Top Header Info Option', 'az-multipurpose'),
        'description' => esc_html__('Show/hide Option for Top Header Info Section.', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'choices' => $hide_show_top_header_option,
        'priority' => 0
    )
);

/**
 * Field for Font Awesome Icon
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_top_header_section_location_icon',
    array(
        'default' => $default['az_multipurpose_top_header_section_location_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'az_multipurpose_top_header_section_location_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Class Name for location', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 1
    )
);

/**
 * Field for Top Header location
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_top_header_location_a',
    array(
        'default' => $default['az_multipurpose_top_header_location_a'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'az_multipurpose_top_header_location_a',
    array(
        'type' => 'text',
        'label' => esc_html__('location', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 2
    )
);



/**
 * Field for Font Awesome Icon
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_top_header_section_phone_number_icon',
    array(
        'default' => $default['az_multipurpose_top_header_section_phone_number_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'az_multipurpose_top_header_section_phone_number_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Class Name For Phone', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 3
    )
);

/**
 * Field for Top Header Phone Number
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_top_header_phone_no',
    array(
        'default' => $default['az_multipurpose_top_header_phone_no'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'az_multipurpose_top_header_phone_no',
    array(
        'type' => 'text',
        'label' => esc_html__('Phone Number', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 4
    )
);

/**
 * Field for Fonsome Icon
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_email_icon',
    array(
        'default' => $default['az_multipurpose_email_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'az_multipurpose_email_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Class Name for Email', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 5
    )
);

/**
 * Field for Top Header Email Address
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_top_header_email',
    array(
        'default' => $default['az_multipurpose_top_header_email'],
        'sanitize_callback' => 'sanitize_email',
    )
);
$wp_customize->add_control(
    'az_multipurpose_top_header_email',
    array(
        'type' => 'email',
        'label' => esc_html__('Email Address', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_header_info_section',
        'priority' => 6
    )
);


$wp_customize->add_section(
    'az_multipurpose_top_social_sharing_section',
    array(
        'priority' => 22,
        'capability' => 'edit_theme_options',
        'title' => esc_html__(' Social Sharing Option', 'az-multipurpose'),

    )
);



/**
 *   Show/Hide Social Link
 */
$wp_customize->add_setting(
    'az_multipurpose_social_link_hide_option',
    array(
        'default' => $default['az_multipurpose_social_link_hide_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_checkbox',
    )
);
$wp_customize->add_control('az_multipurpose_social_link_hide_option',
    array(
        'label' => esc_html__('Hide/Show Social Menu', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_social_sharing_section',
        'type' => 'checkbox',
        'priority' => 10,

    )
);







/**
 * Field for Get Started facebook Link
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_facebook_url',
    array(
        'default' => $default['az_multipurpose_facebook_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'az_multipurpose_facebook_url',
    array(
        'type' => 'url',
        'label' => esc_html__('Facebook Url Link', 'az-multipurpose'),
        'description' => esc_html__('Use full url link', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_social_sharing_section',
        'priority' => 11


    )
);

$wp_customize->add_setting(
    'az_multipurpose_youtube_url',
    array(
        'default' => $default['az_multipurpose_youtube_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'az_multipurpose_youtube_url',
    array(
        'type' => 'url',
        'label' => esc_html__('Youtube Url Link', 'az-multipurpose'),
        'description' => esc_html__('Use full url link', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_social_sharing_section',
        'priority' => 12
    )
);


$wp_customize->add_setting(
    'az_multipurpose_linkedin_url',
    array(
        'default' => $default['az_multipurpose_linkedin_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'az_multipurpose_linkedin_url',
    array(
        'type' => 'url',
        'label' => esc_html__('linkedin Url Link', 'az-multipurpose'),
        'description' => esc_html__('Use full url link', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_social_sharing_section',
        'priority' => 13
    )
);



$wp_customize->add_setting(
    'az_multipurpose_twitter_url',
    array(
        'default' => $default['az_multipurpose_twitter_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'az_multipurpose_twitter_url',
    array(
        'type' => 'url',
        'label' => esc_html__('twitter Url Link', 'az-multipurpose'),
        'description' => esc_html__('Use full url link', 'az-multipurpose'),
        'section' => 'az_multipurpose_top_social_sharing_section',
        'priority' => 14
    )
);







/*===============================    layout design =====================================*/




/**
 * Layout/Design Option
 *
 */
$wp_customize->add_panel(
    'az_multipurpose_design_layout_options',
    array(
        'priority' => 25,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__(' Layout/Design Option', 'az-multipurpose'),
    )
);

/*-------------------------------------------------------------------------------------------*/
/**
 * Sidebar Option
 *
 */
$wp_customize->add_section(
    'az_multipurpose_default_sidebar_layout_option',
    array(
        'title' => esc_html__('Default Sidebar Layout Option', 'az-multipurpose'),
        'panel' => 'az_multipurpose_design_layout_options',
        'priority' => 6,
    )
);

/**
 * Sidebar Option
 */
$wp_customize->add_setting(
    'az_multipurpose_sidebar_layout_option',
    array(
        'default' => $default['az_multipurpose_sidebar_layout_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
    )
);


$layout = az_multipurpose_sidebar_layout();
$wp_customize->add_control('az_multipurpose_sidebar_layout_option',
    array(
        'label' => esc_html__('Default Sidebar Layout', 'az-multipurpose'),
        'description' => esc_html__('Home/front page does not have sidebar. Inner pages like blog, archive single page/post Sidebar Layout. However single page/post sidebar can be overridden.if you need on a page and post sidebar from here, you need to first set default sidebar on page and post', 'az-multipurpose'),
        'section' => 'az_multipurpose_default_sidebar_layout_option',
        'type' => 'select',
        'choices' => $layout,
        'priority' => 10
    )
);


/*-------------------------------------------------------------------------------------------*/

/**
 * Blog/Archive Layout Option
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_blog_archive_layout_option',
    array(
        'title' => esc_html__('Blog/Archive Layout Option', 'az-multipurpose'),
        'panel' => 'az_multipurpose_design_layout_options',
        'priority' => 7,
    )
);


/**
 * Blog Page Title
 */
$wp_customize->add_setting(
    'az_multipurpose_blog_title_option',
    array(
        'default' => $default['az_multipurpose_blog_title_option'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('az_multipurpose_blog_title_option',
    array(
        'label' => esc_html__('Blog Page Title', 'az-multipurpose'),
        'section' => 'az_multipurpose_blog_archive_layout_option',
        'type' => 'text',
        'priority' => 11
    )
);

/**
 * Blog/Archive excerpt option
 */
$wp_customize->add_setting(
    'az_multipurpose_blog_excerpt_option',
    array(
        'default' => $default['az_multipurpose_blog_excerpt_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
    )
);
$blogexcerpt = az_multipurpose_blog_excerpt();
$wp_customize->add_control('az_multipurpose_blog_excerpt_option',
    array(
        'choices' => $blogexcerpt,
        'label' => esc_html__('Show Description From', 'az-multipurpose'),
        'section' => 'az_multipurpose_blog_archive_layout_option',
        'type' => 'select',
        'priority' => 8
    )
);

/**
 * Description Length In Words
 */
$wp_customize->add_setting(
    'az_multipurpose_description_length_option',
    array(
        'default' => $default['az_multipurpose_description_length_option'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control('az_multipurpose_description_length_option',
    array(
        'label' => esc_html__('Description Length In Words', 'az-multipurpose'),
        'section' => 'az_multipurpose_blog_archive_layout_option',
        'type' => 'number',
        'priority' => 12
    )
);
/*-------------------------------------------------------------------------------------------*/
/**
 * Feature Image Option
 *
 */
$wp_customize->add_section(
    'az_multipurpose_feature_image_info_option',
    array(
        'title' => esc_html__('Feature Image Option For Single post / Page', 'az-multipurpose'),
        'panel' => 'az_multipurpose_design_layout_options',
        'priority' => 6,
    )
);


/**
 * Feature Image Option Single page
 */
$wp_customize->add_setting(
    'az_multipurpose_show_feature_image_single_option',
    array(
        'default' => $default['az_multipurpose_show_feature_image_single_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
    )
);

$hide_show_feature_image_option = az_multipurpose_show_feature_image_option();
$wp_customize->add_control(
    'az_multipurpose_show_feature_image_single_option',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show/Hide Feature Image For Single Page/post', 'az-multipurpose'),
        'section' => 'az_multipurpose_feature_image_info_option',
        'choices' => $hide_show_feature_image_option,
        'priority' => 5
    )
);




/*=================================theme-options-customizer==================================*/





/**
 * Theme Option
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'az_multipurpose_theme_options',
    array(
        'priority' => 24,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Theme Option', 'az-multipurpose'),
    )
);


/*----------------------------------------------------------------------------------------------*/
/**
 * Color Options
 *
 * @since 1.0.0
 */

$wp_customize->add_setting(
    'az_multipurpose_primary_color',
    array(
        'default' => $default['az_multipurpose_primary_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'az_multipurpose_primary_color', array(
    'label' => esc_html__('Primary Color', 'az-multipurpose'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'az-multipurpose'),
    'section' => 'colors',

    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Top Header Background Color
 *
 * @since 1.0.0
 */

$wp_customize-> add_setting(
    'az_multipurpose_top_header_background_color',
    array(
        'default' => $default['az_multipurpose_top_header_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize-> add_control( new WP_Customize_Color_Control( $wp_customize, 'az_multipurpose_top_header_background_color', array(
    'label' => esc_html__('Top Header Background Color', 'az-multipurpose'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'az-multipurpose'),
    'section' => 'colors',

    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Top Footer Background Color
 *
 * @since 1.0.0
 */

$wp_customize->add_setting(
    'az_multipurpose_top_footer_background_color',
    array(
        'default' => $default['az_multipurpose_top_footer_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'az_multipurpose_top_footer_background_color', array(
    'label' => esc_html__('Top Footer Background Color', 'az-multipurpose'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'az-multipurpose'),
    'section' => 'colors',

    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Bottom Footer Background Color
 *
 * @since 1.0.0
 */

$wp_customize->add_setting(
    'az_multipurpose_bottom_footer_background_color',
    array(
        'default' => $default['az_multipurpose_bottom_footer_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'az_multipurpose_bottom_footer_background_color', array(
    'label' => esc_html__('Bottom Footer Background Color', 'az-multipurpose'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'az-multipurpose'),
    'section' => 'colors',

    'priority' => 14,

)));


/*-------------------------------------------------------------------------------------------*/
/**
 * Hide Static page in Home page
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_front_page_option',
    array(
        'title' => esc_html__('Front Page Options', 'az-multipurpose'),
        'panel' => 'az_multipurpose_theme_options',
        'priority' => 6,
    )
);

/**
 *   Show/Hide Static page/Posts in Home page
 */
$wp_customize->add_setting(
    'az_multipurpose_front_page_hide_option',
    array(
        'default' => $default['az_multipurpose_front_page_hide_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_checkbox',
    )
);
$wp_customize->add_control('az_multipurpose_front_page_hide_option',
    array(
        'label' => esc_html__('Hide Blog Posts or Static Page on Front Page', 'az-multipurpose'),
        'section' => 'az_multipurpose_front_page_option',
        'type' => 'checkbox',
        'priority' => 10
    )
);


/*-------------------------------------------------------------------------------------------*/
/**
 * Breadcrumb Options
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_breadcrumb_option',
    array(
        'title' => esc_html__('Breadcrumb Options', 'az-multipurpose'),
        'panel' => 'az_multipurpose_theme_options',
        'priority' => 6,
    )
);

/**
 * Breadcrumb Option
 */
$wp_customize->add_setting(
    'az_multipurpose_breadcrumb_setting_option',
    array(
        'default' => $default['az_multipurpose_breadcrumb_setting_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',

    )
);
$hide_show_breadcrumb_option = az_multipurpose_show_breadcrumb_option();
$wp_customize->add_control('az_multipurpose_breadcrumb_setting_option',
    array(
        'label' => esc_html__('Breadcrumb Options', 'az-multipurpose'),
        'section' => 'az_multipurpose_breadcrumb_option',
        'choices' => $hide_show_breadcrumb_option,
        'type' => 'select',
        'priority' => 10
    )
);


  /**
   *   Show/Hide Breadcrumb in Home page
   */
    $wp_customize->add_setting(
        'az_multipurpose_hide_breadcrumb_front_page_option',
        array(
            'default' => $default['az_multipurpose_hide_breadcrumb_front_page_option'],
            'sanitize_callback' => 'az_multipurpose_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('az_multipurpose_hide_breadcrumb_front_page_option',
        array(
            'label' => esc_html__('Show/Hide Breadcrumb in Home page', 'az-multipurpose'),
            'section' => 'az_multipurpose_breadcrumb_option',
            'type' => 'checkbox',
            'priority' => 10
        )
    );

/*-------------------------------------------------------------------------------------------*/

/**
 * Reset Options
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_reset_option',
    array(
        'title' => esc_html__('Color Reset Options', 'az-multipurpose'),
        'panel' => 'az_multipurpose_theme_options',
        'priority' => 14,
    )
);

/**
 * Reset Option
 */
$wp_customize->add_setting(
    'az_multipurpose_color_reset_option',
    array(
        'default' => $default['az_multipurpose_color_reset_option'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
        'transport' => 'postMessage'
    )
);
$reset_option = az_multipurpose_reset_option();
$wp_customize->add_control('az_multipurpose_color_reset_option',
    array(
        'label' => esc_html__('Reset Options', 'az-multipurpose'),
        'description' => sprintf( esc_html__('Caution: Reset theme settings according to the given options. Refresh the page after saving to view the effects', 'az-multipurpose')),
        'section' => 'az_multipurpose_reset_option',
        'type' => 'select',
        'choices' => $reset_option,
        'priority' => 20
    )
);




/*======================================footer-option=========================================*/


/**
 * Copyright Info Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_copyright_info_section',
    array(
        'priority' => 27,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Footer Option', 'az-multipurpose'),
    )
);

/**
 * Field for Copyright
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'az_multipurpose_copyright',
    array(
        'default' => $default['az_multipurpose_copyright'],
        'sanitize_callback' => 'wp_kses_post',
    )
);
$wp_customize->add_control(
    'az_multipurpose_copyright',
    array(
        'type' => 'text',
        'label' => esc_html__('Copyright', 'az-multipurpose'),
        'section' => 'az_multipurpose_copyright_info_section',
        'priority' => 1
    )
);
