<?php

// Global version tracker.
// Add extensions of the University Center project model.
include_once( __DIR__ . '/includes/cmec-uc-project.php' );
include_once( 'includes/cmec-shortcodes.php' ); // Handle custom shortcodes for CMEC.

add_action( 'wp_enqueue_scripts', 'cleantech_enqueue_scripts' );
/**
 * Enqueue the script required by the Cleantech theme.
 */
function cleantech_enqueue_scripts() {
	// Script only contains document.ready calls, load in the footer.
	wp_enqueue_script( 'cleantech-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), spine_get_script_version(), true );
}

add_action( 'spine_pre_jacket_html', 'cleantech_pre_jacket_html' );
function cleantech_pre_jacket_html() {
	echo '<div class="redTrim"></div>';
}