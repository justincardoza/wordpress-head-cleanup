<?php
/**
 * Plugin Name: head-cleanup
 * Plugin URI: https://justincardoza.com/software/head-cleanup/
 * Description: Cleans up some of the WordPress head elements that are (for my purposes, anyway) unneeded. This should improve bandwidth usage, load times, and site security.
 * License: ISC
 * License URI: https://opensource.org/licenses/ISC
 * Author: Justin Cardoza
 * Author URI: https://justincardoza.com/
 */

function justincardoza_head_cleanup_plugin() {
	//I don't need REST API components in the header of every page.
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	
	//Remove the <meta generator> tag so we're not broadcasting our WordPress version.
	remove_action( 'wp_head', 'wp_generator' );
	
	//This apparently is only needed for Windows Live Writer publishing. It does not spark joy.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	
	//Also only used by desktop publishing software.
	remove_action( 'wp_head', 'rsd_link' );
	
	//We can still use shortlinks without the header tag.
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
	
	//Remove adjacent post links in the header.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
	
	//This is just for prefetch hints which we really don't need.
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
	
	//I don't know about you, but I'm not planning to use emojis on my portfolio website.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

add_action( 'init', 'justincardoza_head_cleanup_plugin' );
