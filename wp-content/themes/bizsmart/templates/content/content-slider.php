<?php 
/**
 * Template part for displaying slider in pages
 *
 * @since 1.0.0
 * 
 * @package BizSmart WordPress Theme
 */

$pst = BizSmart_Theme::get_posts_by_type( bizsmart_get( 'slider-type' ), bizsmart_get( 'cat-post' ), 3 );
if( !empty( $pst ) ):?>
	<div class="bizsmart-banner-slider-wrapper"> 
		<div class="bizsmart-banner-slider-init">
			<?php 
			foreach( $pst as $p ): 
				if( has_post_thumbnail( $p ) ){
					$img = get_the_post_thumbnail_url( $p, 'full' );
				}else{
					$img = get_template_directory_uri() . '/assets/img/default-banner.jpg';
				}?>
				<div class="bizsmart-banner-slider-inner" style="background-image: url( <?php echo esc_url( $img ) ?>)">
					<div class="banner-slider-content">
						<h2>
							<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>">								
								<?php echo esc_html( get_the_title( $p ) ); ?>
							</a>
						</h2>
						<p class="feature-news-content"><?php echo esc_html( bizsmart_excerpt( 20, false, '...', $p ) ); ?></p>
						<?php if( '' != bizsmart_get( 'slider-more-text' ) ){ ?>
							<div class="inner-banner-btn">
								<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>">
									<?php echo esc_html( bizsmart_get( 'slider-more-text' ) ); ?>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
