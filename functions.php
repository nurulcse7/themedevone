<?php
/**
 * My Theme Function
 */

 // Theme Title 
 add_theme_support('title-tag');

 // Theme CSS and jQuery File Calling 
 function nurul_css_js_file_calling(){

 }
add_action( 'wp_enqueue', 'nurul_css_js_file_calling' );
