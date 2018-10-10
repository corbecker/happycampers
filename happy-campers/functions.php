<?php
function happy_campers_setup()
{
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
        'menu-1' => esc_html__('Primary', 'happy-campers'),
        )
    );
}
add_action('after_setup_theme', 'happy_campers_setup');
/**
 * Enqueue scripts and styles.
 */
function happy_campers_scripts()
{
    wp_enqueue_style('happy-campers-style', get_stylesheet_uri());

    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/parallax.js', array(), true);
}
add_action('wp_enqueue_scripts', 'happy_campers_scripts');
