<?php

/*
Plugin Name: Advanced Custom Fields: Fontello
Plugin URI: http://www.aaronolin.com
Description: Adds a Fontello Custom Field to be used site wide.
Version: 1.0.0
Author: Aaron Olin
Author URI: http://wwww.aaronolin.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-fontello', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_fontello( $version ) {
	
	include_once('acf-fontello-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_fontello');	




// 3. Include field type for ACF4
function register_fields_fontello() {
	
	include_once('acf-fontello-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_fontello');	



	
?>