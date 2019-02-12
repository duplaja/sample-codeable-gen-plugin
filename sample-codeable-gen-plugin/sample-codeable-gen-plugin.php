<?php
/*
Plugin Name: Sample Generated Plugin
Plugin URI: https://codeable.io/developers/dan-dulaney/
Description: Sample Plugin Generated with Codeable Pluginception fork
Version: 0.1
Author: Dan Dulaney
Author URI: https://codeable.io/developers/dan-dulaney/
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

    Copyright 2019 by Dan Dulaney <dan.dulaney07@gmail.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'sample_prefix_codeable_enqueue_styles' ) ) {
	/**
	 * Enqueues main plugin style.
	 *
	 * @param
	 * @return
	 */
	add_action( 'wp_enqueue_scripts', 'sample_prefix_codeable_enqueue_styles' );
	function sample_prefix_codeable_enqueue_styles() {
		wp_enqueue_style( 'sample-codeable-gen-plugin-main-style', plugin_dir_url( __FILE__ ) . 'css/main.css', array(), '0.1' ); 
		
	}
}


	
if ( ! function_exists( 'sample_prefix_codeable_enqueue_scripts' ) ) {
	/**
	 * Enqueues main plugin script.
	 *
	 * @param
	 * @return
	 */
	add_action( 'wp_enqueue_scripts', 'sample_prefix_codeable_enqueue_scripts' );
	function sample_prefix_codeable_enqueue_scripts() {
		wp_enqueue_script( 'sample-codeable-gen-plugin-main-script', plugin_dir_url( __FILE__ ) . 'js/main.js', array(), '0.1' ); 
		
	}
}


	
if ( ! function_exists( 'sample_prefix_codeable_example_function' ) ) {
	/**
	 * Sample Function to show best practices for checking exists. Remove or modify.
	 *
	 * @param
	 * @return
	 */
	add_action( 'wp_head', 'sample_prefix_codeable_example_function' );
	function sample_prefix_codeable_example_function() {

		echo '<!-- Pluginception Codeable SpinUp demo function is active  -->';
		
	}
}

