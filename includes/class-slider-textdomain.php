<?php
/**
 * Loads and defines the internationalization files for this plugin so that it is ready for translation.
 *
 * @since      1.0.0
 *
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/includes/class-slider-textdomain
 * @author     Devnath verma <devnathverma@gmail.com>
 */ 
class SP4WP_Register_Textdomain {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since      1.0.0
	 *
	 * @package    slider-pro-wp
	 * @subpackage slider-pro-wp/includes/class-slider-textdomain
	 * @author     Devnath verma <devnathverma@gmail.com>
	 */
	public static function slider_pro_textdomain() {
		
		load_plugin_textdomain(
			'slider-pro-wp',
			false,
			dirname( plugin_basename( __FILE__ ) ) . '/languages'
		);
	}
}