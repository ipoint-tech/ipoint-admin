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
  <!-- code placed directly in header - replace this line with GTM Code -->
  <?php
}


/*
** for this section, there will be different options based on the theme being used, as wp_body_open is not fully adopted in all themes
**
** for xtheme use: x_before_site_begin
** for enfold use: ava_after_body_opening_tag
**
** (replacing wp_body_open)
*/

// add code to body
add_action('wp_body_open', 'ipoint_add_code_to_body');

function ipoint_add_code_to_body() {
 // insert code here using echo or in between the closing and opening php tags
 echo '<!-- echo into body -->';
 ?>
 <!-- code placed directly in body - replace this line with GTM Code -->
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
