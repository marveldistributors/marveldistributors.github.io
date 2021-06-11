<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a2zthemes
 */




 ?>

 <?php
 $column_count = 0;
 for ( $i = 0; $i <= 3; $i++ ) {

 	if ( is_active_sidebar( 'footer'.$i ) ) {

 		$column_count++;

 	}
 }


 ?>

 <?php if($column_count>0) { ?>
<footer>

	<div class="footer-sec">
			<div class="container">
					<div class="row">
 					<?php

 					for ( $i = 0; $i <= 3 ; $i++ ) {

 						if (is_active_sidebar('footer'.$i)) {

 							if ($column_count == '1') {
 								$size = '12';
 							} elseif ($column_count == '2') {
 								$size = '6';
 							} elseif ($column_count == '3') {
 								$size = '4';
 							} else {
 								$size = '3';
 							}
 							?>
							<div class="col-md-<?php echo esc_attr($size); ?> col-sm-6">
									<div class="footer-wedget-one">
										<?php dynamic_sidebar('footer'.$i); ?>
									</div>
							</div>

 						<?php } } ?>


 				</div><!-- Row end -->
 			</div><!-- Container end -->
 		</div><!-- Footer main end -->


 	</footer><!-- Footer end -->
 	<?php
 }

$copyright = az_multipurpose_get_option('az_multipurpose_copyright');


	?>



        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">

                            <p><?php echo wp_kses_post($copyright); ?><a href="" target="_blank" style="color: #F88C00;"><?php //printf( esc_html__( 'A2Z Themes %s', 'az-multipurpose' ));?></a> |
                                <a href="<?php echo esc_url( __( 'https://www.a2zthemes.com/', 'az-multipurpose' ) ); ?>"
                                ><?php
			                        /* translators: %s: CMS name, i.e. WordPress. */
			                        printf( esc_html__( ' Design and Developed by a2zthemes %s', 'az-multipurpose' ), '' );
			                        ?></a>	</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section End -->
    </footer>

</div>
<?php wp_footer(); ?>

</body>
</html>
