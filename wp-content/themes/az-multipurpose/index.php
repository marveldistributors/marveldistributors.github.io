<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package a2zthemes
 */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package a2zthemes
 */
global $az_multipurpose_header_image, $az_multipurpose_header_style;
$az_multipurpose_header_image = get_header_image();

if ( $az_multipurpose_header_image ) {
	$az_multipurpose_header_style = $az_multipurpose_header_image;

} else {

	$az_multipurpose_header_style = '';
}
$blog_page_title                      = az_multipurpose_get_option( 'az_multipurpose_blog_title_option' );
$az_multipurpose_breadcrump_option = az_multipurpose_get_option( 'az_multipurpose_breadcrumb_setting_option' );


get_header(); ?>

    <!-- Page Heading Section Start -->
    <div class="pagehding-sec"style="background-image:url(<?php echo esc_url($az_multipurpose_header_style);?>)">
            <div class="images-overlay">

            </div>
<div class="wrap-width">
    <div class="row">
    <div class="col-md-6 col-sm-7">
        <div class="page-heading">
            <h2><?php echo esc_html($blog_page_title); ?></h2>
        </div>
    </div>
<?php
if ( $az_multipurpose_breadcrump_option == "enable" ) {
	?>
    <div class="col-md-6 col-sm-5 ">
        <div class="page-heading">
        <?php
      
        az_multipurpose_breadcrumb_type(); ?>
        </div>
    </div>
    </div>
</div>

<?php } ?>


    <!-- Page Heading Section End -->
    <div id="content" class="blog-sec pt-50 pb-20 clearfix">
        <div class="container">
					<?php
					$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );
					if ($sidebardesignlayout != "default-sidebar")
					{
							$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'az_multipurpose_sidebar_layout', true) );

					} else
					{
							$sidebardesignlayout = esc_attr(az_multipurpose_get_option('az_multipurpose_sidebar_layout_option' ));
					}



					if($sidebardesignlayout == 'left-sidebar'){
					?>
					<div class="row flex-row-reverse">
							<?php } else{?>
							<div class="row"> <?php } az_multipurpose_no_sidebar(); ?>


					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							{
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							}

						endwhile;

						wp_reset_postdata();

						the_posts_navigation();

					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>


                </div>

                <div id="secondary" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">

					<?php get_sidebar(); ?>

                </div>

            </div>
        </div>
    </div>
<?php

get_footer();
