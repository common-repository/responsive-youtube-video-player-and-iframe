<?php

/**
 * @link              http://www.2803media.fr
 * @since             1.0.0
 * @package           Wp_Yrvp
 *
 * @wordpress-plugin
 * Plugin Name:       Youtube Responsive Video Player
 * Plugin URI:        http://www.2803media.fr/plugins/youtube-responsive-video-player/
 * Description:       This plugin transform any iframe and oembed into a clean responsive iframe and video player (youtube, vimeo, dailymotion...), it's easy, simple and perfect for your mobile visitor. Each iframe is now at a 100% width of your page content, no need to calculate the right width and height for your embed player!
 * Version:           1.0.0
 * Author:            2803 MEDIA
 * Author URI:        http://www.2803media.fr
 * Text Domain:       wp-yrvp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-yrvp-activator.php
 */
function activate_wp_yrvp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-yrvp-activator.php';
	Wp_Yrvp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-yrvp-deactivator.php
 */
function deactivate_wp_yrvp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-yrvp-deactivator.php';
	Wp_Yrvp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_yrvp' );
register_deactivation_hook( __FILE__, 'deactivate_wp_yrvp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-yrvp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_yrvp() {

	$plugin = new Wp_Yrvp();
	$plugin->run();

}
run_wp_yrvp();
