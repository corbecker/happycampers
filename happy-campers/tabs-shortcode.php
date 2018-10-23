<?php

function tabs_container_shortcode($atts, $content = null)
{
    $a = shortcode_atts(array(
    'class' => 'tabs',
    ), $atts);

    return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

function tab_label_shortcode($atts, $content = null)
{
    $a = shortcode_atts(array(
    'id' => 'tabone',
    'checked' => null
    ), $atts);

    return '<input id="' . esc_attr($a['id']) . '" '. esc_attr($a['checked']) .' name="tabs" type="radio" /><label for="' . esc_attr($a['id']) . '">' . $content . '</label>';
}

function tab_shortcode($atts, $content = null)
{
    $a = shortcode_atts(array(
    'class' => 'tab',
    ), $atts);

    return '<div class="' . esc_attr($a['class']) . '">' . $content . '</div>';
}

remove_filter('the_content', 'wpautop');
add_shortcode('tab_label', 'tab_label_shortcode');
add_shortcode('tabs', 'tabs_container_shortcode');
add_shortcode('tab', 'tab_shortcode');
