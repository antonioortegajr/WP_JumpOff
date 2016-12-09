<?php
/*
Plugin Name: WP Jump Off
Plugin URI: http://antonioortegajr.com
Description: This plugin creates an options page, an enqueued script, an enqueued style,
registers a short code, a hourly WP cron job, and a custom WP API route.
Use or remove anything you don't want in your plugin.
Version: 1.0.0
Author: Antonio Ortega Jr
Author URI: http://antonioortegajr.com
License: GPL2
*/

// use the WP function to enqueue the script. //https://developer.wordpress.org/reference/functions/wp_enqueue_script/

//remove these enqueues and the folder/file if you do not need these

function wp_jump_off_script() {
	wp_enqueue_script( 'wp_jump_off_js', plugins_url('WP_JumpOff-master/js/script.js', dirname(__FILE__)) );
}

function wp_jump_off_enqueue_style() {
	wp_enqueue_style( 'wp_jump_off_css', plugins_url('WP_JumpOff-master/style/style.css', dirname(__FILE__)) );
}


add_action( 'wp_enqueue_scripts', 'wp_jump_off_enqueue_script' );
add_action( 'wp_enqueue_scripts', 'wp_jump_off_enqueue_style' );


//include the file for a WP API endpoint. requires WP 4.4 or higher. http://wp-api.org/guides/extending.html

//remove this if you do not need an API endpoint
add_action( 'rest_api_init', function () {
  //set up routes
    register_rest_route( 'wp_jump_off/v1/', 'route', array(
        'methods' => 'GET',
        'callback' => 'wp_jump_off_func',
    ) );

} );


//WP API Return
function wp_jump_off_func( WP_REST_Request $request ){
return '{"example":"test"}';
}

//Short Code
function my_own_short_code() {
	echo 'YOU added this with a short code.';

}
add_shortcode('add_shorty','my_own_short_code');


?>
