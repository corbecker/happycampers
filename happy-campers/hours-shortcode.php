<?php

function hours_shortcode()
{

    return '<div class="hoursBox">
              <div class="hoursContent">
                <div class="hoursTitle">
                  <h2>Opening Hours</h2>
                </div>
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
