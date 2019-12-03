<?php
/**
 * Plugin Name: iPoint Administration
 * Plugin URI: https://ipoint-tech.com
 * Description: Administration functions from iPoint Tech
 * Version: 1.1.1
 * Author: iPoint Technology
 * Author URI: https://ipoint-tech.com
 */

 /**
  *
  * Contributing Authors:
  * - Devin Egger
  *
  * Plugin Changelog
  *
  *  1.1.0  9/23/19  Plugin Created
  *  - added iPoint login screen customization
  *
  *  1.1.1  9/24/19  Code Inserter Added
  *  - added starting building block code for eventually adding code insert capabilites from the WP-Admin
  *
  *  1.1.2  12/3/17  Custom JS Added
  *  - added framework for inserting custom javascript and JQUERY using custom.js file
  *
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
