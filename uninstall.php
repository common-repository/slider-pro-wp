<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package slider-pro-wp
 * @since   1.0.0
 * @author  Devnath verma <devnathverma@gmail.com>
 */

/*----------------------------------------------------------------------------*
 * If uninstall not called from WordPress, then exit.
 *-----------------------------------------------------------------------------*/

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {

    exit;
}