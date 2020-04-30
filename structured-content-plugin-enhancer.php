<?php 
/*
Plugin Name: Structured Content Plugin Enhancer
Description: This plugin is an extension of "Structured Content (JSON-LD) #wpsc" to change its layout to Collapsable section by adding this css class to it "collapsible-faq". Also provide options to make any div collapsible. For Documentation, Please visit Plugin site.
Plugin URI: https://github.com/gulariav/structured-content-plugin-enhancer
Author: Vishal Gularia
Author URI: https://github.com/gulariav/
Requires at least: 3.5
Tested up to: 5.0.3
Version: 1.0.4
License: GPL v2 or later
package scpe
*/


// Load the plugin scripts
add_action( 'wp_enqueue_scripts', 'add_scpe_scripts', 99 );


// Enqueue plugin scripts and styles across the site. 
function add_scpe_scripts()
{
	// Register the Javascript, dependency with jquery
	wp_enqueue_script( 'scpe-script', plugin_dir_url( __FILE__ ) . 'js/scpe.js', array('jquery'), '', true );


	//Register the stylesheet for exapand icon, dependency Font awesome 5 or less.
	$fontawesome_version_available = 4; 

	switch ($fontawesome_version_available) 
	{
		case 5:
			//Include css based on Font awesome 5.
			wp_enqueue_style('scpe-fa5', plugin_dir_url( __FILE__ ) . 'css/scpe_fa5.css');
			break;

		case 4:
			//Include css based on Font awesome 4.
			wp_enqueue_style('scpe-fa4', plugin_dir_url( __FILE__ ) . 'css/scpe_fa4.css');
			break;	
		
		default:
			//Include css without font awesome, based on background images.
			wp_enqueue_style('scpe-no-fa', plugin_dir_url( __FILE__ ) . 'css/scpe_no_fa.css');
			break;
	}

}
 
