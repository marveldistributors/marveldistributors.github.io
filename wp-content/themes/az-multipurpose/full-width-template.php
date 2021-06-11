<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Full Width Template
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 */
get_header();

        ?>

    <!-- Page Heading Section End -->
    <div id="primary" class="blog-sec pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-12 col-md-12 col-sm-12 blog-post">



                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>



                </div>


            </div>
        </div>
    </div>
<?php

get_footer();

