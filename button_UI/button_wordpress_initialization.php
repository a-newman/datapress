<?php 
/*
Plugin Name: Custom Quick Styles
Plugin URI: http://www.speckygeek.com
Description: Add custom styles in your posts and pages content using TinyMCE WYSIWYG editor. The plugin adds a Styles dropdown menu in the visual post editor.
Based on TinyMCE Kit plug-in for WordPress
http://plugins.svn.wordpress.org/tinymce-advanced/branches/tinymce-kit/tinymce-kit.php
*/
/**
 * Apply styles to the visual editor
 */ 
add_filter('mce_css', 'tuts_mcekit_editor_style');
function tuts_mcekit_editor_style($url) {
 
    if ( !empty($url) )
        $url .= ',';
 
    // Retrieves the plugin directory URL
    // Change the path here if using different directories
    $url .= trailingslashit( plugin_dir_url(__FILE__) ) . '/editor-styles.css';
 
    return $url;
}
 
 
/**
 * Add styles/classes to the "Styles" drop-down
 */
add_filter( 'tiny_mce_before_init', 'tuts_mce_before_init' );
 
function tuts_mce_before_init( $settings ) {
 
    $style_formats = array(
        array(
            'title' => 'Download Link',
            'selector' => 'a',
            'classes' => 'download'
            ),
        array(
            'title' => 'Testimonial',
            'selector' => 'p',
            'classes' => 'testimonial',
        ),
        array(
            'title' => 'Warning Box',
            'block' => 'div',
            'classes' => 'warning box',
            'wrapper' => true
        ),
        array(
            'title' => 'Red Uppercase Text',
            'inline' => 'span',
            'styles' => array(
                'color' => '#ff0000',
                'fontWeight' => 'bold',
                'textTransform' => 'uppercase'
            )
        )
    );
 
    $settings['style_formats'] = json_encode( $style_formats );
 
    return $settings;
 
}
 
/* Learn TinyMCE style format options at http://www.tinymce.com/wiki.php/Configuration:formats */
 
/*
 * Add custom stylesheet to the website front-end with hook 'wp_enqueue_scripts'
 */
add_action('wp_enqueue_scripts', 'tuts_mcekit_editor_enqueue');
 
/*
 * Enqueue stylesheet, if it exists.
 */
function tuts_mcekit_editor_enqueue() {
  $StyleUrl = plugin_dir_url(__FILE__).'editor-styles.css'; // Customstyle.css is relative to the current file
  wp_enqueue_style( 'myCustomStyles', $StyleUrl );
}


add_action('admin_head', 'datapress_buttons'); 

function datapress_buttons() {
	add_filter('mce_external_plugins', 'add_plugins');
	add_filter('mce_buttons', 'show_datapress_button');
	add_filter('mce_buttons_3', 'show_advanced_toolbar');
}

function add_plugins($plugin_array){
	wp_enqueue_style('test');
	$plugin_array['exhibit_button'] = plugins_url('/button.js', __FILE__); //exhibit_button is the plugin we're going to create
	$plugin_array['add_file'] = plugins_url('/button.js', __FILE__);
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