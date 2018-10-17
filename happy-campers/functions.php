<?php
function happy_campers_setup()
{
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
        'menu-1' => esc_html__('Primary', 'happy-campers'),
        'menu-2' => esc_html__('Services', 'happy-campers'),
        'menu-3' => esc_html__('About', 'happy-campers'),
        )
    );
}
add_action('after_setup_theme', 'happy_campers_setup');

/**
 * Enqueue scripts and styles.
 */
function happy_campers_scripts()
{
    wp_enqueue_style('load-fa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    wp_enqueue_style('happy-campers-style', get_stylesheet_uri());

    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/parallax.js', array(), true, true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), true, true);
}

add_action('wp_enqueue_scripts', 'happy_campers_scripts');

function widgetsInit()
{
    register_sidebar(array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ));
    register_sidebar(array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ));
    register_sidebar(array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ));


    register_sidebar(array(
    'name' => 'General Sidebar 1',
    'id' => 'general-sidebar-1',
    'description' => 'Appears in the right hand sidebar.',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'widgetsInit');
