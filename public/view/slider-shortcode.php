<?php
/**
 * This Files Return Shortcode Data of Slider Pro Plugin in public Section.
 *
 * @since      1.0.0
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/public/view/slider-shortcode
 * @author     Devnath verma <devnathverma@gmail.com>
*/	

if( ! empty( $atts['id'] ) ) {
 	
	$slider_pro_id = $atts['id'];
	include SP4WP_PLUGIN_ADMIN . 'view/slider-get-settings.php';
	
	//If slider type images
	if( $sliderpro_type == 'image' ) {
		
		$slider_pro_query = new WP_Query( array( 'p' => $slider_pro_id, 'post_type' => 'slider_pro' ) );
		
		if ( $slider_pro_query->have_posts() ) {
		
			while ( $slider_pro_query->have_posts() ) : $slider_pro_query->the_post(); ?>
			
				<div id="SP4WP_<?php echo $slider_pro_id; ?>" class="slider-pro">
					
					<div class="sp-slides">
						
						<?php $multiple_image_ids = $sliderpro_metavalues['multiple_image_id'];
						
						if( isset( $multiple_image_ids ) && count( $multiple_image_ids ) > 0 ) { 
						
							$count = 0;
							
							foreach( $multiple_image_ids as $image_ids ) { 
								
								$img_thumb 		= wp_get_attachment_image_src( $image_ids['multiple_image_id'], 'thumb', true );
								$img_thumbnail 	= wp_get_attachment_image_src( $image_ids['multiple_image_id'], 'thumbnail', true );
								$img_medium 	= wp_get_attachment_image_src( $image_ids['multiple_image_id'], 'medium', true );
								$img_large 		= wp_get_attachment_image_src( $image_ids['multiple_image_id'], 'large', true );
								$img_full 		= wp_get_attachment_image_src( $image_ids['multiple_image_id'], 'full', true ); ?>
								
								<div class="sp-slide">
								
									<img class="sp-image" src="<?php echo SP4WP_PLUGIN_IMAGES; ?>/blank.gif"
										data-src="<?php echo esc_url( $img_full[0] ); ?>"
										data-small="<?php echo esc_url( $img_thumbnail[0] ); ?>"
										data-medium="<?php echo esc_url( $img_medium[0] ); ?>"
										data-large="<?php echo esc_url( $img_large[0] ); ?>"
										data-retina="<?php echo esc_url( $img_full[0] ); ?>"
										/>
									
									<?php if( isset( $sliderpro_titleonslider ) && $sliderpro_titleonslider === 'true' ) { 
											
											if( ! empty( esc_html( $image_ids['multiple_image_title'] ) ) ) {
												
												if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
											
													<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
														data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
														data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>"
														data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
														data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
														data-horizontal="30"
														data-vertical="100"> 
														<?php echo esc_html( $image_ids['multiple_image_title'] ); ?>
													</h3>
										
												<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>									
											
													<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
														data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
														data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>"
														data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
														data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
														data-horizontal="30" 
														data-vertical="40">
														<?php echo esc_html( $image_ids['multiple_image_title'] ); ?>
													</h3>
									<?php } } } ?>	
									
									<?php if( isset( $sliderpro_descriptiononslider ) && $sliderpro_descriptiononslider === 'true' ) { 											
											
											if( ! empty( esc_html( $image_ids['multiple_image_caption'] ) ) ) {
										
												if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
											
													<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
														data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
														data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
														data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
														data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
														data-horizontal="30" 
														data-vertical="50">
														<?php echo wp_trim_words( esc_html( $image_ids['multiple_image_caption'] ), $sliderpro_descriptionlength, '&hellip;' ); ?>
													</p>
											
												<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>
											
													<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
														data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
														data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
														data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
														data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
														data-horizontal="30" 
														data-vertical="100">
														<?php echo wp_trim_words( esc_html( $image_ids['multiple_image_caption'] ), $sliderpro_descriptionlength, '&hellip;' ); ?>
													</p>
									<?php } } } ?>
								
								</div>
							
						<?php $count++; } } ?>
					
					</div>
					
					<?php if( isset( $sliderpro_thumbnails ) && $sliderpro_thumbnails === 'true' ) { ?>
					
						<div class="sp-thumbnails">
							
							<?php $multiple_image_ids = $sliderpro_metavalues['multiple_image_id'];
							
							if( isset( $multiple_image_ids ) && count( $multiple_image_ids ) > 0 ) { 
							
								$count = 0;
								
								foreach( $multiple_image_ids as $image_ids ) { ?>
								
								<div class="sp-thumbnail sp-white sp-image-thumbnail">
									
									<?php 
										
										if( isset( $sliderpro_thumbnailsimages ) && $sliderpro_thumbnailsimages === 'true' ) {
										
											echo wp_get_attachment_image( $image_ids['multiple_image_id'], array( $sliderpro_thumbnailsimagewidth, $sliderpro_thumbnailsimageheight ), '', array( 'class' => 'sliderpro-imagethumb' ) ); 
										}
										
										if( isset( $sliderpro_thumbnailstext ) && $sliderpro_thumbnailstext === 'true' ) {
										
											echo sprintf( '<p class="sp-thumbnail-title"><a href="%1$s">%2$s</a></p>', esc_url( $image_ids['multiple_image_link'] ), esc_html( $image_ids['multiple_image_title'] ) );				
										}
									?>
									
								</div>
								
							<?php $count++; } } ?>	
						
						</div>	
					
					<?php } ?>	
					
				</div>
			
			<?php endwhile; wp_reset_query();
		}
	} 
	
	//If slider type posts
	if( $sliderpro_type == 'post' ) {
		
		$query = array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => $sliderpro_postlimit,
			'order'               => $sliderpro_postorder,
			'orderby'             => $sliderpro_postorderby,
			'ignore_sticky_posts' => true,
		);
		
		if ( ! empty( $sliderpro_postcategories ) )
		$query['category__in'] = $sliderpro_postcategories;
	
		if ( ! empty( $sliderpro_posttags ) )
		$query['tag__in'] = $sliderpro_posttags;
			
		$slider_pro_query = new WP_Query( $query );
		
		if ( $slider_pro_query->have_posts() ) { ?>
			
			<div id="SP4WP_<?php echo $slider_pro_id; ?>" class="slider-pro">
				
				<div class="sp-slides">
					
					<?php while ( $slider_pro_query->have_posts() ) : $slider_pro_query->the_post();
						$img_thumb 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb', true );
						$img_thumbnail 	= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail', true );
						$img_medium 	= wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium', true );
						$img_large 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large', true );
						$img_full 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true ); ?>
							
							<div class="sp-slide">
								
								<img class="sp-image" src="<?php echo SP4WP_PLUGIN_IMAGES; ?>/blank.gif"
									data-src="<?php echo esc_url( $img_full[0] ); ?>"
									data-small="<?php echo esc_url( $img_thumbnail[0] ); ?>"
									data-medium="<?php echo esc_url( $img_medium[0] ); ?>"
									data-large="<?php echo esc_url( $img_large[0] ); ?>"
									data-retina="<?php echo esc_url( $img_full[0] ); ?>"
									/>
								
								<?php if( isset( $sliderpro_titleonslider ) && $sliderpro_titleonslider === 'true' ) { 
										
										if( ! empty( esc_html( get_the_title() ) ) ) {	
											
											if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
										
												<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>"
													data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
													data-horizontal="30"
													data-vertical="100"> 
													<?php echo esc_html( get_the_title() ); ?>
												</h3>
									
											<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>									
										
												<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
													data-horizontal="30" 
													data-vertical="40">
													<?php echo esc_html( get_the_title() ); ?>
												</h3>
								<?php } } } ?>
								
								<?php if( isset( $sliderpro_descriptiononslider ) && $sliderpro_descriptiononslider === 'true' ) { 
										
										if( ! empty( esc_html( get_the_excerpt() ) ) ) {
										
											if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
										
												<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
													data-horizontal="30" 
													data-vertical="50">
													<?php echo wp_trim_words( esc_html( get_the_excerpt() ), $sliderpro_descriptionlength, '&hellip;' ); ?>
												</p>
										
											<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>
										
												<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> <?php echo esc_attr( $sliderpro_textbackgroundcorner ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
													data-horizontal="30" 
													data-vertical="100">
													<?php echo wp_trim_words( esc_html( get_the_excerpt() ), $sliderpro_descriptionlength, '&hellip;' ); ?>
												</p>
								<?php } } } ?>
							
							</div>
							
						<?php endwhile; ?>	
				
				</div>
				
				<?php if( isset( $sliderpro_thumbnails ) && $sliderpro_thumbnails === 'true' ) { ?>
				
					<div class="sp-thumbnails">
						
						<?php while ( $slider_pro_query->have_posts() ) : $slider_pro_query->the_post(); ?>
							
							<div class="sp-thumbnail sp-white sp-post-thumbnail">
								
								<?php 
								
									if( isset( $sliderpro_thumbnailsimages ) && $sliderpro_thumbnailsimages === 'true' ) {
									
										echo wp_get_attachment_image( get_post_thumbnail_id(), array( $sliderpro_thumbnailsimagewidth, $sliderpro_thumbnailsimageheight ), '', array( 'class' => 'sliderpro-imagethumb' ) ); 
									}
									
									if( isset( $sliderpro_thumbnailstext ) && $sliderpro_thumbnailstext === 'true' ) {
									
										echo sprintf( '<p class="sp-thumbnail-title"><a href="%1$s">%2$s</a></p>', esc_url( get_the_permalink() ), esc_html( get_the_title() ) );					
									}
								?>
							
							</div>
							
						<?php endwhile; ?>	
					
					</div>
				
				<?php } ?>	
				
			</div>
			
			<?php wp_reset_query();
		}
	}
	
	//If slider type woo products
	if( $sliderpro_type == 'woocommerce' ) {
		
		$query = array(
			'post_type'           => 'product',
			'post_status'         => 'publish',
			'posts_per_page'      => $sliderpro_wooproductslimit,
			'order'               => $sliderpro_wooproductsorder,
			'orderby'             => $sliderpro_wooproductsorderby,
			'ignore_sticky_posts' => true,
		);
		
		if ( ! empty( $sliderpro_productcategories ) ) {
			
			$query['tax_query']	  = array(
				'relation' 	=> 'AND', 
				array(
					'taxonomy'   => 'product_cat',
					'field'      => 'term_id',
					'terms'      => $sliderpro_productcategories,
				) 
			);
		}
	
		if ( ! empty( $sliderpro_producttags ) ) {
			
			$query['tax_query']	  = array(
				'relation' 	=> 'AND', 
				array(
					'taxonomy'   => 'product_tag',
					'field'      => 'term_id',
					'terms'      => $sliderpro_producttags,
				) 
			);
		}
		
		$slider_pro_query = new WP_Query( $query );
		
		if ( $slider_pro_query->have_posts() ) { ?>
			
			<div id="SP4WP_<?php echo $slider_pro_id; ?>" class="slider-pro">
				
				<div class="sp-slides">
					
					<?php while ( $slider_pro_query->have_posts() ) : $slider_pro_query->the_post(); 
						$img_thumb 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb', true );
						$img_thumbnail 	= wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail', true );
						$img_medium 	= wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium', true );
						$img_large 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large', true );
						$img_full 		= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true ); ?>
							
							<div class="sp-slide">
								
								<img class="sp-image" src="<?php echo SP4WP_PLUGIN_IMAGES; ?>/blank.gif"
									data-src="<?php echo esc_url( $img_full[0] ); ?>"
									data-small="<?php echo esc_url( $img_thumbnail[0] ); ?>"
									data-medium="<?php echo esc_url( $img_medium[0] ); ?>"
									data-large="<?php echo esc_url( $img_large[0] ); ?>"
									data-retina="<?php echo esc_url( $img_full[0] ); ?>"
									/>
								
								<?php if( isset( $sliderpro_titleonslider ) && $sliderpro_titleonslider === 'true' ) { 
										
										if( ! empty( esc_html( get_the_title() ) ) ) {
										
											if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
										
												<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>"
													data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
													data-horizontal="30"
													data-vertical="100"> 
													<?php echo esc_html( get_the_title() ); ?>
												</h3>
									
											<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>									
										
												<h3 class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_titleshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_titlehideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>"
													data-horizontal="30" 
													data-vertical="40">
													<?php echo esc_html( get_the_title() ); ?>
												</h3>
								<?php } } } ?>
								
								<?php if( isset( $sliderpro_descriptiononslider ) && $sliderpro_descriptiononslider === 'true' ) { 
										
										if( ! empty( esc_html( get_the_excerpt() ) ) ) {
										
											if( $sliderpro_textposition == 'bottomCenter' || $sliderpro_textposition == 'bottomLeft' || $sliderpro_textposition == 'bottomRight' ) { ?>
										
												<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
													data-horizontal="30" 
													data-vertical="50">
													<?php echo wp_trim_words( esc_html( get_the_excerpt() ), $sliderpro_descriptionlength, '&hellip;' ); ?>
												</p>
										
											<?php } if( $sliderpro_textposition == 'topCenter' || $sliderpro_textposition == 'topLeft' || $sliderpro_textposition == 'topRight' ) { ?>
										
												<p class="sp-layer <?php echo esc_attr( $sliderpro_textbackground ); ?> sp-padding" 
													data-position="<?php echo esc_attr( $sliderpro_textposition ); ?>" 
													data-show-transition="<?php echo esc_attr( $sliderpro_descriptionshowanimation ); ?>" 
													data-hide-transition="<?php echo esc_attr( $sliderpro_descriptionhideanimation ); ?>"
													data-show-delay="<?php echo esc_attr( $sliderpro_animationdelay ); ?>" 
													data-horizontal="30" 
													data-vertical="100">
													<?php echo wp_trim_words( esc_html( get_the_excerpt() ), $sliderpro_descriptionlength, '&hellip;' ); ?>
												</p>
								<?php } } } ?>
							
							</div>
							
						<?php endwhile; ?>	
				
				</div>
				
				<?php if( isset( $sliderpro_thumbnails ) && $sliderpro_thumbnails === 'true' ) { ?>
				
					<div class="sp-thumbnails">
						
						<?php while ( $slider_pro_query->have_posts() ) : $slider_pro_query->the_post(); 
							  global $product, $woocommerce; ?>
							
							<div class="sp-thumbnail sp-woocommerce-thumbnail">
								
								<?php 
								
									if( isset( $sliderpro_thumbnailsimages ) && $sliderpro_thumbnailsimages === 'true' ) {
									
										echo wp_get_attachment_image( get_post_thumbnail_id(), array( $sliderpro_thumbnailsimagewidth, $sliderpro_thumbnailsimageheight ) ); 
									}
									
									if( isset( $sliderpro_thumbnailstext ) && $sliderpro_thumbnailstext === 'true' ) {
									
										echo sprintf( '<p class="sp-thumbnail-title"><a href="%1$s">%2$s</a></p>', esc_url( get_the_permalink() ), esc_html( get_the_title() ) );						
										echo sprintf( '<p class="sp-thumbnail-title">%1$s</p>', $product->get_price_html() ); 
										echo sprintf( '<p class="sp-thumbnail-title">%1$s</p>', do_shortcode( '[add_to_cart id="' . get_the_ID() . '" show_price="false" style="none"]' ) );
									}
								?>								
								
							</div>
							
						<?php endwhile; ?>	
					
					</div>
				
				<?php } ?>	
				
			</div>
			
			<?php wp_reset_query();
		}
	}
} 
?>

<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		$( '#SP4WP_<?php echo $slider_pro_id; ?>' ).sliderPro({
			width : <?php echo $sliderpro_sliderwidth; ?>,
			height : <?php echo $sliderpro_sliderheight; ?>, 
			autoHeight : <?php echo $sliderpro_sliderautoheight; ?>,
			autoSlideSize : <?php echo $sliderpro_sliderautoslidesize; ?>,
			shuffle : <?php echo $sliderpro_slidershuffle; ?>,
			loop : <?php echo $sliderpro_sliderloop; ?>,
			centerImage : <?php echo $sliderpro_slidercenterimage; ?>,
			imageScaleMode : '<?php echo $sliderpro_sliderimagescalemode; ?>',
			waitForLayers : <?php echo $sliderpro_sliderwaitforlayers; ?>,
			orientation : '<?php echo $sliderpro_sliderorientation; ?>',
			touchSwipe : <?php echo $sliderpro_slidertouchswipe; ?>,
			fade: <?php echo $sliderpro_sliderfade; ?>,
			autoplay : <?php echo $sliderpro_autoplay; ?>,
			autoplayDelay : <?php echo $sliderpro_autoplaydelay; ?>,
			autoplayOnHover : '<?php echo $sliderpro_autoplayhover; ?>',
			autoplayDirection : '<?php echo $sliderpro_autoplaydirection; ?>',
			arrows : <?php echo $sliderpro_navigationarrows; ?>,
			fadeArrows : <?php echo $sliderpro_navigationarrowsonhover; ?>,
			buttons : <?php echo $sliderpro_navigationbuttons; ?>,
			keyboard : <?php echo $sliderpro_navigationkeyboard; ?>,
			fullScreen : <?php echo $sliderpro_navigationfullscreenbtn; ?>,
			fadeFullScreen : <?php echo $sliderpro_navigationfullscreenbtnonhover; ?>,
			thumbnailPointer : <?php echo $sliderpro_thumbnailspointer; ?>,
			thumbnailWidth : <?php echo $sliderpro_thumbnailswidth; ?>,
			thumbnailHeight : <?php echo $sliderpro_thumbnailsheight; ?>,
			thumbnailsPosition : '<?php echo $sliderpro_thumbnailsposition; ?>',
			thumbnailArrows : <?php echo $sliderpro_thumbnailsarrows; ?>,
			fadeThumbnailArrows : <?php echo $sliderpro_thumbnailsarrowsonhover; ?>,
			thumbnailTouchSwipe : <?php echo $sliderpro_thumbnailstouchswipe; ?>,
			responsive : true
		});
	});   
})(jQuery);
</script>	