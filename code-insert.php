<?php

/*  this file's purpose is for allowing the plugin access to header, body, and footer
 *  hooks to insert code like Facebook Pixel and Google Tag Manager
 */


 // add code to header
 add_action('wp_head', 'ipoint_add_code_to_header');

function ipoint_add_code_to_header() {
  // insert code here using echo or in between the closing and opening php tags
  echo '<!-- echo into header -->';
  ?>
  <!-- code placed directly in header -->
  <?php
}


// add code to body
add_action('wp_body_open', 'ipoint_add_code_to_body');

function ipoint_add_code_to_body() {
 // insert code here using echo or in between the closing and opening php tags
 echo '<!-- echo into body -->';
 ?>
 <!-- code placed directly in body -->
 <?php
}


// add code to footer
add_action('wp_footer', 'ipoint_add_code_to_footer');

function ipoint_add_code_to_footer() {
 // insert code here using echo or in between the closing and opening php tags
 echo '<!-- echo into footer -->';
 ?>
 <!-- code placed directly in footer -->
 <?php
}
