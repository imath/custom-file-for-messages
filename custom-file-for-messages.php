<?php
/**
 * Sample plugin to illustrate BP Attachment use
 * -> require BuddyPress 2.3
 * 
 * @author    The BuddyPress community
 * @license   GPL-2.0+
 * @link      http://codex.buddypress.org
 *
 * @buddypress-plugin
 * Plugin Name:       Custom file for messages
 * Plugin URI:        http://codex.buddypress.org
 * Description:       Sample plugin to illustrate BP Attachment use
 * Version:           1.0.0
 * Author:            The BuddyPress community
 * Author URI:        http://buddypress.org
 * Text Domain:       custom-domain
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages/
 * GitHub Plugin URI: https://github.com/imath/custom-file-for-messages
 */

// Exit if accessed directly
defined( 'ABSPATH' ) or die;

/**
 * Wait BuddyPress is fully loaded before including
 * the Attachment class and our functions
 * 
 * Hook bp_include to do so.
 */ 
function custom_file_for_messages_require() {
	// This plugin requires BuddyPress 2.3 and the messages component
	if ( ! version_compare( bp_get_version(), '2.3-alpha', '>=' ) || ! bp_is_active( 'messages' ) ) {
		return;
	}

	// The Custom Attachment class
	require( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'includes/class-custom-attachment.php' );

	// The Custom functions for the messages component
	require( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'includes/functions.php' );
}
add_action( 'bp_include', 'custom_file_for_messages_require' );
