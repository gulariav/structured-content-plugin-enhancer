<?php 
/*
Plugin Name: Structured Content Plugin Enhancer
Description: This plugin is an extension of "Structured Content (JSON-LD) #wpsc" to change its layout to Collapsable section by adding this css class to it "collapsible-faq". Also provide options to make any div collapsible. For Documentation, please visit plugin site.
Plugin URI: http://github.com/gulariav/
Author: Vishal Gularia
Author URI: http://github.com/gulariav/
Requires at least: 3.5
Tested up to: 5.0.3
Version: 1.0.1
License: GPL v2 or later
package scpe
*/


// Hook to the 'init' action, which is called after WordPress is finished loading the core code
add_action( 'init', 'add_scpe_scripts' );


// Remove the 'add_My_Meta_Tags' function from the wp_head action hook
function add_scpe_scripts()
{
	//Register the Javascript, dependency with jquery
	wp_enqueue_script( 'scpe-script', plugin_dir_url( __FILE__ ) . 'js/scpe.js', array('jquery'), true );

	//Register the Javascript, dependency Font awesome 5

	$fontawesome_version_available = 5; 

	switch ($fontawesome_version_available == 5) 
	{
		case 5:
			//Include css based on Font awesome 4.
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
 
