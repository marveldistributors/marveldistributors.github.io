<?php
/**
 * Functions for get_theme_mod()
 *
 
 */
if (!function_exists('az_multipurpose_get_option')) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function az_multipurpose_get_option($key = '')
    {
        if (empty($key)) {
            return;
        }
        $az_multipurpose_default_options = az_multipurpose_get_default_theme_options();

        $default = (isset($az_multipurpose_default_options[$key])) ? $az_multipurpose_default_options[$key] : '';

        $theme_option = get_theme_mod($key, $default);

        return $theme_option;

    }

endif;

