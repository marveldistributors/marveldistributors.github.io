<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sanitorium
 */
?>

       <div class="copyright-wrapper">
        	<div class="inner">
                <div class="copyright">
                    	<p><?php esc_html(bloginfo('name')); ?><?php echo _e(' 2020 | All Rights Reserved.','sanitorium'); ?></p>               
                </div><!-- copyright --><div class="clear"></div>           
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>