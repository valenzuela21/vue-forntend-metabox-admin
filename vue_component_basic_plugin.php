<?php
/*
Plugin Name:  Vue Component Example
Plugin URI:   https://www.creatives.com.co
Description:  Complement Vue Js Admin Metabox y Frontend Shortcode
Version:      0.1
Author:       David Fernando Valenzuela Pardo
Author URI:   https://www.creatives.com.co
License:
License URI:  https://www.creatives.com.co
Text Domain:
Domain Path:
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO: replace PLUGIN_NAME with yours
define( 'PLUGIN_NAME_FILE', __FILE__ );
define( 'PLUGIN_NAME_VERSION', '0.1.0.0' );



/* Shortcode Frontend */

require plugin_dir_path( PLUGIN_NAME_FILE ) . 'includes/shortcodes.php';

add_action( 'wp_enqueue_scripts', function() {
  wp_register_script(
    'vue-simple-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/simple-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
  wp_register_script(
    'vue-components-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/components-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
} );


/* Metaboxes Admin */

require plugin_dir_path( PLUGIN_NAME_FILE ) . 'includes/admin.php';

add_action( 'admin_enqueue_scripts', function() {
  wp_register_script(
    'vue-admin-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/admin-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );

} );







