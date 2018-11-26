<?php

function location_shortcode($atts)
{
    $a = shortcode_atts(array(
      'class' => '',
    ), $atts);

    return '<div class="location ' . $a["class"] . '">
              <div class="icon"><i class="fa fa-map-pin"></i></div>
              <a href="https://goo.gl/maps/8UiK4yK71QE2" target="_blank">
                <div>
                  <span>Happy Campers Pet Hotel</span>
                  <br>
                  <span>Church Rd Staplestown</span>
                  <br>
                  <span>Carlow, Ireland</span>
                  <br>
                  <span class="directions">Directions</span>
                </div>
              </a>
            </div>';
}

remove_filter('the_content', 'wpautop');
add_shortcode('location', 'location_shortcode');
