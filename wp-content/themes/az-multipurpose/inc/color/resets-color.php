<?php




//=============================================================
// Color reset
//=============================================================
if ( ! function_exists( 'az_multipurpose_reset_colors' ) ) :

    function az_multipurpose_reset_colors($data) {

        $default=az_multipurpose_get_default_theme_options();


        set_theme_mod('az_multipurpose_top_header_background_color',$default['az_multipurpose_top_header_background_color']);

        set_theme_mod('az_multipurpose_top_footer_background_color', $default['az_multipurpose_top_footer_background_color']);

        set_theme_mod('az_multipurpose_bottom_footer_background_color',$default['az_multipurpose_bottom_footer_background_color']);

        set_theme_mod('az_multipurpose_primary_color', $default['az_multipurpose_primary_color']);

        set_theme_mod('az_multipurpose_color_reset_option','do-not-reset');


    }

endif;
add_action( 'az_multipurpose_colors_reset','az_multipurpose_reset_colors', 10 );

