<?php

function hours_shortcode($atts)
{
    $a = shortcode_atts(array(
      'class' => '',
    ), $atts);

    return '<div class="hoursBox ' . $a["class"] . '">
              <div class="hoursContent">
                <div class="hours">
                  <ul>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                    <li>Sunday</li>
                  </ul>
                  <ul>
                    <li>8am - 6pm</li>
                    <li>8am - 6pm</li>
                    <li>8am - 6pm</li>
                    <li>8am - 6pm</li>
                    <li>8am - 6pm</li>
                    <li>8am - 6pm</li>
                    <li>4pm - 5pm</li>
                  </ul>
                </div>
            </div>
            </div>';
}

remove_filter('the_content', 'wpautop');
add_shortcode('hours', 'hours_shortcode');
