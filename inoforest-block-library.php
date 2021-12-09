<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Forbidden' ); }
/**
 * Plugin Name: Inoforest Block Library
 * Plugin URI: https://github.com/hlaporthein
 * Description: Inoforest Block Library enable for page and single page, remove embed.js
 * Version: 1.0
 * Author: Hla Por Thein
 * Author URI: http://hlaporthein.me
 * License: GPL2+
 * Text Domain: vd
 */

//Remove Gutenberg Block Library CSS
function inoforest_remove_wp_block_library_css(){
   if ( is_front_page() || is_home() || is_archive()  ) {
      wp_dequeue_style( 'wp-block-library' );
      wp_dequeue_style( 'wp-block-library-theme' );
      wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
   }
} 
add_action( 'wp_enqueue_scripts', 'inoforest_remove_wp_block_library_css', 100 );

/**
 * Deregister Scripts For embed.js
 */
function inoforest_embeded_deregister_scripts(){
   wp_deregister_script( 'wp-embed' );
 }
 add_action( 'wp_enqueue_scripts', 'inoforest_embeded_deregister_scripts' );