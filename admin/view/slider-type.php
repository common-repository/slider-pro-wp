<?php
/**
 * This Files Display Slider Types HTML of Slider Pro Plugin in admin Section.
 *
 * @since      1.0.0
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/admin/view/slider-type
 * @author     Devnath verma <devnathverma@gmail.com>
 */	
?>

<div class="sp4wp-radio">
	<input id="sp4wp_slider_image" class="sp4wp-radio-input" type="radio" name="sliderpro_type" value="image" <?php if( isset( $sliderpro_type ) ) { checked( $sliderpro_type, 'image' ); } ?> />
	<label for="sp4wp_slider_image" class="sp4wp-radio-label">
		<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>slider-images.jpg" alt="slider-images">
		<span class="sp4wp-label-text">
			<?php esc_html_e( 'Images', 'slider-pro-wp' ); ?>
		</span>
	</label>
</div>
<div class="sp4wp-radio">
	<input id="sp4wp_slider_post" class="sp4wp-radio-input" type="radio" name="sliderpro_type" value="post" <?php if( isset( $sliderpro_type ) ) { checked( $sliderpro_type, 'post' ); } ?> />
	<label for="sp4wp_slider_post" class="sp4wp-radio-label">
		<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>slider-post.jpg" alt="slider-post">
		<span class="sp4wp-label-text">
			<?php esc_html_e( 'Posts', 'slider-pro-wp' ); ?>
		</span>
	</label>
</div>
<div class="sp4wp-radio">
	<input id="sp4wp_slider_woocommerce" class="sp4wp-radio-input" type="radio" name="sliderpro_type" value="woocommerce" <?php if( isset( $sliderpro_type ) ) { checked( $sliderpro_type, 'woocommerce' ); } ?> />
	<label for="sp4wp_slider_woocommerce" class="sp4wp-radio-label">
		<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>slider-woocommerce.jpg" alt="slider-woocommerce">
		<span class="sp4wp-label-text">
			<?php esc_html_e( 'Woo Products', 'slider-pro-wp' ); ?>
		</span>
	</label>
</div>

<?php wp_nonce_field( 'sp4wp_settings', 'sp4wp_save_nonce' ); ?>

<div class="sliderpro_imagestypecontainer" id="sliderpro_imagestypecontainer" <?php if ( empty( $sliderpro_type ) || $sliderpro_type != 'image' ) { ?>style="display:none;"<?php } ?>>

	<div class="sliderpro_imagescontainer" id="sliderpro_imagescontainer">
	
	<?php
		
		if( isset( $sliderpro_multipleimageid ) && is_array( $sliderpro_multipleimageid ) ) {
		
			foreach( $sliderpro_multipleimageid as $multiple_image_id ) { ?>
		
				<div id="<?php echo $multiple_image_id['multiple_image_id']; ?>" class="sliderpro_imagesinner">
					
					<a id="sliderpro_deleteimage" class="sliderpro_deleteimage">			
						<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>delete-icon.png" class="sliderpro_deleteimageicon">
					</a>
						
					<input type="hidden" name="multiple_image_id[]" id="multiple_image_id" class="widefat" value="<?php echo $multiple_image_id['multiple_image_id']; ?>" />
		
					<p>
						<?php echo wp_get_attachment_image( $multiple_image_id['multiple_image_id'], 'thumbnail', '', array( 'class' => 'multiple_image_preview' ) ); ?>
					</p>
						
					<p>
						<label for="multiple_image_title">
							<?php esc_html_e( 'Title', 'slider-pro-wp'  ); ?>
						</label>
						<input type="text" name="multiple_image_title[]" value="<?php echo esc_html( $multiple_image_id['multiple_image_title'] ); ?>" placeholder="<?php esc_html_e('Enter Image Title Here', 'slider-pro-wp' ); ?>" class="widefat">
					</p>
					
					<p>
						<label for="multiple_image_link">
							<?php esc_html_e( 'Link', 'slider-pro-wp' ); ?>
						</label>
						<input class="widefat" placeholder="<?php esc_html_e('http://', 'widget-bundle' ); ?>" id="multiple_image_link" name="multiple_image_link[]" type="text" value="<?php echo esc_url( $multiple_image_id['multiple_image_link'] ); ?>">
					</p>
					
					<p>
						<label for="multiple_image_caption">
							<?php esc_html_e( 'Description', 'slider-pro-wp' ); ?>
						</label>
						<textarea class="widefat" rows="4" placeholder="<?php esc_html_e('Enter Image Description Here', 'slider-pro-wp' ); ?>" id="ultiple_image_caption" name="multiple_image_caption[]" type="text"><?php echo esc_textarea( $multiple_image_id['multiple_image_caption'] ); ?></textarea>
					</p>

				</div>
				
				<?php
			} 
		}
	?>
	
	</div>
	
	<a class="sliderpro_addimages" id="slider-add-delete-icon" data-uploader_title="Upload Image" data-uploader_button_text="Select">
		<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>slider-add-images.jpg" alt="slider-add-images">
	</a>
	
	<a class="sliderpro_deleteallimage" id="slider-add-delete-icon">
		<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>slider-delete-images.jpg" alt="slider-delete-images">
	</a>

</div>

<div class="sliderpro_poststypecontainer" id="sliderpro_poststypecontainer" <?php if ( empty( $sliderpro_type ) || $sliderpro_type != 'post' ) { ?>style="display:none;"<?php } ?>>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_postlimit">
			<strong><?php esc_html_e( 'Limit of Posts :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<input class="widefat" id="sliderpro_postlimit" name="sliderpro_postlimit" type="number" step="1" min="2" value="<?php echo $sliderpro_postlimit; ?>" />
	</div>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_postorder">
			<strong><?php esc_html_e( 'Order :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<select class="widefat" id="sliderpro_postorder" name="sliderpro_postorder">
			<option value="ASC" <?php selected( $sliderpro_postorder, 'ASC' ); ?>>
				<?php esc_html_e( 'Ascending', 'slider-pro-wp' ); ?>
			</option>
			<option value="DESC" <?php selected( $sliderpro_postorder, 'DESC' ); ?>>
				<?php esc_html_e( 'Descending', 'slider-pro-wp' ); ?>
			</option>
		</select>
	</div>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_postorderby">
			<strong><?php esc_html_e( 'Order By :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<select class="widefat" id="sliderpro_postorderby" name="sliderpro_postorderby">
			<option value="ID" <?php selected( $sliderpro_postorderby, 'ID' ); ?>>
				<?php esc_html_e( 'ID', 'slider-pro-wp' ) ?>
			</option>
			<option value="author" <?php selected( $sliderpro_postorderby, 'author' ); ?>>
				<?php esc_html_e( 'Author', 'slider-pro-wp' ) ?>
			</option>
			<option value="title" <?php selected( $sliderpro_postorderby, 'title' ); ?>>
				<?php esc_html_e( 'Title', 'slider-pro-wp' ) ?>
			</option>
			<option value="date" <?php selected( $sliderpro_postorderby, 'date' ); ?>>
				<?php esc_html_e( 'Date', 'slider-pro-wp' ) ?>
			</option>
			<option value="modified" <?php selected( $sliderpro_postorderby, 'modified' ); ?>>
				<?php esc_html_e( 'Modified', 'slider-pro-wp' ) ?>
			</option>
			<option value="rand" <?php selected( $sliderpro_postorderby, 'rand' ); ?>>
				<?php esc_html_e( 'Random', 'slider-pro-wp' ) ?>
			</option>
		</select>
	</div>
	
	<?php if( get_terms( 'category' ) ) { ?>
		<div class="sliderpro_postrow">
			<label for="sliderpro_postcategories">
				<strong><?php esc_html_e( 'Filter by Categories :', 'slider-pro-wp' ); ?></strong>
			</label>
			<br />
			<div class="sp4wp-multi-checkbox">
				<?php foreach ( get_terms( 'category' ) as $category ) { ?>
					<input type="checkbox" value="<?php echo (int) $category->term_id; ?>" id="sliderpro_postcategories" name="sliderpro_postcategories[]" <?php checked( is_array( $sliderpro_postcategories ) && in_array( $category->term_id, $sliderpro_postcategories ) ); ?> />
					<label for="sliderpro_postcategories-<?php echo (int) $category->term_id; ?>">
						<?php echo esc_html( $category->name ); ?>
					</label></br>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if( get_terms( 'post_tag' ) ) { ?>
		<div class="sliderpro_postrow">
			<label for="sliderpro_posttags">
				<strong><?php esc_html_e( 'Filter by Tags :', 'slider-pro-wp' ); ?></strong>
			</label>
			<br />
			<div class="sp4wp-multi-checkbox">
				<?php foreach ( get_terms( 'post_tag' ) as $post_tag ) {  ?>
					<input type="checkbox" value="<?php echo (int) $post_tag->term_id; ?>" id="sliderpro_posttags" name="sliderpro_posttags[]" <?php checked( is_array( $sliderpro_posttags ) && in_array( $post_tag->term_id, $sliderpro_posttags ) ); ?> />
					<label for="sliderpro_posttags-<?php echo (int) $post_tag->term_id; ?>">
						<?php echo esc_html( $post_tag->name ); ?>
					</label></br>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
</div>

<div class="sliderpro_woocommercetypecontainer" id="sliderpro_woocommercetypecontainer" <?php if ( empty( $sliderpro_type ) || $sliderpro_type != 'woocommerce' ) { ?>style="display:none;"<?php } ?>>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_wooproductslimit">
			<strong><?php esc_html_e( 'Limit of Products :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<input class="widefat" id="sliderpro_wooproductslimit" name="sliderpro_wooproductslimit" type="number" step="1" min="2" value="<?php echo $sliderpro_wooproductslimit; ?>" />
	</div>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_wooproductsorder">
			<strong><?php esc_html_e( 'Order :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<select class="widefat" id="sliderpro_wooproductsorder" name="sliderpro_wooproductsorder">
			<option value="ASC" <?php selected( $sliderpro_wooproductsorder, 'ASC' ); ?>>
				<?php esc_html_e( 'Ascending', 'slider-pro-wp' ); ?>
			</option>
			<option value="DESC" <?php selected( $sliderpro_wooproductsorder, 'DESC' ); ?>>
				<?php esc_html_e( 'Descending', 'slider-pro-wp' ); ?>
			</option>
		</select>
	</div>
	
	<div class="sliderpro_postrow">
		<label for="sliderpro_wooproductsorderby">
			<strong><?php esc_html_e( 'Order By :', 'slider-pro-wp' ); ?></strong>
		</label>
		<br />
		<select class="widefat" id="sliderpro_wooproductsorderby" name="sliderpro_wooproductsorderby">
			<option value="ID" <?php selected( $sliderpro_wooproductsorderby, 'ID' ); ?>>
				<?php esc_html_e( 'ID', 'slider-pro-wp' ) ?>
			</option>
			<option value="author" <?php selected( $sliderpro_wooproductsorderby, 'author' ); ?>>
				<?php esc_html_e( 'Author', 'slider-pro-wp' ) ?>
			</option>
			<option value="title" <?php selected( $sliderpro_wooproductsorderby, 'title' ); ?>>
				<?php esc_html_e( 'Title', 'slider-pro-wp' ) ?>
			</option>
			<option value="date" <?php selected( $sliderpro_wooproductsorderby, 'date' ); ?>>
				<?php esc_html_e( 'Date', 'slider-pro-wp' ) ?>
			</option>
			<option value="modified" <?php selected( $sliderpro_wooproductsorderby, 'modified' ); ?>>
				<?php esc_html_e( 'Modified', 'slider-pro-wp' ) ?>
			</option>
			<option value="rand" <?php selected( $sliderpro_wooproductsorderby, 'rand' ); ?>>
				<?php esc_html_e( 'Random', 'slider-pro-wp' ) ?>
			</option>
		</select>
	</div>
	
	<?php if( get_terms( 'product_cat' ) ) { ?>
		<div class="sliderpro_postrow">
			<label for="sliderpro_productcategories">
				<strong><?php esc_html_e( 'Filter by Product Categories :', 'slider-pro-wp' ); ?></strong>
			</label>
			<br />
			<div class="sp4wp-multi-checkbox">
				<?php foreach ( get_terms( 'product_cat' ) as $product_cat ) { ?>
					<input type="checkbox" value="<?php echo (int) $product_cat->term_id; ?>" id="sliderpro_productcategories" name="sliderpro_productcategories[]" <?php checked( is_array( $sliderpro_productcategories ) && in_array( $product_cat->term_id, $sliderpro_productcategories ) ); ?> />
					<label for="sliderpro_productcategories-<?php echo (int) $product_cat->term_id; ?>">
						<?php echo esc_html( $product_cat->name ); ?>
					</label></br>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if( get_terms( 'product_tag' ) ) { ?>
		<div class="sliderpro_postrow">
			<label for="sliderpro_producttags">
				<strong><?php esc_html_e( 'Filter by Product Tags :', 'slider-pro-wp' ); ?></strong>
			</label>
			<br />
			<div class="sp4wp-multi-checkbox">
				<?php foreach ( get_terms( 'product_tag' ) as $product_tag ) {  ?>
					<input type="checkbox" value="<?php echo (int) $product_tag->term_id; ?>" id="sliderpro_producttags" name="sliderpro_producttags[]" <?php checked( is_array( $sliderpro_producttags ) && in_array( $product_tag->term_id, $sliderpro_producttags ) ); ?> />			<label for="sliderpro_producttags-<?php echo (int) $product_tag->term_id; ?>">
						<?php echo esc_html( $product_tag->name ); ?>
					</label></br>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	
</div>