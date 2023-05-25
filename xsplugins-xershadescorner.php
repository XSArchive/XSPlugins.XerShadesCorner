<?php
/*
Plugin Name: XerShade's Plugins - XerShade's Corner
Plugin URI: https://github.com/XerShade/XSPlugins.XerShadesCorner
Description: A WordPress plugin that provides website specific code changes for 'xershade.ca'.
Author: XerShade
Author URI: https://www.xershade.ca/
Version: 1.0.0
*/

add_action( 'wp_enqueue_scripts', 'xsc_register_stylesheets', 100 );
function xsc_register_stylesheets() {
	wp_enqueue_style( 'xershades.corner.overrides', plugins_url( 'css/xershades.corner.overrides.css', __FILE__ ) );
}
