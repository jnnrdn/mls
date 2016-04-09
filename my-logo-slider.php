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

add_action( 'widgets_init', 'mls_init' );

function mls_init() {
	register_widget( 'mls_widget' );
}

class mls_widget extends WP_Widget
{

    public function __construct()
    {
        // Basic widget details
	    $widget_details = array(
		'classname' => 'mls_widget',
		'description' => 'Creates a logo slider.'
);

parent::__construct( 'mls_widget', 'Logo Slider Widget', $widget_details );
    }

    public function widget( $args, $instance )
    {
        // Widget output in the front end
    }

    public function update( $new_instance, $old_instance ) {
        // Form saving logic - if needed
    }

    public function form( $instance ) {
        // Backend Form
    }
}
