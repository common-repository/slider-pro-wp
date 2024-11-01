<?php
/**
 * Slider_Pro class file.
 *
 * @package slider-pro-wp
 * @author  Devnath verma <devnathverma@gmail.com>
 * @version 1.0.0
 */
 
/*
 * Plugin Name:  Slider Pro
 * Description:  A modular, responsive and touch-enabled jQuery slider plugin that enables you to create elegant and professionally looking sliders
 * Version:      1.0.0
 * Author:       Devnath verma
 * Author Email: devnathverma@gmail.com
 * License:      GPLv2 or later
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  slider-pro-wp
 * Domain Path:  /languages
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/*----------------------------------------------------------------------------*
 * If this file is called directly, abort.
 *-----------------------------------------------------------------------------*/

if( ! defined( 'ABSPATH' ) ) {
	
	die( 'You are not allowed to call this page directly.' );
}

/**
 * Slider Pro Plugin Define Constants.
 *
 * @since   1.0.0
 * @package slider-pro-wp
 * @author  Devnath verma
 */
global $wpdb; 
define( 'SP4WP_PLUGIN_NAME', 'Slider Pro' );
define( 'SP4WP_PHP_VERSION', '5.3' );
define( 'SP4WP_WP_VERSION', '4.8' );
define( 'SP4WP_PLUGIN_VERSION', '1.0.0' );	
define( 'SP4WP_PLUGIN_TEXTDOMAIN', 'slider-pro-wp' );	
define( 'SP4WP_PLUGIN_FOLDER', basename( dirname(__FILE__) ) );
define( 'SP4WP_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'SP4WP_PLUGIN_REL_PATH', dirname( plugin_basename( __FILE__ ) ) . '/' );
define( 'SP4WP_PLUGIN_ADMIN', SP4WP_PLUGIN_PATH.'admin'.'/' );
define( 'SP4WP_PLUGIN_PUBLIC', SP4WP_PLUGIN_PATH.'public'.'/' );	
define( 'SP4WP_PLUGIN_INCLUDES', SP4WP_PLUGIN_PATH.'includes'.'/' );
define( 'SP4WP_PLUGIN_LANGUAGES', SP4WP_PLUGIN_PATH.'languages'.'/' );	
define( 'SP4WP_PLUGIN_URL', plugin_dir_url(SP4WP_PLUGIN_FOLDER).SP4WP_PLUGIN_FOLDER.'/' );
define( 'SP4WP_PLUGIN_CSS', SP4WP_PLUGIN_URL.'/assets/css'.'/' );
define( 'SP4WP_PLUGIN_JS', SP4WP_PLUGIN_URL.'/assets/js'.'/' );
define( 'SP4WP_PLUGIN_IMAGES', SP4WP_PLUGIN_URL.'/assets/images'.'/' );

/**
 * The base-class of the plugin.
 * Defines the plugin, loads the text domain, holds the PHP function handling the Slider Pro validation
 * enqueues the front-end specific stylesheet and JavaScript.
 *
 * @since   1.0.0
 *
 * @package slider-pro-wp
 * @author  Devnath verma
 */
if( ! class_exists( 'Slider_Pro' ) ) {
	
	class Slider_Pro {
		
		/**
		 * Instance of this class.
		 *
		 * @since    1.0.0
		 * @access   public
		 * @var      string $_slider_pro_instance The plugin name to be used in the Slider Pro Plugin.
		 */
		public static $_slider_pro_instance;
	
		
		/**
		 * Return an instance of this class.
		 *
		 * @since   1.0.0
		 *
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public static function slider_pro_instance() {
			
			// If the single instance hasn't been set, set it now.
			if ( self::$_slider_pro_instance === null )
			self::$_slider_pro_instance = new self();
	
			return self::$_slider_pro_instance;
		}
	
		/**
		 * Initialize the class and set its properties.
		 */
		public function __construct() {
	
			register_activation_hook( __FILE__, array( $this, 'sliderpro_register_activation' ) );
			register_deactivation_hook( __FILE__, array( $this, 'sliderpro_register_deactivation' ) );
			add_action( 'plugin_action_links', array( $this, 'sliderpro_setting_links' ), 10, 2 );
			$this->sliderpro_internationalization_i18n();
			$this->sliderpro_admin_hooks();
			$this->sliderpro_public_hooks();
		}
			
		/**
		 * Register all of the hooks related to the admin area functionality.
		 *
		 * @since   1.0.0
		 *
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_admin_hooks() { 
			
			include SP4WP_PLUGIN_ADMIN . 'class-admin-settings.php';
			new SP4WP_Admin_Settings();
		}
		
		/**
		 * Register all of the hooks related to the admin area functionality.
		 *
		 * @since   1.0.0
		 *
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_public_hooks() { 
			
			include SP4WP_PLUGIN_PUBLIC . 'class-public-settings.php';
			new SP4WP_Public_Settings();
		}
	
		/**
		 * The code that runs during plugin activatation.
		 * This action is documented in includes/class-slider-activation.php
		 *
		 * @since   1.0.0
		 *
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_register_activation() {
			
			if ( ! current_user_can( 'activate_plugins' ) ) return;
			include SP4WP_PLUGIN_INCLUDES . 'class-slider-activation.php';
			SP4WP_Register_Activator::slider_pro_activate();
		}
	
		/**
		 * The code that runs during plugin deactivation.
		 * This action is documented in includes/class-slider-deactivation.php
		 *
		 * @since   1.0.0
		 *
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_register_deactivation() {
			
			if ( ! current_user_can( 'activate_plugins' ) ) return;
			include SP4WP_PLUGIN_INCLUDES . 'class-slider-deactivation.php';
			SP4WP_Register_Dectivator::slider_pro_dectivate();
		}
	
		/**
		 * Load the plugin text domain for translation.
		 * This action is documented in includes/class-slider-textdomain.php
		 *
		 * @since   1.0.0
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_internationalization_i18n() {
			
			include SP4WP_PLUGIN_INCLUDES . 'class-slider-textdomain.php';
			SP4WP_Register_Textdomain::slider_pro_textdomain();
		}
	
		/**
		 * Add links to settings page.
		 * @param array $slider_pro_links
		 * @param string $slider_pro_file
		 * @return array
		 *
		 * @since   1.0.0
		 * @package slider-pro-wp
		 * @author  Devnath verma
		 */
		public function sliderpro_setting_links( $slider_pro_links, $slider_pro_file ) {
			
			if ( ! is_admin() || ! current_user_can( 'manage_options' ) )
			return $slider_pro_links;
	
			static $plugin;
	
			$plugin = plugin_basename( __FILE__ );
	
			if ( $slider_pro_file == $plugin ) {
				
				$settings_link = sprintf( '<a href="%s">%s</a>', admin_url( 'post-new.php?post_type=slider_pro' ), __( 'Settings', 'slider-pro-wp' ) );
				array_unshift( $slider_pro_links, $settings_link );
			}
	
			return $slider_pro_links;
		}
	}
}	

/**
 * Checks if the system requirements are met
 * @return bool True if system requirements are met, false if not
 *
 * @since   1.0.0
 * @package slider-pro-wp
 * @author  Devnath verma
 */
function sliderpro_requirements() {
	
	global $wp_version;

	if ( version_compare( PHP_VERSION, SP4WP_PHP_VERSION, '<' ) ) {
		return false;
	}

	if ( version_compare( $wp_version, SP4WP_WP_VERSION, '<' ) ) {
		return false;
	}

	return true;
}

/**
 * Prints an error that the system requirements weren't met.
 *
 * @since   1.0.0
 * @package slider-pro-wp
 * @author  Devnath verma
 */
function sliderpro_requirements_error() {
	
	global $wp_version;
	
	include SP4WP_PLUGIN_INCLUDES . 'class-slider-requirements.php';
	SP4WP_Requirements_Error::slider_pro_requirements();
}

/**
 * Check requirements and load main class
 * The main program needs to be in a separate file that only gets loaded if the plugin requirements are met. 
 * Otherwise older PHP installations could crash when trying to parse it.
 *
 * @since   1.0.0
 * @package slider-pro-wp
 * @author  Devnath verma
 */
if ( sliderpro_requirements() ) {
	
	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 *
	 * @since   1.0.0
	 * @package slider-pro-wp
	 * @author  Devnath verma
	 */	
	function Slider_Pro() {
		
		static $slider_pro_instance;

		//first call to slider_pro_instance() initializes the plugin
		if ( $slider_pro_instance === null || ! ($slider_pro_instance instanceof Slider_Pro) )
		$slider_pro_instance = Slider_Pro::slider_pro_instance();
		
		return $slider_pro_instance;
	}
	
	Slider_Pro();
	
} else {
	
	// The action responsible for adding the admin notices when the plugin is first activated.
	add_action( 'admin_notices', 'sliderpro_requirements_error' );
}