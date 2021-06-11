<?php
/**
 * Business Header Info Section
 *
 */
$wp_customize->add_section(
    'az_multipurpose_news_header_info_section',
    array(
        'priority' => 23,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('News Header Info', 'az-multipurpose'),
    )
);

$wp_customize->add_setting(
    'az_multipurpose_news_header_section',
    array(
        'default' => $default['az_multipurpose_news_header_section'],
        'sanitize_callback' => 'az_multipurpose_sanitize_select',
    )
);

$hide_show_news_header_option = az_multipurpose_slider_option();
$wp_customize->add_control(
    'az_multipurpose_news_header_section',
    array(
        'type' => 'radio',
        'label' => esc_html__('news Header Info Option', 'az-multipurpose'),
        'description' => esc_html__('Show/hide Option for news Header Info Section.', 'az-multipurpose'),
        'section' => 'az_multipurpose_news_header_info_section',
        'choices' => $hide_show_news_header_option,
        'priority' => 5
    )
);




/**
 * Field for breaking
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'az_multipurpose_notice',
    array(
        'default' => $default['az_multipurpose_notice'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'az_multipurpose_notice',
    array(
        'type' => 'text',
        'label' => esc_html__('Notice Title', 'az-multipurpose'),
        'section' => 'az_multipurpose_news_header_info_section',
        'priority' => 8
    )
);




/**
 * Dropdown available category for homepage slider
 *
 */


$wp_customize->add_setting(
    'az_multipurpose_news_cat_id',
    array(
        'default' => $default['az_multipurpose_news_cat_id'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    )
);
$wp_customize->add_control(new Az_Multipurpose_Customize_Category_Control(
        $wp_customize,
        'az_multipurpose_news_cat_id',
        array(
            'label' => esc_html__('Notice news Section', 'az-multipurpose'),
            'description' => esc_html__('Select Category for news info Section', 'az-multipurpose'),
            'section' => 'az_multipurpose_news_header_info_section',
            'priority' => 8,

        )
    )
);
/**
 * Field for no of posts to display..
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_no_of_news',
    array(
        'default' => $default['az_multipurpose_no_of_news'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'az_multipurpose_no_of_news',
    array(
        'type' => 'number',
        'label' => esc_html__('No of posts', 'az-multipurpose'),
        'section' => 'az_multipurpose_news_header_info_section',
        'priority' => 10
    )
);
