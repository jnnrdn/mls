<?php
/*
Plugin Name: Plugin for Logo Slider by Jenny Ryd&eacute;n.
Plugin URI: http://wordpress.org/plugins/simple-social-icons/
Description: A simple, CSS and icon font driven social icons widget.
Author: Jenny Ryd&eacute;n
Author URI: http://www.jennyryden.com/

Version: 1.0

Text Domain: my-logo-slider
Domain Path: /languages

License: GNU General Public License v2.0 (or later)
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Creating the widget
class mls_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      // Base ID of your widget
      'mls_widget',

      // Widget name will appear in UI
      __('My Logo Slider', 'mls_widget_domain'),

      // Widget description
      array( 'description' => __( 'Widget for logo slider.', 'mls_widget_domain' ), )
    );
  }
}

// Register and load the widget
function mls_load_widget() {
  register_widget( 'mls_widget' );
}
add_action( 'widgets_init', 'mls_load_widget' );
