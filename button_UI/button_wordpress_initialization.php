<?php 
/*
Plugin Name: Test-Button
*/

add_action('admin_head', 'datapress_buttons'); 

function datapress_buttons() {
	add_filter('mce_external_plugins', 'add_plugins');
	add_filter('mce_buttons', 'show_datapress_button');
	add_filter('mce_buttons_3', 'show_advanced_toolbar');
}

function add_plugins($plugin_array){
	$plugin_array['exhibit_button'] = plugins_url('/datapress_button_code.js', __FILE__); //exhibit_button is the plugin we're going to create
	$plugin_array['add_file'] = plugins_url('/add_file_button_code.js', __FILE__);
	return $plugin_array;
} //we need to store the js for the button in a file with the name datapress_button_code in the same file as this one

function show_datapress_button($buttons1){ //$buttons is an array of buttons that is passed when mce_buttons is called
	array_push($buttons1, 'exhibit_button'); //exhibit_button is the id of the button we're going to create
	return $buttons1;
}

function show_advanced_toolbar($buttons3) {
	array_push($buttons3, 'add_file');
	return $buttons3;
}

?>