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
        "sbt_secondary_menu_id" => "SBT Sidebar",
    ));

    // register theme support
    add_theme_support("post-thumbnails");

    add_theme_support("woocommerce", array(
        "thumbnail_image_width" => 150,
        "single_image_width" => 200,
        "product_grid" => array(
            "default_columns" => 10,
            "min_columns" => 2,
            "max_columns" => 3,
        ),
    ));

    add_theme_support("custom-logo", [
        "height" => 90,
        "width" => 90,
        "flex_height" => true,
        "flex_width" => true,
    ]);

    // product thumbnail effect support
    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");
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

if (class_exists("Woocommerce")) {

    include_once 'include/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment');

function simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

    ?>
    <span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
$fragments['span.items-count'] = ob_get_clean();
    return $fragments;
}

function simple_bootstrap_theme_load_wp_customizer($wp_customize)
{
    /// customizer code

    // adding section
    $wp_customize->add_section("sec_copyright", array(
        "title" => "Copyright Section",
        "description" => "This is a copyright section",
    ));

    // adding settings/field
    $wp_customize->add_setting("set_copyright", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    // add control
    $wp_customize->add_control("set_copyright", array(
        "label" => "Copyright",
        "description" => "Please fill the copyright text",
        "section" => "sec_copyright",
        "type" => "text",
    ));

    /* section of new arrival / popularity control limit and columns */

    // adding section
    $wp_customize->add_section("sec_product_panel", array(
        "title" => "Product Panel Limit & Columns",
        "description" => "This is a section which is going to provide the controls for home page product panels",
    ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_limit", array(
            "label" => "New Arrival - Product Limit",
            "description" => "Please fill provide the limit of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_column", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_column", array(
            "label" => "New Arrival - Product Columns",
            "description" => "Please fill provide the columns of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));


        // adding settings/field
        $wp_customize->add_setting("set_popular_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_limit", array(
            "label" => "Popularity - Product Limit",
            "description" => "Please fill provide the limit of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_popular_columns", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_columns", array(
            "label" => "Popularity - Product Columns",
            "description" => "Please fill provide the columns of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));
}

add_action("customize_register", "simple_bootstrap_theme_load_wp_customizer");