<?php
/**
 * Define some custom classes for az-multipurpose
 *
 * https://codex.WordPress.org/Class_Reference/WP_Customize_Control
 * @subpackage a2zthemes
 * @since 1.0.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

    /**
     * A class to create a dropdown for all categories in your WordPress site
     *

     * @a2zthemes public
     */
    class Az_Multipurpose_Customize_Category_Control extends WP_Customize_Control {

        /**
         * Render the control's content.
         *
         * @return void
         * @since 1.0.0
         */
        public function render_content() {
            $az_multipurpose_dropdown = wp_dropdown_categories(
                array(
                    'name'              => 'customize-dropdown-categories' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => esc_html__( '&mdash; Select Category &mdash;','az-multipurpose'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );

            // Hackily add in the data link parameter.
            $az_multipurpose_dropdown = str_replace( '<select', '<select ' . $this->get_link(), $az_multipurpose_dropdown );

            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
                  $this->label,
                  $this->description,
                  $az_multipurpose_dropdown
            );
        }
    }


}
