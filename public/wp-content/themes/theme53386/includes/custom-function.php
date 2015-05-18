<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	add_filter( 'cherry_stickmenu_selector', 'cherry_change_selector' );
	function cherry_change_selector($selector) {
		$selector = 'header .nav-wrap';
		return $selector;
	}
	add_filter( 'cherry_slider_params', 'child_slider_params' );
	function child_slider_params( $params ) {
		$params['minHeight'] = '"50px"';
		$params['height'] = '"47.45%"';
	return $params;
	}
	
	function my_mce4_options( $init ) {
	$default_colours = '
	    "000000", "Black",        "993300", "Burnt orange", "333300", "Dark olive",   "003300", "Dark green",   "003366", "Dark azure",   "000080", "Navy Blue",      "333399", "Indigo",       "333333", "Very dark gray", 
	    "800000", "Maroon",       "FF6600", "Orange",       "808000", "Olive",        "008000", "Green",        "008080", "Teal",         "0000FF", "Blue",           "666699", "Grayish blue", "808080", "Gray", 
	    "FF0000", "Red",          "FF9900", "Amber",        "99CC00", "Yellow green", "339966", "Sea green",    "33CCCC", "Turquoise",    "3366FF", "Royal blue",     "800080", "Purple",       "999999", "Medium gray", 
	    "FF00FF", "Magenta",      "FFCC00", "Gold",         "FFFF00", "Yellow",       "00FF00", "Lime",         "00FFFF", "Aqua",         "00CCFF", "Sky blue",       "993366", "Brown",        "C0C0C0", "Silver", 
	    "FF99CC", "Pink",         "FFCC99", "Peach",        "FFFF99", "Light yellow", "CCFFCC", "Pale green",   "CCFFFF", "Pale cyan",    "99CCFF", "Light sky blue", "CC99FF", "Plum",         "FFFFFF", "White"
	';
	$custom_colours = '
	    "7AA032", "Blue Template",
	';
	$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
	$init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
	return $init;
	}
	add_filter('tiny_mce_before_init', 'my_mce4_options');

	// Loads custom scripts.
	require_once( 'custom-js.php' );
	require_once( 'shortcodes/posts-grid.php' );
	require_once( 'shortcodes/service-box.php' );
	require_once( 'shortcodes/post-cycle.php' );
	require_once( 'shortcodes/mini-posts-list.php' );
?>