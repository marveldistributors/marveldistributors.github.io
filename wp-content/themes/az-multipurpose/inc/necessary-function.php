<?php


/**
 * Enqueue scripts and styles.
 */
function az_multipurpose_scripts() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' );

    wp_enqueue_style( 'az-multipurpose-style', get_stylesheet_uri() );
    wp_enqueue_style( 'az-multipurpose-responsive', get_template_directory_uri().'/assets/css/responsive.min.css' );


    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script('ticker', get_template_directory_uri() . '/assets/js/jquery.ticker.js', array('jquery'), '20151215', true);
    wp_enqueue_script( 'scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true);
    wp_enqueue_script( 'theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.js', array('jquery'), '4.5.0' );
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script( 'az-multipurpose-custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'az_multipurpose_scripts' );


/**
 * define size of logo.
 */

if (!function_exists('az_multipurpose_custom_logo_setup')) :
    function az_multipurpose_custom_logo_setup()
    {
        add_theme_support('custom-logo', array(
            'height' => 90,
            'width' => 300,
            'flex-width' => true,
        ));
    }

    add_action('after_setup_theme', 'az_multipurpose_custom_logo_setup');
endif;


if (!function_exists('az_multipurpose_widgets_backend_enqueue')) :
    function az_multipurpose_widgets_backend_enqueue($hook)
    {
        if ('widgets.php' != $hook) {
            return;
        }

        wp_register_script('az-multipurpose-custom-widgets', get_template_directory_uri() . '/assets/js/widgets.js', array('jquery'), true);
        wp_enqueue_media();
        wp_enqueue_script('az-multipurpose-custom-widgets');
        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css' );
    }

    add_action('admin_enqueue_scripts', 'az_multipurpose_widgets_backend_enqueue');
endif;




if (!function_exists('az_multipurpose_admin_css_enqueue_new_post')) :
    function az_multipurpose_admin_css_enqueue_new_post($hook)
    {
        if ('post-new.php' != $hook) {
            return;
        }
        wp_enqueue_style('az-multipurpose-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '2.0.0');
    }
    add_action('admin_enqueue_scripts', 'az_multipurpose_admin_css_enqueue_new_post');
endif;



if (!function_exists('az_multipurpose_admin_css_enqueue')) :
    function az_multipurpose_admin_css_enqueue($hook)
    {
        if ('post.php' != $hook) {
            return;
        }
        wp_enqueue_style('az-multipurpose-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '2.0.0');
    }
    add_action('admin_enqueue_scripts', 'az_multipurpose_admin_css_enqueue');
endif;





/*woo commerce */
function az_multipurpose_get_image_size( $name ) {
    global $_wp_additional_image_sizes;

    if ( isset( $_wp_additional_image_sizes[$name] ) )
        return $_wp_additional_image_sizes[$name];

    return false;
}





/*add custom body class for sidebar section*/




/*for sidebar adding options**/

function az_multipurpose_names( $classes ) {
    // add 'class-name' to the $classes array
    $sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );
    if (is_singular() && $sidebardesignlayout != "default-sidebar")
    {
        $sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );


    } else
    {
        $sidebardesignlayout = esc_attr(az_multipurpose_get_option('az_multipurpose_sidebar_layout_option' ));
    }

    $classes[] = $sidebardesignlayout;
    return $classes;

}
add_filter( 'body_class', 'az_multipurpose_names' );




/**
 * Utility function to check if a gravatar exists for a given email or id
 * @param int|string|object $id_or_email A user ID,  email address, or comment object
 * @return bool if the gravatar exists or not
 * https://gist.github.com/justinph/5197810#file-validate_gravatar-php
 */

function az_multipurpose_validate_gravatar($id_or_email) {
    //id or email code borrowed from wp-includes/pluggable.php
    $email = '';
    if ( is_numeric($id_or_email) ) {
        $id = (int) $id_or_email;
        $user = get_userdata($id);
        if ( $user )
            $email = $user->user_email;
    } elseif ( is_object($id_or_email) ) {
        // No avatar for pingbacks or trackbacks
        $allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
        if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types ) )
            return false;

        if ( !empty($id_or_email->user_id) ) {
            $id = (int) $id_or_email->user_id;
            $user = get_userdata($id);
            if ( $user)
                $email = $user->user_email;
        } elseif ( !empty($id_or_email->comment_author_email) ) {
            $email = $id_or_email->comment_author_email;
        }
    } else {
        $email = $id_or_email;
    }

    $hashkey = md5(strtolower(trim($email)));
    $uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

    $data = wp_cache_get($hashkey);
    if (false === $data) {
        $response = wp_remote_head($uri);
        if( is_wp_error($response) ) {
            $data = 'not200';
        } else {
            $data = $response['response']['code'];
        }
        wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);

    }
    if ($data == '200'){
        return true;
    } else {
        return false;
    }
}
