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
  */




// iPoint Login Screen Customization


// Add custom stylesheet style-login.css with the name of your custom CSS file
function custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login',  plugins_url( '/css/login-style.css', __FILE__ ) );
}
//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'custom_login_stylesheet' );




// include code insert functions
require_once('code-insert.php');
