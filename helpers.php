<?php

/*  
 *  this file's purpose is to provide useful helpers - like shortcodes - for theme development
 */


 // add page-title shortcode
 add_shortcode('page-title', 'page-title_function');

function page-title_function() {
  return get_the_title();
}

