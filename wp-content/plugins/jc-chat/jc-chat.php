<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://localhost/justcode
 * @since             1.0.0
 * @package           Jc_Chat
 *
 * @wordpress-plugin
 * Plugin Name:       Justcode Chat
 * Plugin URI:        http://localhost/justcode
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Justcode
 * Author URI:        http://localhost/justcode
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jc-chat
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jc-chat-activator.php
 */
function activate_jc_chat() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jc-chat-activator.php';
	Jc_Chat_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jc-chat-deactivator.php
 */
function deactivate_jc_chat() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jc-chat-deactivator.php';
	Jc_Chat_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jc_chat' );
register_deactivation_hook( __FILE__, 'deactivate_jc_chat' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jc-chat.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jc_chat() {

	$plugin = new Jc_Chat();
	$plugin->run();

}
run_jc_chat();
