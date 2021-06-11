<?php
/**
 * ample construction sidebar layout options
 *
 * @since ample construction  1.0.0
 *
 * @param null
 * @return array
 *
 */
if (!function_exists('az_multipurpose_sidebar_layout_options')) :
    function az_multipurpose_sidebar_layout_options() {
        $az_multipurpose_sidebar_layout_options = array(
            'default-sidebar' => array(
                'value' => 'default-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/a2zthemes/metabox/images/default-sidebar.png'
            ),
            'left-sidebar' => array(
                'value' => 'left-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/a2zthemes/metabox/images/left-sidebar.png'
            ),
            'right-sidebar' => array(
                'value' => 'right-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/a2zthemes/metabox/images/right-sidebar.png'
            ),
            'no-sidebar' => array(
                'value' => 'no-sidebar',
                'thumbnail' => get_template_directory_uri() . '/inc/a2zthemes/metabox/images/no-sidebar.png'
            )
        );
        return apply_filters('az_multipurpose_sidebar_layout_options', $az_multipurpose_sidebar_layout_options);
    }
endif;

/**
 * Custom Metabox
 *
 * @since ample construction  1.0.2
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('az_multipurpose__add_metabox')):
    function az_multipurpose_add_metabox()
    {
        add_meta_box(
            'az_multipurpose_sidebar_layout', // $id
            esc_html__('Sidebar Layout', 'az-multipurpose'), // $title
            'az_multipurpose_sidebar_layout_callback', // $callback
            'post', // $page
            'side', // $context
            'low'
        ); // $priority

        add_meta_box(
            'az_multipurpose_sidebar_layout', // $id
            __('Sidebar Layout', 'az-multipurpose'), // $title
            'az_multipurpose_sidebar_layout_callback', // $callback
            'page', // $page
            'side', // $context
            'low'
        ); // $priority
    }
endif;
add_action('add_meta_boxes', 'az_multipurpose_add_metabox');


/**
 * Callback function for metabox
 *
 * @since ample construction  1.0.0
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('az_multipurpose_sidebar_layout_callback')) :
    function az_multipurpose_sidebar_layout_callback()
    {
        global $post;
        $az_multipurpose_sidebar_layout_options = az_multipurpose_sidebar_layout_options();
        $az_multipurpose_sidebar_layout = 'default-sidebar';
        $az_multipurpose_sidebar_meta_layout = get_post_meta( $post->ID, 'az_multipurpose_sidebar_layout', true);
        if ( !empty( $az_multipurpose_sidebar_meta_layout ) ) {
            $az_multipurpose_sidebar_layout = $az_multipurpose_sidebar_meta_layout;
        }
        wp_nonce_field(basename(__FILE__), 'az_multipurpose_sidebar_layout_nonce');
        ?>

        <table class="form-table page-meta-box">
            <tr>
                <td colspan="4"><h4><?php esc_html_e('Choose Sidebar Template', 'az-multipurpose'); ?></h4></td>
            </tr>
            <tr>
                <td>
                    <?php
                    foreach ($az_multipurpose_sidebar_layout_options as $field) {
                        ?>
                        <div class="hide-radio radio-image-wrapper qc_radio_button">
                            <input id="<?php echo esc_attr($field['value']); ?>" type="radio"
                                   name="az_multipurpose_sidebar_layout"
                                   value="<?php echo  esc_attr($field['value']); ?>" <?php checked($field['value'], $az_multipurpose_sidebar_layout); ?>/>
                            <label class="description" for="<?php echo esc_attr( $field['value']); ?>">
                                <img src="<?php echo esc_url($field['thumbnail']); ?>" />
                            </label>
                        </div>
                    <?php } // end foreach
                    ?>
                    <div class="clear"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <em class="f13"><?php esc_html_e('You can set up the sidebar content', 'az-multipurpose'); ?>
                        <a href="<?php echo esc_url( admin_url('/widgets.php')); ?>">
                            <?php esc_html_e('here', 'az-multipurpose'); ?>
                        </a>
                    </em>
                </td>
            </tr>

        </table>

    <?php }
endif;

/**
 * save the custom metabox data
 * @hooked to save_post hook
 *
 * @since ample construction  1.0.0
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('az_multipurpose_save_sidebar_layout')) :
    function az_multipurpose_save_sidebar_layout( $post_id )
    {

        /*
          * A Guide to Writing Secure Themes – Part 4: Securing Post Meta
          *https://make.wordpress.org/themes/2015/06/09/a-guide-to-writing-secure-themes-part-4-securing-post-meta/
          * */
        if (
            !isset($_POST['az_multipurpose_sidebar_layout_nonce']) ||
            !wp_verify_nonce($_POST['az_multipurpose_sidebar_layout_nonce'], basename(__FILE__)) || /*Protecting against unwanted requests*/
            (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || /*Dealing with autosaves*/
            !current_user_can('edit_post', $post_id)/*Verifying access rights*/
        ) {
            return;
        }

        //Execute this saving function
        if ( isset( $_POST['az_multipurpose_sidebar_layout'] ) ) {
            $old = get_post_meta( $post_id, 'az_multipurpose_sidebar_layout', true);
            $new = sanitize_text_field ($_POST['az_multipurpose_sidebar_layout'] );
            if ( $new && $new != $old ) {
                update_post_meta($post_id, 'az_multipurpose_sidebar_layout', $new);
            } elseif ( '' == $new && $old ) {
                delete_post_meta( $post_id, 'az_multipurpose_sidebar_layout', $old);
            }
        }
    }
endif;
add_action('save_post', 'az_multipurpose_save_sidebar_layout');
