<?php
/**
 * applybutton Info Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'az_multipurpose_applybutton_info_section',
    array(
        'priority' => 25,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Contact Us Button Option', 'az-multipurpose'),
        'active_callback'   => 'az_multipurpose_contact_active_callback'

    )
);

/*callback functions header section*/
if ( !function_exists('az_multipurpose_contact_active_callback') ) :
  function az_multipurpose_contact_active_callback(){
    global $header_layout_option;
    $header_layout_option = az_multipurpose_header_layout_option_option();
    $layout_header = az_multipurpose_get_option('az_multipurpose_top_header_layout_section');
      if( $layout_header=='layout4' ){
          return false;
      }
      else{
          return true;
      }
  }
endif;

$wp_customize->add_setting(
    'az_multipurpose_button',
    array(
        'default' => $default['az_multipurpose_button'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'az_multipurpose_button',
    array(
        'type' => 'text',
        'label' => esc_html__(' Button Text', 'az-multipurpose'),
        'section' => 'az_multipurpose_applybutton_info_section',
        'priority' => 8
    )
);

/**
 * Field for Get Started button Link
 *
 */
$wp_customize->add_setting(
    'az_multipurpose_apply_button_link',
    array(
        'default' => $default['az_multipurpose_apply_button_link'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'az_multipurpose_apply_button_link',
    array(
        'type' => 'url',
        'label' => esc_html__('Button Text Link', 'az-multipurpose'),
        'description' => esc_html__('Use full url link', 'az-multipurpose'),
        'section' => 'az_multipurpose_applybutton_info_section',
        'priority' => 9
    )
);
