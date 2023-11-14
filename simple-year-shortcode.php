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

define( 'SIMPLE_YEAR_SHORTCODE_VERSION', '1.0.0' );
define( 'SIMPLE_YEAR_SHORTCODE_ROOT', __FILE__ );
define( 'SIMPLE_YEAR_SHORTCODE_URL',  plugins_url( '/', SIMPLE_YEAR_SHORTCODE_ROOT ) );
define( 'SIMPLE_YEAR_SHORTCODE_PATH', plugin_dir_path( SIMPLE_YEAR_SHORTCODE_ROOT ) );
define( 'SIMPLE_YEAR_SHORTCODE_BASE', plugin_basename( SIMPLE_YEAR_SHORTCODE_ROOT ) );

// file require
require_once( SIMPLE_YEAR_SHORTCODE_PATH . 'inc/shortcode.php' );
require_once( SIMPLE_YEAR_SHORTCODE_PATH . 'inc/admin.php' );