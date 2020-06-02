<?php

/* attach/add assets file */
function simple_basic_theme_load_scripts(){

	// attach theme.css
	wp_enqueue_style("theme-css", get_template_directory_uri()."/assets/css/theme.css", array(), "1.0", "all");

	// style.css
	wp_enqueue_style("theme-style", get_stylesheet_uri(), array(), "1.0", "all");

	// script.js
	wp_enqueue_script("script-js", get_template_directory_uri()."/assets/js/script.js", array("jquery"), "1.0", true);
}

add_action("wp_enqueue_scripts", "simple_basic_theme_load_scripts");

/*register nav menu*/
function simple_basic_theme_nav_config(){

  register_nav_menus(array(
  	// menu_id/location_id => menu name
  	"theme_primary_menu" => "Primary Menu SBT",
  	"theme_footer_menu" => "Footer Menu SBT",
  	"theme_sidebar_menu" => "Left Sidebar Menu SBT"
  ));
}

add_action("after_setup_theme", "simple_basic_theme_nav_config");
















