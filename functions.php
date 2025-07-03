<?php
function novel_office_enqueue_scripts() {
    wp_enqueue_style('novel-office-style', get_stylesheet_uri());
    wp_enqueue_style('novel-office-custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('novel-office-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'novel_office_enqueue_scripts');

function novel_office_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'novel-office'),
    ));
}
add_action('after_setup_theme', 'novel_office_setup');

// Custom Post Type: Testimonials
function novel_office_testimonials_cpt() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'novel_office_testimonials_cpt');

// Register navigation menu
function register_custom_menus() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_custom_menus');

function setup_default_main_menu() {
    // Check if the menu already exists
    $menu_name = 'Main Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    // If it doesn't exist, create it
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        // Add pages/links
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Home'),
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Solutions'),
            'menu-item-url' => home_url('/solutions'),
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Locations'),
            'menu-item-url' => home_url('/locations'),
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Investments'),
            'menu-item-url' => home_url('/investments'),
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Contact Us'),
            'menu-item-url' => home_url('/contact'),
            'menu-item-status' => 'publish'
        ));

        // Assign it to theme location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['main-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_setup_theme', 'setup_default_main_menu');
