<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('at-sticky-sidebar'); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
wp_body_open();
}
?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php _e( 'Skip to content', 'az-multipurpose' ); ?></a>




<?php
$layout_header = az_multipurpose_get_option('az_multipurpose_top_header_layout_section');
if($layout_header=='layout1'){
?>


    <header id="masthead" class="site-header layout1" role="banner">
        <!-- Start Top header Section -->
        <?php
        /**
         * The template for displaying all pages.
         *
         * This is the template that displays all pages by default.
         * Please note that this is the WordPress construct of pages
         * and that other 'pages' on your WordPress site may use a
         * different template.
         *
         * @link https://codex.wordpress.org/Template_Hierarchy
         *
         * @subpackage a2zthemes
         */
        // retrieving Customizer Value
        $section_option = az_multipurpose_get_option('az_multipurpose_top_header_section');
        if ($section_option == 'show') {

            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_fb = az_multipurpose_get_option('az_multipurpose_facebook_url');
            $social_youtube = az_multipurpose_get_option('az_multipurpose_youtube_url');
            $social_linkedin = az_multipurpose_get_option('az_multipurpose_linkedin_url');
            $social_twitter = az_multipurpose_get_option('az_multipurpose_twitter_url');
            ?>

            <div class="top-header">
                <div class="container">
                    <div class="row">


                        <!-- Start top contact info Section -->
                        <div class="col-xs-12 col-sm-8">
                            <div class="top-header-contact-info">

                                <?php
                                $location_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_location_icon') ;
                                $loacation_value = az_multipurpose_get_option('az_multipurpose_top_header_location_a');
                                $mobile_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_phone_number_icon') ;
                                $mobile_value = az_multipurpose_get_option('az_multipurpose_top_header_phone_no');
                                $email_icon = az_multipurpose_get_option('az_multipurpose_email_icon');
                                $email_value = az_multipurpose_get_option('az_multipurpose_top_header_email');

                                if (!empty($loacation_value)) {

                                    ?>
                                    <a class="location"><i
                                            class="fa  <?php echo esc_attr($location_icon); ?>"></i><?php echo esc_html($loacation_value); ?>
                                    </a>

                                <?php }

                                if (!empty($mobile_value)) {

                                    ?>
                                    <a class="top-phone" href="<?php echo esc_url('tel:' . $mobile_value) ?>"><i
                                            class="fa  <?php echo esc_attr($mobile_icon); ?>"></i><?php echo esc_html($mobile_value); ?>
                                    </a>

                                <?php }

                                if (!empty($email_value)) {
                                    ?>
                                    <a class="top-email" href="<?php echo esc_url('mailto:' . $email_value); ?>"><i
                                            class="fa <?php echo esc_attr($email_icon); ?>"></i> <?php echo esc_html($email_value); ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- End top contact info Section -->


                        <!-- Start top social icon Section -->
                        <div class="col-xs-12 col-sm-4">

                            <?php
                            if ($social_menu == 1) {

                                ?>
                                <div class="top-header-socialicon">

                                    <ul class="menu-social-menu">
                                        <?php
                                        if(!empty($social_fb)){ ?>
                                        <li><a href="<?php echo esc_url($social_fb); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php }
                                        if(!empty($social_youtube)){ ?>
                                            <li><a href="<?php echo esc_url($social_youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                                        <?php }
                                        if(!empty($social_linkedin)){ ?>
                                            <li><a href="<?php echo esc_url($social_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php }
                                        if(!empty($social_twitter)){ ?>
                                            <li><a href="<?php echo esc_url($social_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php } ?>

                                    </ul>


                                </div>

                            <?php } ?>
                        </div>
                        <!-- End top social icon Section -->


                    </div>
                </div>
            </div>
        <?php } ?>

<div class="container">

        <!-- End Top header Section -->
        <!-- Start logo and menu Section -->
    <div class="main-header">
            <div class="container-fluid">
                <div class="row">
                <!-- Start Site title Section -->

                    <div class="col-xl-3 col-lg-3 col-sm-12">
                        <div class="site-branding">
                    <div class="site-image">
                        <?php
                        if (has_custom_logo()) { ?>
                            <a class="navbar-logo" href="<?php echo esc_url(home_url('/')); ?>">
                                <?php the_custom_logo(); ?>
                            </a>
                        <?php } else {
                        if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php else : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                            <?php
                        endif;
                        ?>

                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) : ?>
                        <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif;
                    } ?>
                         </div>
                </div>
                    </div>
         <div class="col-xl-7 col-lg-7 col-sm-12">
                <!-- End Site title Section -->
                <!-- Start Menu Section -->
                <div class="menu">
                    <!--<nav id="site-navigation" class="main-navigation" role="navigation"> -->
                    <div class="nav-wrapper navbar navbar-expand-lg">
                        <!-- for toogle menu -->
                        <a href="#" id="showbutton" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/button.png"/>
                        </a>

                        <nav class="column-12 collapse navbar-collapse" id="navbarSupportedContent">

                                <?php
                                if (has_nav_menu("primary")) {
                                    wp_nav_menu(array(
                                            'theme_location' => "primary",
                                            'menu_class' => 'main-nav',


                                        )
                                    );
                                }
                                ?>


                        </nav>
                        <!-- / main nav -->

                    </div>
                    <!-- </nav> -->
                </div>
                    </div>
                <!-- End Menu Section -->
                <div class="col-xl-2 col-lg-2 col-sm-12">


                    <?php
                    $az_multipurpose_apply_button = az_multipurpose_get_option('az_multipurpose_button');
                    $az_multipurpose_apply_link = az_multipurpose_get_option('az_multipurpose_apply_button_link');
                    if(!empty($az_multipurpose_apply_link))

                    {?>
                        <div class="apply-now">
                            <a href="<?php echo esc_url_raw(  $az_multipurpose_apply_link); ?>"
                               class="read-more-background"><?php echo  esc_html($az_multipurpose_apply_button); ?>
                            </a>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    </div>
</header>




    <?php } elseif(($layout_header=='layout2')){
/* ================================seccond layout ====================================================*/ ?>


    <header id="masthead" class="site-header layout2" role="banner">
        <!-- Start Top header Section -->
        <?php
        /**
         * The template for displaying all pages.
         *
         * This is the template that displays all pages by default.
         * Please note that this is the WordPress construct of pages
         * and that other 'pages' on your WordPress site may use a
         * different template.
         *
         * @link https://codex.wordpress.org/Template_Hierarchy
         *
         * @subpackage a2zthemes
         */
        // retrieving Customizer Value
        az_multipurpose_news_ticker();

        $section_option = az_multipurpose_get_option('az_multipurpose_top_header_section');
        if ($section_option == 'show') {

            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_fb = az_multipurpose_get_option('az_multipurpose_facebook_url');
            $social_youtube = az_multipurpose_get_option('az_multipurpose_youtube_url');
            $social_linkedin = az_multipurpose_get_option('az_multipurpose_linkedin_url');
            $social_twitter = az_multipurpose_get_option('az_multipurpose_twitter_url');
            ?>


        <?php } ?>

<div class="logo-section">
        <div class="container">
            <div class="row">

            <div class="col-xs-12 col-sm-4">
                  <div class="site-branding">
                <div class="site-image">
                    <?php
                    if (has_custom_logo()) { ?>
                      <a class="navbar-logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php } else {
                    if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>"
                               rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                    <?php else : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>"
                               rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                        <?php
                    endif;
                    ?>

                <?php
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) : ?>
                    <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
                    <?php
                endif;
                } ?>
            </div>
                </div>

            </div>

            <!-- Start top contact info Section -->
            <div class="col-xs-12 col-sm-8">
                <div class="top-header-contact-info info-layout">

                    <?php
                    $location_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_location_icon') ;
                    $loacation_value = az_multipurpose_get_option('az_multipurpose_top_header_location_a');
                    $mobile_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_phone_number_icon') ;
                    $mobile_value = az_multipurpose_get_option('az_multipurpose_top_header_phone_no');
                    $email_icon = az_multipurpose_get_option('az_multipurpose_email_icon');
                    $email_value = az_multipurpose_get_option('az_multipurpose_top_header_email');

                  if (!empty($loacation_value)) {

                        ?>
                        <a class="location"><i
                                class="fa  <?php echo esc_attr($location_icon); ?>"></i><?php echo esc_html($loacation_value); ?>
                        </a>

                    <?php }

                    if (!empty($mobile_value)) {

                        ?>
                        <a class="top-phone" href="<?php echo esc_url('tel:' . $mobile_value) ?>"><i
                                class="fa  <?php echo esc_attr($mobile_icon); ?>"></i><?php echo esc_html($mobile_value); ?>
                        </a>

                    <?php }

                    if (!empty($email_value)) {
                        ?>
                        <a class="top-email" href="<?php echo esc_url('mailto:' . $email_value); ?>"><i
                                class="fa <?php echo esc_attr($email_icon); ?>"></i> <?php echo esc_html($email_value); ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <!-- End top contact info Section -->



        </div>
    </div>
</div>
        <!-- End Top header Section -->
        <!-- Start logo and menu Section -->
    <div class="main-header">
            <div class="container">
                <div class="row">
                <!-- Start Site title Section -->
                <div class="col-xl-10 col-lg-10 col-sm-12">
                <!-- End Site title Section -->
                <!-- Start Menu Section -->
                <div class="layout-second menu">
                    <!--<nav id="site-navigation" class="main-navigation" role="navigation"> -->
                     <div class="nav-wrapper navbar navbar-expand-lg">
                        <!-- for toogle menu -->
                        <a href="#" id="showbutton" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img class="img-responsive grow" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/button.png"/>
                        </a>

                        <nav class="column-12 collapse navbar-collapse" id="navbarSupportedContent">

                                <?php
                                if (has_nav_menu("primary")) {
                                    wp_nav_menu(array(
                                            'theme_location' => "primary",
                                            'menu_class' => 'main-nav navbar-nav',


                                        )
                                    );
                                }
                                ?>



                        </nav>


                        <!-- / main nav -->
                    </div>
                    <!-- </nav> -->
                </div>
                <!-- End Menu Section -->
              </div>
               <div class="col-xl-2  col-lg-2 col-sm-12">

                            <?php
                            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');

                            if ($social_menu == 1) {
                                ?>
                                <div class="top-header-socialicon">

                                    <ul class="menu-social-menu">
                                        <?php
                                        if(!empty($social_fb)){ ?>
                                        <li><a href="<?php echo esc_url($social_fb); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php }
                                        if(!empty($social_youtube)){ ?>
                                            <li><a href="<?php echo esc_url($social_youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                                        <?php }
                                        if(!empty($social_linkedin)){ ?>
                                            <li><a href="<?php echo esc_url($social_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php }
                                        if(!empty($social_twitter)){ ?>
                                            <li><a href="<?php echo esc_url($social_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php } ?>

                                    </ul>


                                </div>

                            <?php } ?>
                        </div>


            </div>
        </div>
</div>
        <!-- End logo and menu Section -->
    </header>

 <?php } elseif(($layout_header=='layout3')){
/* ================================third layout ====================================================*/
?>
    <header id="masthead" class="site-header layout3" role="banner">
        <!-- Start Top header Section -->
        <?php
        /**
         * The template for displaying all pages.
         *
         * This is the template that displays all pages by default.
         * Please note that this is the WordPress construct of pages
         * and that other 'pages' on your WordPress site may use a
         * different template.
         *
         * @link https://codex.wordpress.org/Template_Hierarchy
         *
         * @subpackage a2zthemes
         */
        // retrieving Customizer Value
        az_multipurpose_news_ticker();

        $section_option = az_multipurpose_get_option('az_multipurpose_top_header_section');
        if ($section_option == 'show') {

            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_fb = az_multipurpose_get_option('az_multipurpose_facebook_url');
            $social_youtube = az_multipurpose_get_option('az_multipurpose_youtube_url');
            $social_linkedin = az_multipurpose_get_option('az_multipurpose_linkedin_url');
            $social_twitter = az_multipurpose_get_option('az_multipurpose_twitter_url');
            ?>


        <?php } ?>

<div class="logo-section">
        <div class="container">
            <div class="row">

            <div class="col-xs-12 col-sm-4">
              <div class="site-branding">
                <div class="site-image">
                    <?php
                    if (has_custom_logo()) { ?>
                      <a class="navbar-logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php } else {
                    if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>"
                               rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                    <?php else : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>"
                               rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                        <?php
                    endif;
                    ?>

                <?php
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) : ?>
                    <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
                    <?php
                endif;
                } ?>
            </div>
 </div>
            </div>

            <!-- Start top contact info Section -->
            <div class="col-xs-12 col-sm-8">
                <div class="top-header-contact-info info-layout">

                    <?php
                    $location_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_location_icon') ;
                    $loacation_value = az_multipurpose_get_option('az_multipurpose_top_header_location_a');
                    $mobile_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_phone_number_icon') ;
                    $mobile_value = az_multipurpose_get_option('az_multipurpose_top_header_phone_no');
                    $email_icon = az_multipurpose_get_option('az_multipurpose_email_icon');
                    $email_value = az_multipurpose_get_option('az_multipurpose_top_header_email');

                  if (!empty($loacation_value)) {

                        ?>
                        <a class="location"><i
                                class="fa  <?php echo esc_attr($location_icon); ?>"></i><?php echo esc_html($loacation_value); ?>
                        </a>

                    <?php }

                    if (!empty($mobile_value)) {

                        ?>
                        <a class="top-phone" href="<?php echo esc_url('tel:' . $mobile_value) ?>"><i
                                class="fa  <?php echo esc_attr($mobile_icon); ?>"></i><?php echo esc_html($mobile_value); ?>
                        </a>

                    <?php }

                    if (!empty($email_value)) {
                        ?>
                        <a class="top-email" href="<?php echo esc_url('mailto:' . $email_value); ?>"><i
                                class="fa <?php echo esc_attr($email_icon); ?>"></i> <?php echo esc_html($email_value); ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <!-- End top contact info Section -->



        </div>
    </div>
</div>
        <!-- End Top header Section -->
        <!-- Start logo and menu Section -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                <!-- Start Site title Section -->
                <div class="col-xs-12 col-sm-10">
                <!-- End Site title Section -->
                <!-- Start Menu Section -->
                <div class="layout-second menu">
                    <!--<nav id="site-navigation" class="main-navigation" role="navigation"> -->
                    <div class="nav-wrapper navbar navbar-expand-lg">
                        <!-- for toogle menu -->
                        <a href="#" id="showbutton" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img class="img-responsive grow" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/button.png"/>
                        </a>

                        <nav class="column-12 collapse navbar-collapse" id="navbarSupportedContent">


                                <?php
                                if (has_nav_menu("primary")) {
                                    wp_nav_menu(array(
                                            'theme_location' => "primary",
                                            'menu_class' => 'main-nav navbar-nav"',


                                        )
                                    );
                                }
                                ?>




                        </nav>


                        <!-- / main nav -->
                    </div>
                    <!-- </nav> -->
                </div>
                <!-- End Menu Section -->
              </div>
                <div class="col-xs-12 col-sm-2">
                    <?php
                    $az_multipurpose_apply_button = az_multipurpose_get_option('az_multipurpose_button');
                    $az_multipurpose_apply_link = az_multipurpose_get_option('az_multipurpose_apply_button_link');
                    if(!empty($az_multipurpose_apply_link))

                    {?>
                        <div class="apply-now">
                            <a href="<?php echo esc_url_raw(  $az_multipurpose_apply_link); ?>"
                               class="read-more-background"><?php echo  esc_html($az_multipurpose_apply_button); ?>
                            </a>

                        </div>
                    <?php } ?>


                </div>


            </div>
        </div>
</div>
        <!-- End logo and menu Section -->
    </header>


<?php } elseif(($layout_header=='layout4')){
/* ================================forth layout ====================================================*/ ?>

    <header id="masthead" class="site-header layout4" role="banner">
        <!-- Start Top header Section -->
        <?php
        /**
         * The template for displaying all pages.
         *
         * This is the template that displays all pages by default.
         * Please note that this is the WordPress construct of pages
         * and that other 'pages' on your WordPress site may use a
         * different template.
         *
         * @link https://codex.wordpress.org/Template_Hierarchy
         *
         * @subpackage a2zthemes
         */
        // retrieving Customizer Value
        $section_option = az_multipurpose_get_option('az_multipurpose_top_header_section');
        if ($section_option == 'show') {

            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');
            $social_fb = az_multipurpose_get_option('az_multipurpose_facebook_url');
            $social_youtube = az_multipurpose_get_option('az_multipurpose_youtube_url');
            $social_linkedin = az_multipurpose_get_option('az_multipurpose_linkedin_url');
            $social_twitter = az_multipurpose_get_option('az_multipurpose_twitter_url');
            ?>
<div class="menu-bar">

            <div class="top-header">
                <div class="container">
                    <div class="row">


                        <!-- Start top contact info Section -->
                        <div class="col-sm-8">
                            <div class="top-header-contact-info">

                                <?php
                                $location_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_location_icon') ;
                                $loacation_value = az_multipurpose_get_option('az_multipurpose_top_header_location_a');
                                $mobile_icon =az_multipurpose_get_option('az_multipurpose_top_header_section_phone_number_icon') ;
                                $mobile_value = az_multipurpose_get_option('az_multipurpose_top_header_phone_no');
                                $email_icon = az_multipurpose_get_option('az_multipurpose_email_icon');
                                $email_value = az_multipurpose_get_option('az_multipurpose_top_header_email');

                                if (!empty($loacation_value)) {

                                    ?>
                                    <a class="location"><i
                                            class="fa  <?php echo esc_attr($location_icon); ?>"></i><?php echo esc_html($loacation_value); ?>
                                    </a>

                                <?php }

                                if (!empty($mobile_value)) {

                                    ?>
                                    <a class="top-phone" href="<?php echo esc_url('tel:' . $mobile_value) ?>"><i
                                            class="fa  <?php echo esc_attr($mobile_icon); ?>"></i><?php echo esc_html($mobile_value); ?>
                                    </a>

                                <?php }

                                if (!empty($email_value)) {
                                    ?>
                                    <a class="top-email" href="<?php echo esc_url('mailto:' . $email_value); ?>"><i
                                            class="fa <?php echo esc_attr($email_icon); ?>"></i> <?php echo esc_html($email_value); ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- End top contact info Section -->


                        <!-- Start top social icon Section -->
                        <div class="col-sm-4">

                            <?php
                            $social_menu = az_multipurpose_get_option('az_multipurpose_social_link_hide_option');

                            if ($social_menu == 1) {

                                ?>
                                <div class="top-header-socialicon">

                                    <ul class="menu-social-menu">
                                        <?php
                                        if(!empty($social_fb)){ ?>
                                            <li class="facebook-social"><a href="<?php echo esc_url($social_fb); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php }
                                        if(!empty($social_youtube)){ ?>
                                            <li class="youtube-social"><a href="<?php echo esc_url($social_youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                                        <?php }
                                        if(!empty($social_linkedin)){ ?>
                                            <li class="linked-social"><a href="<?php echo esc_url($social_linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php }
                                        if(!empty($social_twitter)){ ?>
                                            <li class="twitter-social"><a href="<?php echo esc_url($social_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php } ?>

                                    </ul>


                                </div>

                            <?php } ?>
                        </div>
                        <!-- End top social icon Section -->


                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="main-menus">

            <!-- End Top header Section -->
            <!-- Start logo and menu Section -->
            <div class="main-header clearfix">
                <div class="container">
                    <div class="row">
                    <!-- Start Site title Section -->


                        <div class="col-xl-3 col-lg-3 col-sm-12">
                            <div class="site-branding">

                            <div class="site-image">
                                <?php
                                if (has_custom_logo()) { ?>
                                    <a class="navbar-logo" href="<?php echo esc_url(home_url('/')); ?>">
                                        <?php the_custom_logo(); ?>
                                    </a>
                                <?php } else {
                                if (is_front_page() && is_home()) : ?>
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>"
                                           rel="home"><?php bloginfo('name'); ?></a>
                                    </h1>
                                <?php else : ?>
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>"
                                           rel="home"><?php bloginfo('name'); ?></a>
                                    </h1>
                                    <?php
                                endif;
                                ?>

                            <?php
                            $description = get_bloginfo('description', 'display');
                            if ($description || is_customize_preview()) : ?>
                                <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
                                <?php
                            endif;
                            } ?>
                        </div>
                    </div>
              </div>

                    <div class="col-xl-9 col-lg-9 col-sm-12">
                        <!-- End Site title Section -->
                        <!-- Start Menu Section -->
                        <div class="menu">
                            <!--<nav id="site-navigation" class="main-navigation" role="navigation"> -->
                              <div class="nav-wrapper navbar navbar-expand-lg">
                        <!-- for toogle menu -->
                        <a href="#" id="showbutton" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img class="img-responsive grow" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/button.png" />
                        </a>

                        <nav class="column-12 collapse navbar-collapse" id="navbarSupportedContent">

                                        <?php
                                        if (has_nav_menu("primary")) {
                                            wp_nav_menu(array(
                                                    'theme_location' => "primary",
                                                    'menu_class' => 'main-nav navbar-nav',


                                                )
                                            );
                                        }
                                        ?>



                                </nav>
                                <!-- / main nav -->

                            </div>
                            <!-- </nav> -->
                        </div>

                </div>
                    <!-- End Menu Section -->



                <!-- menu-sec -->
            </div>
        </div>
    </div>
            <!-- End logo and menu Section -->
        </div>
    </div>
    </header>
    <div  id="content">

<?php }
if (is_front_page()) {
    ?>
    <div class="home-page">

<?php }
