<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package a2zthemes
 */
$description_from = az_multipurpose_get_option('az_multipurpose_blog_excerpt_option');
$description_length = az_multipurpose_get_option('az_multipurpose_description_length_option');

?>
<article id="post-<?php the_ID(); ?>"
         class="post type-post status-publish has-post-thumbnail hentry" <?php post_class(); ?>>


    <div class="single-post">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'img-fluid'));

        }
        ?>


            <div class="single-post-text">
                <h2><?php the_title(); ?></h2>
                <div class="meta-entry">
                    <?php az_multipurpose_posted_on();
                    az_multipurpose_entry_footer(); ?>
                </div>

                <?php

                echo "<p>";
                if ($description_from == 'content') {
                    echo esc_html(wp_trim_words(get_the_content(), $description_length));
                } else {

                    echo esc_html(wp_trim_words(get_the_excerpt(), $description_length));
                }
                echo "</p>";
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'az-multipurpose'),
                    'after' => '</div>',
                ));
                ?>
                <div class="readmore">

                    <a href="<?php the_permalink(); ?>"
                       class="btn price_btn"><?php esc_html_e('Read More', 'az-multipurpose'); ?></a>
                </div>
            </div>
        </div>



</article><!-- #post-<?php the_ID(); ?> -->


