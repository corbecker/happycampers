<?php

function hours_shortcode($atts)
{
    $a = shortcode_atts(array(
      'class' => '',
    ), $atts);

    return '<div class="hoursBox ' . $a["class"] . '">
              <div class="hoursContent">
              <div class="address">
                <ul>
                    <li>
                      <i class="fa fa-map-pin"></i>
                    </li>
                    <li></li>
                    <li>
                      <i class="fa fa-phone"></i>
                    </li>
                </ul>
                <ul>
                  <li>Happy Campers</li>
                  <li>Staplestown Carlow</li>
                  <li><a href="tel:0875362781">0875362781</a></li>
                </ul>
              </div>
                <hr>
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
                    <li>8am - 4pm</li>
                    <li>Closed</li>
                  </ul>
                </div>
            </div>
            </div>';
}

remove_filter('the_content', 'wpautop');
add_shortcode('hours', 'hours_shortcode');
