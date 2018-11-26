<?php
get_header();
?>
<div class="keyart" id="parallax">
    <div class="mobile-bg"></div>
    <div class="keyart_layer parallax" id="keyart-0" data-speed="2"></div>
    <div class="keyart_layer parallax" id="keyart-1" data-speed="5"></div>
    <div class="keyart_layer parallax" id="keyart-2" data-speed="11"></div>
    <div class="keyart_layer parallax" id="keyart-3" data-speed="16"></div>
    <div class="keyart_layer parallax" id="keyart-4" data-speed="26"></div>
    <div class="keyart_layer parallax" id="keyart-5" data-speed="36"></div>
    <div class="keyart_layer parallax" id="keyart-6" data-speed="49"></div>
    <div class="keyart_layer parallax" id="keyart-7" data-speed="69"></div>
    <div class="keyart_layer " id="keyart-8" data-speed="100"></div>
    <div class="" id="logo" data-speed="100"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"/></div>
</div>
<div class="cta-section">
    <div class="cta-section container">
        <div class="cta-area btn-area">
            <a href="https://happycamperspetcamp.ie/about/take-a-tour/">
                <button class="btn">Take a Tour</button>
            </a>
            <a href="<?php echo get_site_url();?>/reservations/">
                <button class="btn">Reservations</button>
            </a>
        </div>
        <div class="cta-area location">
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
        </div>
        <div class="cta-area hours">
            <table>
              <colgroup>
                <col id="mon">
                <col id="tue">
                <col id="wed">
                <col id="thu">
                <col id="fri">
                <col id="sat">
                <col id="sun">
              </colgroup>
              <tr>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
              </tr>

              <tr class="opening">
                <td>8am - 6pm</td>
                <td>8am - 6pm</td>
                <td>8am - 6pm</td>
                <td>8am - 6pm</td>
                <td>8am - 6pm</td>
                <td>8am - 6pm</td>
                <td>4pm - 5pm</td>
              </tr>
            </table>
          </div>
    </div>
</div>
<div class="main">
    <section class="features container">
            <div class="feature">
                <h2>Dog Boarding</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/boarding_2.jpg" alt="dog_boarding"/>
                <p>Our overnight boarding service provides a home from home for your furry friend. Unlike traditional dog kennels, most of our guests sleep together. It's like a doggy slumber party.</p>
                <a href='https://happycamperspetcamp.ie/services/dog-boarding/'>
                  <button class="btn-clear">Learn more  <i class="fa fa-arrow-right"></i></button>
                </a>
            </div>
            <div class="feature">
                <h2>Dog Daycare</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/daycare_2.jpg" alt="dog_daycare"/>
                <p>Doggy Daycare is the answer for pet parents that don't want their pup left at home alone. Our dog daycare service ensures your dog is gets the exercise, and socialization they need.</p>
                <a href='https://happycamperspetcamp.ie/services/dog-daycare/'>
                  <button class="btn-clear">Learn more  <i class="fa fa-arrow-right"></i></button>
                </a>
            </div>
            <div class="feature">
                <h2>Dog Grooming</h2>
                <img src="<?php bloginfo('template_directory'); ?>/images/grooming.jpg" alt="dog_grooming"/>
                <p>Treat your pup to a spa day! Our in-house dog grooming service offers bathing, trimming, and styling. Get summer ready with a trim  or freshen up with a wash during daycare.</p> 
                <a href='https://happycamperspetcamp.ie/services/dog-grooming/'>
                  <button class="btn-clear">Learn more  <i class="fa fa-arrow-right"></i></button>
                </a>
            </div>
    </section>
    <section class="testimonials-container container">
        <h2>Testimonials</h2>
        <div class="card testimonials">
              <blockquote>
                  <div class="stars">
                      ★★★★★
                  </div>
                  <div class="testimonial">
                      <p>What can I say only this is the most amazing Kennels there is. I had my dog max staying for 5 days while I was away. He loved it. He was so happy going in and coming out. I had such a relaxing holiday knowing he was being so well cared for. Thank you ladies. Highly recommend.</p>
                  </div>
                  <div class="author">
                      <cite>- Dee Comerford</cite>
                  </div>
              </blockquote>
              <blockquote>
                  <div class="stars">
                      ★★★★★
                  </div>
                  <div class="testimonial">
                      <p>My dog loves This place! We found the hotel 8years ago when Rasti was a puppy and from that Day thats the only place I trust and I leave my dog in when I am away on Holidays! Highly recommend!!!!</p>
                  </div>
                  <div class="author">
                      <cite>- Magdalena Pydych</cite>
                  </div>
              </blockquote>
              <blockquote>
                  <div class="stars">
                      ★★★★★
                  </div>
                  <div class="testimonial">
                      <p>Our boy Frodo has been staying with Aleida and her family for day care and overnight stays since last February. He loves the kennels and we are so happy with the treatment he gets there. A real home away from home.</p>
                  </div>
                  <div class="author">
                      <cite>- Ruth Nevin-Shine</cite>
                  </div>
              </blockquote>
        </div>
    </section>
</div>
<?php
get_footer();
