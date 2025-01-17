<?php
/**
 * Plugin Name: iPoint Administration
 * Plugin URI: https://ipoint-tech.com
 * Description: Administration functions from iPoint Tech
 * Version: 1.1.1
 * Author: iPoint Technology
 * Author URI: https://ipoint-tech.com
 */


// iPoint Login Screen Customization


// Add custom stylesheet style-login.css with the name of your custom CSS file
function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login',  plugins_url( '/css/login-style.css', __FILE__ ) );
}
//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );

/**
 * Enqueue a script with jQuery as a dependency.
 */
function ipoint_custom_scripts() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'ipoint_custom_scripts' );


// include code insert functions
require_once('code-insert.php');
require_once('helpers.php');
