<?php
/**
 * This class defines all necessary settings for the plugin's.
 *
 * @since      1.0.0
 *
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/admin/class-admin-settings
 * @author     Devnath verma <devnathverma@gmail.com>
 */
class SP4WP_Admin_Settings {

	/**
	 * Initialize the class sets its properties.
	 *
	 * @since 1.0.0
	 */
	public function __construct( ) {

		//Create slider pro custom Post
		add_action( 'init', array( $this, 'sliderpro_custom_post_type') );
		
		//Add meta box to slider pro custom Post
		add_action( 'add_meta_boxes', array( $this, 'sliderpro_add_meta_box') );
		
		//Save slider pro settigs to post meta
		add_action( 'save_post', array( $this, 'sliderpro_save_meta_value'), 9, 1);
		
		// Add slider pro shortcode column - manage_{$post_type}_posts_columns
		add_filter( 'manage_slider_pro_posts_columns', array( $this, 'sliderpro_filter_posts_column' ) );
		
		// Add slider pro shortcode column data - manage_{$post_type}_posts_custom_column
		add_action( 'manage_slider_pro_posts_custom_column', array( $this, 'sliderpro_action_posts_column' ), 10, 2 );
		
		// Display slider pro images html using ajax in admin section
		add_action( 'wp_ajax_nopriv_sliderpro_multiple_images', array( $this, 'sliderpro_multiple_images' ) );
		add_action( 'wp_ajax_sliderpro_multiple_images', array( $this, 'sliderpro_multiple_images' ) );
		
		//Add scripts and styles to admin section
		add_action( 'admin_print_scripts', array( $this, 'sliderpro_admin_scripts') );
		add_action( 'admin_print_styles', array( $this, 'sliderpro_admin_styles') );
	}
	
	/**
	 * WordPress slider pro post type
	 *
	 * @since 1.0.0
	 */
	public function sliderpro_custom_post_type() {
		
		// Set the WordPress slider pro post type labels.
		$labels = array(
			'name'               => esc_html_x( 'All Sliders', 'slider-pro-wp' ),
			'singular_name'      => esc_html_x( 'Slider Pro', 'slider-pro-wp' ),
			'add_new'            => esc_html__( 'Add Slider', 'slider-pro-wp' ),
			'add_new_item'       => esc_html__( 'Add New Slider', 'slider-pro-wp' ),
			'edit_item'          => esc_html__( 'Edit Slider', 'slider-pro-wp' ),
			'new_item'           => esc_html__( 'New Slider', 'slider-pro-wp' ),
			'view_item'          => esc_html__( 'View Slider', 'slider-pro-wp' ),
			'search_items'       => esc_html__( 'Search Slider', 'slider-pro-wp' ),
			'not_found'          => esc_html__( 'No Sliders found.', 'slider-pro-wp' ),
			'not_found_in_trash' => esc_html__( 'No Sliders found in trash.', 'slider-pro-wp' ),
			'parent_item_colon'  => esc_html__( 'Parent Item:', 'slider-pro-wp' ),
			'menu_name'          => esc_html__( 'Slider Pro', 'slider-pro-wp' ),
			'all_items'          => esc_html__( 'All Sliders', 'slider-pro-wp' )
		);
		
		// Set the slider pro post type arguments.
		$args = array(
			'labels'              => $labels,
			'public'              => false,
			'hierarchical'        => false,
			'exclude_from_search' => true,
			'show_ui'             => current_user_can( 'manage_options' ) ? true : false,
			'show_in_admin_bar'   => false,
			'menu_position'       => 65,
			'menu_icon'           => 'dashicons-format-gallery',
			'rewrite'             => false,
			'query_var'           => false,
			'supports'            => array('title')
		);

		register_post_type( 'slider_pro', $args );
	}
	
	/**
	 * Add Meta Boxes
	 *
	 * @since   1.0.0
	 */
	public function sliderpro_add_meta_box() {
		
		add_meta_box( 
			'sp4wp-slider-type',
			__( 'Slider Type', 'slider-pro-wp' ), 
			array( $this, 'sliderpro_slider_type' ), 
			'slider_pro', 
			'normal', 
			'default' 
		);
		
		add_meta_box( 
			'sp4wp-slider-settings',
			__( 'Configure Settings', 'slider-pro-wp' ), 
			array( $this, 'sliderpro_slider_settings' ), 
			'slider_pro', 
			'normal', 
			'default' 
		);
		
		add_meta_box ( 
			'sp4wp-slider-shortcode',
			__( 'Slider Shortcode', 'slider-pro-wp' ), 
			array( $this, 'sliderpro_slider_shortcode' ), 
			'slider_pro', 
			'side', 
			'low'
		);
	}
	
	/**
	 * Include documention file
 	 *
	 * @since   1.0.0
	 */
	public function sliderpro_documentation() {
	
		include SP4WP_PLUGIN_ADMIN . 'view/slider-documentation.php';
	}
	
	/**
	 * Include slider type file
 	 *
	 * @since   1.0.0
	 */
	public function sliderpro_slider_type( $post ) {
		
		include SP4WP_PLUGIN_ADMIN . 'view/slider-get-settings.php';
		include SP4WP_PLUGIN_ADMIN . 'view/slider-type.php';
	}
	
	/**
	 * Include slider settings file
 	 *
	 * @since   1.0.0
	 */
	public function sliderpro_slider_settings( $post ) {
		
		include SP4WP_PLUGIN_ADMIN . 'view/slider-get-settings.php';
		include SP4WP_PLUGIN_ADMIN . 'view/slider-settings.php';
	}
	
	/**
	 * Return shortcode
 	 *
	 * @since   1.0.0
	 */
	public function sliderpro_slider_shortcode() { ?>
		
		<p><?php esc_html_e( 'Use below shortcode in any Page/Post to publish your slider', 'slider-pro-wp' ); ?></p>
		<input readonly="readonly" type="text" value="[slider_pro id=<?php echo get_the_ID(); ?>]">
		<br /><br />
		<p><?php esc_html_e( 'Use below shortcode in Custom Template to publish your slider', 'slider-pro-wp' ); ?></p>
		<textarea rows="2" cols="35" readonly="readonly">&lt;?php echo do_shortcode('[slider_pro id="<?php echo get_the_ID(); ?>"]'); ?&gt;</textarea>
	
	<?php }
	
	/**
	 * Add slider admin columns.
	 *
	 * @since 1.0.0
	 * @return statement
	 */
	public function sliderpro_filter_posts_column() {
		
		$sliderpro_postscolumns['cb']		 = '<input type="checkbox" />';
		$sliderpro_postscolumns['title']     = __( 'Slider Title', 'slider-pro-wp' );
		$sliderpro_postscolumns['shortcode'] = __( 'Shortcode', 'slider-pro-wp' );
		$sliderpro_postscolumns['date']      = __( 'Date', 'slider-pro-wp' );
		return $sliderpro_postscolumns;
	}
	
	/**
	 * Display admin columns for the slider.
	 *
	 * @since 1.0.0
	 * @param mix    $column The columns.
	 * @param string $post_id The post ID.
	 * @return void
	 */
	public function sliderpro_action_posts_column( $column, $post_id ) {
		
		switch ( $column ) {
			case 'shortcode':
				echo "<input type='text' class='button button-primary' id='slider-pro-shortcode-$post_id' value='[slider_pro id=$post_id]' style='font-size: 15px; background-color:#3498DB; color:#FFFFFF; text-align:center;' />";
				break;
		}
	}
	
	/**
	 * The function save settings in post meta.
 	 *
	 * @since 1.0.0
	 */
	public function sliderpro_save_meta_value( $post_id ) {
		
		if( isset( $post_id ) && ( isset( $_POST['sp4wp_save_nonce'] ) || wp_verify_nonce( $_POST['sp4wp_save_nonce'], 'sp4wp_settings' ) ) ) {
			if( isset( $_POST['multiple_image_id'] ) ) {
			
				$multiple_image_id = array();
				$multiple_image_ids = count( $_POST['multiple_image_id'] );
				
				if( $multiple_image_ids ) {
					
					for( $i=0; $i < $multiple_image_ids; $i++ ) {
						
						$multiple_image_id[sanitize_text_field($_POST['multiple_image_id'][$i])] = array(
							'multiple_image_id' 		=> (int)( $_POST['multiple_image_id'][$i] ),
							'multiple_image_title'		=> sanitize_text_field( $_POST['multiple_image_title'][$i] ),
							'multiple_image_link'		=> sanitize_text_field( $_POST['multiple_image_link'][$i] ),
							'multiple_image_caption' 	=> sanitize_text_field( $_POST['multiple_image_caption'][$i] )
						);
					}
				} 
			}
			
			$sliderpro_metavalues['multiple_image_id'] 				= isset( $multiple_image_id ) ? filter_var_array( $multiple_image_id ) : array();
			$sliderpro_metavalues['sliderpro_type'] 				= isset( $_POST['sliderpro_type'] ) ? sanitize_text_field( $_POST['sliderpro_type'] ) : 'image';	
			$sliderpro_metavalues['sliderpro_postlimit'] 			= isset( $_POST['sliderpro_postlimit'] ) ? (int)( $_POST['sliderpro_postlimit'] ) : 10;
			$sliderpro_metavalues['sliderpro_postorder'] 			= isset( $_POST['sliderpro_postorder'] ) ? sanitize_text_field( $_POST['sliderpro_postorder'] ) : 'ASC';	
			$sliderpro_metavalues['sliderpro_postorderby'] 			= isset( $_POST['sliderpro_postorderby'] ) ? sanitize_text_field( $_POST['sliderpro_postorderby'] ) : 'ID';
			$sliderpro_metavalues['sliderpro_postcategories'] 		= isset( $_POST['sliderpro_postcategories'] ) ? filter_var_array( $_POST['sliderpro_postcategories'] ) : array();
			$sliderpro_metavalues['sliderpro_posttags'] 			= isset( $_POST['sliderpro_posttags'] ) ? filter_var_array( $_POST['sliderpro_posttags'] ) : array();
			$sliderpro_metavalues['sliderpro_wooproductslimit'] 	= isset( $_POST['sliderpro_wooproductslimit'] ) ? (int)( $_POST['sliderpro_wooproductslimit'] ) : 10;
			$sliderpro_metavalues['sliderpro_wooproductsorder'] 	= isset( $_POST['sliderpro_wooproductsorder'] ) ? sanitize_text_field( $_POST['sliderpro_wooproductsorder'] ) : 'ASC';
			$sliderpro_metavalues['sliderpro_wooproductsorderby'] 	= isset( $_POST['sliderpro_wooproductsorderby'] ) ? sanitize_text_field( $_POST['sliderpro_wooproductsorderby'] ) : 'ID';
			$sliderpro_metavalues['sliderpro_productcategories'] 	= isset( $_POST['sliderpro_productcategories'] ) ? filter_var_array( $_POST['sliderpro_productcategories'] ) : array();
			$sliderpro_metavalues['sliderpro_producttags'] 			= isset( $_POST['sliderpro_producttags'] ) ? filter_var_array( $_POST['sliderpro_producttags'] ) : array();
			$sliderpro_metavalues['sliderpro_sliderwidth'] 			= isset( $_POST['sliderpro_sliderwidth'] ) ? (int)( $_POST['sliderpro_sliderwidth'] ) : 950;		
			$sliderpro_metavalues['sliderpro_sliderheight'] 		= isset( $_POST['sliderpro_sliderheight'] ) ? (int)( $_POST['sliderpro_sliderheight'] ) : 500;
			$sliderpro_metavalues['sliderpro_sliderautoheight'] 	= isset( $_POST['sliderpro_sliderautoheight'] ) ? sanitize_text_field( $_POST['sliderpro_sliderautoheight'] ) : 'false';
			$sliderpro_metavalues['sliderpro_sliderautoslidesize'] 	= isset( $_POST['sliderpro_sliderautoslidesize'] ) ? sanitize_text_field( $_POST['sliderpro_sliderautoslidesize'] ) : 'false';
			$sliderpro_metavalues['sliderpro_slidershuffle'] 		= isset( $_POST['sliderpro_slidershuffle'] ) ? sanitize_text_field( $_POST['sliderpro_slidershuffle'] ) : 'true';
			$sliderpro_metavalues['sliderpro_sliderloop'] 			= isset( $_POST['sliderpro_sliderloop'] ) ? sanitize_text_field( $_POST['sliderpro_sliderloop'] ) : 'true';
			$sliderpro_metavalues['sliderpro_slidercenterimage'] 	= isset( $_POST['sliderpro_slidercenterimage'] ) ? sanitize_text_field( $_POST['sliderpro_slidercenterimage'] ) : 'true';
			$sliderpro_metavalues['sliderpro_sliderimagescalemode'] = isset( $_POST['sliderpro_sliderimagescalemode'] ) ? sanitize_text_field( $_POST['sliderpro_sliderimagescalemode'] ) : 'cover';
			$sliderpro_metavalues['sliderpro_sliderwaitforlayers'] 	= isset( $_POST['sliderpro_sliderwaitforlayers'] ) ? sanitize_text_field( $_POST['sliderpro_sliderwaitforlayers'] ) : 'true';
			$sliderpro_metavalues['sliderpro_sliderorientation'] 	= isset( $_POST['sliderpro_sliderorientation'] ) ? sanitize_text_field( $_POST['sliderpro_sliderorientation'] ) : 'horizontal';
			$sliderpro_metavalues['sliderpro_slidertouchswipe'] 	= isset( $_POST['sliderpro_slidertouchswipe'] ) ? sanitize_text_field( $_POST['sliderpro_slidertouchswipe'] ) : 'false';
			$sliderpro_metavalues['sliderpro_sliderfade'] 			= isset( $_POST['sliderpro_sliderfade'] ) ? sanitize_text_field( $_POST['sliderpro_sliderfade'] ) : 'false';
			$sliderpro_metavalues['sliderpro_autoplay'] 			= isset( $_POST['sliderpro_autoplay'] ) ? sanitize_text_field( $_POST['sliderpro_autoplay'] ) : 'true';
			$sliderpro_metavalues['sliderpro_autoplaydelay'] 		= isset( $_POST['sliderpro_autoplaydelay'] ) ? (int)( $_POST['sliderpro_autoplaydelay'] ) : 3000;
			$sliderpro_metavalues['sliderpro_autoplayhover'] 		= isset( $_POST['sliderpro_autoplayhover'] ) ? sanitize_text_field( $_POST['sliderpro_autoplayhover'] ) : 'pause';
			$sliderpro_metavalues['sliderpro_autoplaydirection'] 	= isset( $_POST['sliderpro_autoplaydirection'] ) ? sanitize_text_field( $_POST['sliderpro_autoplaydirection'] ) : 'normal';
			$sliderpro_metavalues['sliderpro_navigationarrows'] 	= isset( $_POST['sliderpro_navigationarrows'] ) ? sanitize_text_field( $_POST['sliderpro_navigationarrows'] ) : 'true';
			$sliderpro_metavalues['sliderpro_navigationarrowsonhover'] 	= isset( $_POST['sliderpro_navigationarrowsonhover'] ) ? sanitize_text_field( $_POST['sliderpro_navigationarrowsonhover'] ) : 'true';
			$sliderpro_metavalues['sliderpro_navigationbuttons'] 	= isset( $_POST['sliderpro_navigationbuttons'] ) ? sanitize_text_field( $_POST['sliderpro_navigationbuttons'] ) : 'false';
			$sliderpro_metavalues['sliderpro_navigationkeyboard'] 	= isset( $_POST['sliderpro_navigationkeyboard'] ) ? sanitize_text_field( $_POST['sliderpro_navigationkeyboard'] ) : 'true';
			$sliderpro_metavalues['sliderpro_navigationfullscreenbtn'] 	= isset( $_POST['sliderpro_navigationfullscreenbtn'] ) ? sanitize_text_field( $_POST['sliderpro_navigationfullscreenbtn'] ) : 'true';
			$sliderpro_metavalues['sliderpro_navigationfullscreenbtnonhover'] = isset( $_POST['sliderpro_navigationfullscreenbtnonhover'] ) ? sanitize_text_field( $_POST['sliderpro_navigationfullscreenbtnonhover'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnails'] 			= isset( $_POST['sliderpro_thumbnails'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnails'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailswidth'] 		= isset( $_POST['sliderpro_thumbnailswidth'] ) ? (int)( $_POST['sliderpro_thumbnailswidth'] ) : 230;
			$sliderpro_metavalues['sliderpro_thumbnailsheight'] 	= isset( $_POST['sliderpro_thumbnailsheight'] ) ? (int)( $_POST['sliderpro_thumbnailsheight'] ) : 130;
			$sliderpro_metavalues['sliderpro_thumbnailsimages'] 	= isset( $_POST['sliderpro_thumbnailsimages'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailsimages'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailsimagewidth'] = isset( $_POST['sliderpro_thumbnailsimagewidth'] ) ? (int)( $_POST['sliderpro_thumbnailsimagewidth'] ) : 100;
			$sliderpro_metavalues['sliderpro_thumbnailsimageheight'] = isset( $_POST['sliderpro_thumbnailsimageheight'] ) ? (int)( $_POST['sliderpro_thumbnailsimageheight'] ) : 100;
			$sliderpro_metavalues['sliderpro_thumbnailstext'] 		= isset( $_POST['sliderpro_thumbnailstext'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailstext'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailsposition'] 	= isset( $_POST['sliderpro_thumbnailsposition'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailsposition'] ) : 'bottom';
			$sliderpro_metavalues['sliderpro_thumbnailsarrows'] 	= isset( $_POST['sliderpro_thumbnailsarrows'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailsarrows'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailsarrowsonhover'] 	= isset( $_POST['sliderpro_thumbnailsarrowsonhover'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailsarrowsonhover'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailspointer'] 	= isset( $_POST['sliderpro_thumbnailspointer'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailspointer'] ) : 'true';
			$sliderpro_metavalues['sliderpro_thumbnailstouchswipe'] = isset( $_POST['sliderpro_thumbnailstouchswipe'] ) ? sanitize_text_field( $_POST['sliderpro_thumbnailstouchswipe'] ) : 'false';
			$sliderpro_metavalues['sliderpro_titleonslider'] 		= isset( $_POST['sliderpro_titleonslider'] ) ? sanitize_text_field( $_POST['sliderpro_titleonslider'] ) : 'true';
			$sliderpro_metavalues['sliderpro_titleshowanimation'] 	= isset( $_POST['sliderpro_titleshowanimation'] ) ? sanitize_text_field( $_POST['sliderpro_titleshowanimation'] ) : 'down';
			$sliderpro_metavalues['sliderpro_titlehideanimation'] 	= isset( $_POST['sliderpro_titlehideanimation'] ) ? sanitize_text_field( $_POST['sliderpro_titlehideanimation'] ) : 'up';
			$sliderpro_metavalues['sliderpro_descriptiononslider'] 	= isset( $_POST['sliderpro_descriptiononslider'] ) ? sanitize_text_field( $_POST['sliderpro_descriptiononslider'] ) : 'true';
			$sliderpro_metavalues['sliderpro_descriptionlength'] 	= isset( $_POST['sliderpro_descriptionlength'] ) ? (int)( $_POST['sliderpro_descriptionlength'] ) : 15;
			$sliderpro_metavalues['sliderpro_descriptionshowanimation'] = isset( $_POST['sliderpro_descriptionshowanimation'] ) ? sanitize_text_field( $_POST['sliderpro_descriptionshowanimation'] ) : 'up';
			$sliderpro_metavalues['sliderpro_descriptionhideanimation'] = isset( $_POST['sliderpro_descriptionhideanimation'] ) ? sanitize_text_field( $_POST['sliderpro_descriptionhideanimation'] ) : 'down';
			$sliderpro_metavalues['sliderpro_textposition'] 		= isset( $_POST['sliderpro_textposition'] ) ? sanitize_text_field( $_POST['sliderpro_textposition'] ) : 'bottomLeft';
			$sliderpro_metavalues['sliderpro_animationdelay'] 		= isset( $_POST['sliderpro_animationdelay'] ) ? (int)( $_POST['sliderpro_animationdelay'] ) : 500;
			$sliderpro_metavalues['sliderpro_textbackground'] 		= isset( $_POST['sliderpro_textbackground'] ) ? sanitize_text_field( $_POST['sliderpro_textbackground'] ) : 'sp-black';
			$sliderpro_metavalues['sliderpro_textbackgroundcorner'] = isset( $_POST['sliderpro_textbackgroundcorner'] ) ? sanitize_text_field( $_POST['sliderpro_textbackgroundcorner'] ) : '';
			update_post_meta( $post_id, 'SLIDER_PRO_SETTINGS_'.$post_id, $sliderpro_metavalues );
		}	
	}
	
	/**
	 * Return the image html output using ajax.
	 *
	 * @since 1.0.0
	 * @return string image html
	 */
	public function sliderpro_multiple_images() {
		
		$attachment_id 			= (int)( $_POST['attachment_id'] );
		$attachment_data 		= get_post( $attachment_id );
		$attachment_title 		= $attachment_data->post_title;
		$attachment_caption 	= $attachment_data->post_excerpt;
		$attachment_link 		= get_permalink( $attachment_data->ID ); ?>
		
		<div id="<?php echo $attachment_id; ?>" class="sliderpro_imagesinner">
			
			<a id="sliderpro_deleteimage" class="sliderpro_deleteimage">
				<img src="<?php echo SP4WP_PLUGIN_IMAGES; ?>delete-icon.png" class="sliderpro_deleteimageicon">
			</a>
				
			<input type="hidden" name="multiple_image_id[]" id="multiple_image_id" class="widefat" value="<?php echo $attachment_id; ?>" />
			<p>
				<?php echo wp_get_attachment_image( $attachment_id, 'thumbnail', '', array( 'class' => 'multiple_image_preview' ) ); ?>
			</p>
				
			<p>
				<label for="multiple_image_title">
					<?php esc_html_e( 'Title', 'slider-pro-wp'  ); ?>
				</label>
				<input type="text" name="multiple_image_title[]" value="<?php echo esc_html( $attachment_title ); ?>" placeholder="<?php esc_html_e('Enter Image Title Here', 'slider-pro-wp' ); ?>" class="widefat">
			</p>
			
			<p>
				<label for="multiple_image_link">
					<?php esc_html_e( 'Link', 'slider-pro-wp' ); ?>
				</label>
				<input class="widefat" placeholder="<?php esc_html_e('http://', 'slider-pro-wp' ); ?>" id="multiple_image_link" name="multiple_image_link[]" type="text" value="<?php echo esc_url( $attachment_link ); ?>">
			</p>
			
			<p>
				<label for="multiple_image_caption">
					<?php esc_html_e( 'Description', 'slider-pro-wp' ); ?>
				</label>
				<textarea rows="4" class="widefat" placeholder="<?php esc_html_e('Enter Image Description Here', 'slider-pro-wp' ); ?>" id="multiple_image_caption" name="multiple_image_caption[]" type="text"><?php echo esc_textarea( $attachment_caption ); ?></textarea>
			</p>

		</div>
		
	<?php die; }
	
	/**
	 * Register the scripts for the admin area of the plugin.
	 *
	 * @since  1.0.0
	 */
	public function sliderpro_admin_scripts() {
		
		if( is_admin() ) { 
			
			wp_enqueue_media();
			wp_register_script( 'slider-pro-admin', SP4WP_PLUGIN_JS . 'slider-pro-admin.js', array('jquery') );
			wp_localize_script( 'slider-pro-admin', 'sliderpro_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
			wp_enqueue_script( 'slider-pro-admin' );
		}
	}
	
	/**
	 * Register the stylesheets for the admin area of the plugin.
	 *
	 * @since   1.0.0
	 */
	public function sliderpro_admin_styles() {
		
		if( is_admin() ) { 
			
			wp_enqueue_style( 'slider-pro-admin', SP4WP_PLUGIN_CSS . 'slider-pro-admin.css' );
		}
	}
}