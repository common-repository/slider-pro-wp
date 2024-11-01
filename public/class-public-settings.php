<?php
/**
 * This class defines all necessary settings for the plugin's.
 *
 * @since      1.0.0
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/public/class-public-settings
 * @author     Devnath verma <devnathverma@gmail.com>
 */
class SP4WP_Public_Settings {
	
	/**
	 * Initialize the class and set its properties.
	 */
	public function __construct() {
		
		add_action( 'init', array( $this, 'slider_pro_init') );
	}
	
	public function slider_pro_init() {
		
		//Add shortcode
		add_shortcode( 'slider_pro', array( $this, 'slider_pro_shortcode') );
		
		//Add scripts and styles to public section
		add_action( 'wp_enqueue_scripts', array( $this, 'slider_pro_public_scripts_styles' ) );
	}
	
	/**
	 * Shortcode main function.
	 *
	 * @since   1.0.0
	 * @param mixed $attr The attributes of the shortcode.
	 * @return statement
	 */
	public function slider_pro_shortcode( $atts ) {
		 
		 ob_start();
		 include SP4WP_PLUGIN_PUBLIC . 'view/slider-shortcode.php';
		 return ob_get_clean();
	}
	
	/**
	 * Register the stylesheets for the public facing side of the site.
	 *
	 * @since   1.0.0
	 * @package slider-pro-wp
	 * @author  Devnath verma
	 */
	public function slider_pro_public_scripts_styles() {
		
		wp_enqueue_script( 'slider-pro-public', SP4WP_PLUGIN_JS . 'slider-pro-public.js', array('jquery') );	
		wp_enqueue_style( 'slider-pro-public', SP4WP_PLUGIN_CSS . 'slider-pro-public.css' );
	}
}