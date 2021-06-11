<?php
/**
 * Template part for displaying page content in index.php and archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @since 1.0.0
 * @package BizSmart WordPress Theme
 */
?>
<article <?php BizSmart_Helper::schema_body( 'article' ); ?> id="post-<?php the_ID(); ?>" <?php post_class( BizSmart_Helper::with_prefix( 'post' ) ); ?> >
	<a href="<?php the_permalink() ?>">		
		<div class="image-full post-image" style="<?php BizSmart_Theme::the_default_image( get_the_ID() ); ?>">
			<?php BizSmart_Helper::post_format_icon() ?>
		</div>	
	</a>
	
	<div class="post-content-wrap">		
		<?php 
			BizSmart_Helper::get_title();
			get_template_part( 'templates/meta', 'info' );
			the_excerpt();	
			BizSmart_Helper::get_comment_number();
		?>
	</div>
</article>