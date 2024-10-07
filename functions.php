<?php

function my_custom_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// custom menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

function my_custom_sidebar() {
    register_sidebar(
        array(
            'name'          => __( 'My Custom Sidebar', 'theme_text_domain' ),
            'id'            => 'custom-sidebar-id',
            'description'   => __( 'A short description of the sidebar.', 'theme_text_domain' ),
            'before_widget' => '<div class="widget-area">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

function mytheme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');




?>
