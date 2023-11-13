<?php
/*
 * Plugin Name:       Simple Year Shortcode
 * Plugin URI:        https://iamashim.com/simple-year-shortcode/
 * Description:       Get the year, month, day as you want.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Ashim Kumar
 * Author URI:        https://iamashim.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       simple-shortcode
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// file require
require_once( plugin_dir_path( __FILE__ ) . 'inc/shortcode.php' );