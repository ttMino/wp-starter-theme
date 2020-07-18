<?php
/**
 * starter-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter-theme
 */

function add_theme_scripts() {
   	//sass || css
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/scss/styles.css', array(), '1.1', 'all');

   	//js
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
   
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_filter('use_block_editor_for_post', '__return_false', 10);