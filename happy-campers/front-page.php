<?php
/* Template Name: Home Page*/
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
  <div class="keyart_layer " id="keyart-7" data-speed="100"></div>
  <div class="" id="logo" data-speed="100"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"/></div>
</div>
<div class="cta-section">
  <div class="flex-grid container">
    <div class="col vertical-row btn-area">
      <a href="<?php echo get_site_url();?>/take-a-tour/" class="btn">Take a Tour</a>
      <a href="<?php echo get_site_url();?>/make-a-reservation/" class="btn">Reservations</a>
    </div>
    <div class="col location">
      <div class="icon"><i class="fa fa-map-pin"></i></div>
      <a href="https://goo.gl/maps/8UiK4yK71QE2" target="_blank">
        <div>
          <span>Happy Campers Pet Hotel</span>
          <br>
          <span>Church Rd Staplestown</span>
          <br>
          <span>Carlow, Ireland, R93XT38</span>
          <br>
          <span>085 2432902</span>
          <br>
          <span class="directions">Directions</span>
        </div>
      </a>
    </div>
    <div class="col hours">
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
          <td>8-6</td>
          <td>8-6</td>
          <td>8-6</td>
          <td>8-6</td>
          <td>8-6</td>
          <td>9-6</td>
          <td>4-5</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="main">
  <section class="offset flex-grid container">
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Dog Boarding</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-boarding-kennel-ireland.jpg" alt="dog boarding kennel ireland"/>
        <p>Our overnight boarding service provides a home from home for your furry friend. Unlike traditional dog kennels, most of our guests sleep together. It's a doggy slumber party.</p>
        <a href='<?php echo get_site_url();?>/dog-boarding/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Dog Daycare</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/doggy-daycare-carlow.jpg" alt="dog daycare services carlow"/>
        <p>Doggy Daycare is the answer for pet parents that don't want their pup left at home alone. Our dog daycare service ensures your dog gets the exercise, and socialization they need.</p>
        <a href='<?php echo get_site_url();?>/dog-daycare/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Dog Grooming</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-grooming-carlow.jpg" alt="dog grooming services carlow"/>
        <p>Treat your pup to a spa day! Our in-house dog grooming service offers bathing, trimming, and styling. Get summer ready with a trim  or freshen up with a wash during daycare.</p>
        <a href='<?php echo get_site_url();?>/dog-grooming/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
  </section>
  <section class="card offset">
    <div class="flex-grid container">
      <h1 class="paw-title">Pet Hotel Ireland</h1>
      <div class="vertical-row thin">
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-daycare-facility-carlow.jpg" alt="dog kennel ireland"/>
        <h3 class="left">A Home from Home for your Precious Pet</h3>
        <p>Happy Campers offers premium pet care services. Our different approach to doggy care gives our campers the opportunity to mix with similar pup pals. Letting them play the day away, staying healthy and happy. We are proud to offer themed indoor playrooms and spacious paved/grassy outdoor areas for them to stretch their legs and get some fresh air.</p>
        <p>We are conveniently located just outside Carlow town servicing the greater Carlow area for our doggy daycare service. A minutes drive from the M9 motorway, one hour from Dublin and Waterford makes us a great doggy holiday destination for the Leinster region.</p>
        <div class="well">
          <p>Ready for a barking good time? Call us at <a href="tel:(00353)852432902"><span>085 2432902</span></a> to find out more about our pet care services.</p>
          <a href="<?php echo get_site_url();?>/make-a-reservation/" class="btn">FREE TRIAL DAY</a>
        </div>
      </div>
      <div class="vertical-row">
        <h2 class="paw-title">Testimonials</h2>
        <div class="flex-grid">
          <blockquote>
            <div class="stars">★★★★★</div>
            <div class="testimonial">
              <p>What can I say only this is the most amazing Kennels there is. I had my dog max staying for 5 days while I was away. He loved it. He was so happy going in and coming out. I had such a relaxing holiday knowing he was being so well cared for. Thank you ladies. Highly recommend.</p>
            </div>
            <div class="author"><cite>- Dee Comerford</cite></div>
          </blockquote>
          <blockquote>
            <div class="stars">★★★★★</div>
            <div class="testimonial">
              <p>My dog loves This place! We found the hotel 8years ago when Rasti was a puppy and from that Day thats the only place I trust and I leave my dog in when I am away on Holidays! Highly recommend!!!!</p>
            </div>
            <div class="author"><cite>- Magdalena Pydych</cite></div>
          </blockquote>
          <blockquote>
            <div class="stars">★★★★★</div>
            <div class="testimonial">
              <p>Our boy Frodo has been staying with Aleida and her family for day care and overnight stays since last February. He loves the kennels and we are so happy with the treatment he gets there. A real home away from home.</p>
            </div>
            <cite>- Ruth Nevin-Shine</cite>
          </blockquote>
        </div>
        <p class="sub">Check out more reviews on our facebook page.</p>
        <div><a href="https://www.facebook.com/happycamperspethotel/reviews/" class="btn center">Read Reviews</a></div>
      </div>
    </div>
  </section>
</div>
<?php
get_footer();