<?php

function simple_bootstrap_theme_load_scripts()
{
    // css files
    wp_enqueue_style("bootstap", get_template_directory_uri() . "/assets/vendor/bootstrap/css/bootstrap.min.css", array(), "1.0", "all");

    wp_enqueue_style("blog-home", get_template_directory_uri() . "/assets/css/blog-home.css", array(), "1.0", "all");

    wp_enqueue_style("style", get_stylesheet_uri(), array(), "1.0", "all");

    // js files
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array("jquery"), "1.0", true);
}

add_action("wp_enqueue_scripts", "simple_bootstrap_theme_load_scripts");

// register nav menu
function simple_bootstrap_theme_nav_config()
{

    register_nav_menus(array(
        "sbt_primary_menu_id" => "SBT Primary Menu(Top Menu)",
        "sbt_secondary_menu_id" => "SBT Sidebar"
    ));

    // register theme support
    add_theme_support("post-thumbnails");

    add_theme_support("woocommerce", array(
        "thumbnail_image_width" => 150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3
        )
    ));
}

add_action("after_setup_theme", "simple_bootstrap_theme_nav_config");

// adding li class from here
function simple_bootstrap_theme_add_li_class($classes, $item, $args)
{

    $classes[] = "nav-item sbt-theme";
    return $classes;
}

add_filter("nav_menu_css_class", "simple_bootstrap_theme_add_li_class", 1, 3);

// adding class to anchor links
function simple_bootstrap_theme_add_anchor_links($classes, $item, $args)
{

    $classes['class'] = "nav-link sbt-link-class";
    return $classes;
}

add_filter("nav_menu_link_attributes", "simple_bootstrap_theme_add_anchor_links", 1, 3);

