<?php 
/*
Plugin Name: widgetkits
Plugin URI: https://github.com/masumskaib396/widgetkits
Description: All in one Sidebar widget solution
Version: 1.0.0
Author: msakib
Author URI: https://profiles.wordpress.org/msakib/
License: GPLv2 or later
Text Domain: widgetkits
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Set plugin version constant.
define( 'WIGETKITS_VERSION', '1.0.0');

// Plugin Function Folder Path
define( 'WIGETKITS_WIDGET_INC', plugin_dir_path( __FILE__ ) . 'inc/' );

// Plugin Widget Folder Path
define( 'WIGETKITS_WIDGET_DIR', plugin_dir_path( __FILE__ ) . 'widgets/' );

// Assets Folder URL
define( 'WIGETKITS_ASSETS_PUBLIC', plugins_url( 'assets', __FILE__ ) );



require_once(WIGETKITS_WIDGET_DIR. 'widgetkits-about.php' );

require_once(WIGETKITS_WIDGET_INC . 'function.php');



function wigetkit_scripts(){
	//icon css
    wp_enqueue_style( 'themify-icons', WIGETKITS_ASSETS_PUBLIC . '/vendor/themify-icons/themify-icons.css', array(), WIGETKITS_VERSION );

    //main css
    wp_enqueue_style( 'widgetkit-css', WIGETKITS_ASSETS_PUBLIC . '/css/widget-style.css', array(), WIGETKITS_VERSION );

}
add_action('wp_enqueue_scripts', 'wigetkit_scripts');

