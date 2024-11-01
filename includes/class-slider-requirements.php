<?php
/**
 * Fired during plugin activation.
 * This class defines requirement error to run during the plugin's activation.
 *
 * @since      1.0.0
 *
 * @package    slider-pro-wp
 * @subpackage slider-pro-wp/includes/class-slider-requirements
 * @author     Devnath verma <devnathverma@gmail.com>
 */
class SP4WP_Requirements_Error {
		
	/**
	 * Prints an error that the system requirements weren't met.
	 *
	 * @since      1.0.0
	 *
	 * @package    slider-pro-wp
	 * @subpackage slider-pro-wp/includes/class-slider-requirements
	 * @author     Devnath verma <devnathverma@gmail.com>
	 */
	public static function slider_pro_requirements( ) {
		
		global $wp_version;
		$sliderpro_requirements  = '';
		$sliderpro_requirements .= '<div class="error">';
		$sliderpro_requirements .= '<p><strong>'. SP4WP_PLUGIN_NAME .'</strong></p>';
		$sliderpro_requirements .= '<ul class="ul-disc">';
		$sliderpro_requirements .= '<li>';
		$sliderpro_requirements .= '<strong>ERROR : </strong>';
		$sliderpro_requirements .= '<em>Your environment doesn"t meet all of the system requirements listed below.</em>';
		$sliderpro_requirements .= '</li>';
		$sliderpro_requirements .= '<li>';
		$sliderpro_requirements .= '<strong>PHP ' .SP4WP_PHP_VERSION. ' : </strong>';
		$sliderpro_requirements .= '<em> You"re running version of PHP ' .PHP_VERSION. '</em>';
		$sliderpro_requirements .= '</li>';
		$sliderpro_requirements .= '<li>';
		$sliderpro_requirements .= '<strong>WordPress ' .SP4WP_WP_VERSION. ' : </strong>';
		$sliderpro_requirements .= '<em> You"re running version of WordPress ' .esc_html( $wp_version ). '</em>';
		$sliderpro_requirements .= '</li>';
		$sliderpro_requirements .= '</ul>';
		$sliderpro_requirements .= '<p>If you need to upgrade your version of PHP you can ask your hosting company for assistance, and if you need help upgrading WordPress you can refer to <a href="http://codex.wordpress.org/Upgrading_WordPress">the Codex</a>.</p>';
		$sliderpro_requirements .= '</div>';
		echo $sliderpro_requirements;
	}
}