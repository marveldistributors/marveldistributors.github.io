<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package a2zthemes
 */
$hide_show_feature_image=az_multipurpose_get_option( 'az_multipurpose_show_feature_image_single_option');

?>

<article id="post-<?php the_ID(); ?>" class="post type-post status-publish has-post-thumbnail hentry" <?php post_class(); ?>>




            <div class="single-post">
	            <?php
	            if(has_post_thumbnail() && $hide_show_feature_image=="show")
	            {
		            the_post_thumbnail('full', array('class' => 'img-fluid'));

	            }
	            ?>


                    <div class="single-post-text">
                        <h2><?php the_title(); ?></h2>
	                    <?php
	                    the_content();
	                    wp_link_pages( array(
		                    'before' => '<div class="page-links">' . esc_html__( 'Pages:','az-multipurpose' ),
		                    'after'  => '</div>',
	                    ) );
	                    ?>

                    </div>


        </div>





</article><!-- #post-<?php the_ID(); ?> -->


