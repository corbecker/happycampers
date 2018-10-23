<?php

function contact_shortcode($atts, $content = null)
{
    $a = shortcode_atts(array(
    'class' => 'contact',
    ), $atts);

    return '<div class="' . esc_attr($a['class']) . '">' . $content . '</div>';
}

remove_filter('the_content', 'wpautop');
add_shortcode('contact', 'contact_shortcode');
