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

// use the WP function to enqueue the script. https://developer.wordpress.org/reference/functions/wp_enqueue_script/
//remove this enqueue and the folder/file if you do not need this
wp_enqueue_script('jumpoff_script', plugins_url('js/script.js', dirname(__FILE__)));

// use the WP function to enqueue the style. https://developer.wordpress.org/reference/functions/wp_enqueue_style/
//remove this enqueue and the folder/file if you do not need this
wp_enqueue_style('jumpoff_style', plugins_url('style/style.csss', dirname(__FILE__)));

//include the file for a WP API endpoint. requires WP 4.4 or higher. http://wp-api.org/guides/extending.html
//remove this include and the folder/file if you do not need an API endpoint
include('api/routes.php');

?>
