<?php
/* Template Name: Home Page*/
get_header();
get_header('parallax');
?>
<main class="main">
  <section class="offset flex-grid container">
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Pet Hotel</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-boarding-kennel-ireland.jpg" alt="happy campers pet hotel & boarding kennel ireland"/>
        <p>Happy Campers Pet Hotel offers a home from home for your furry friend. As such, we aren't like traditional dog kennels. Most of our guests sleep in groups. It's like a doggy sleepover!</p>
        <a href='<?php echo get_site_url();?>/dog-boarding/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Dog Day Care</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/doggy-daycare-carlow.jpg" alt="happy campers pet hotel dog daycare services carlow"/>
        <p>Dog day care at Happy Campers is the answer for pet parents that don't want their pup left alone during the day. It ensures your dog gets the exercise, and socialisation they need.</p>
        <a href='<?php echo get_site_url();?>/dog-daycare/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
    <div class="col">
      <div class="feature">
        <h2 class="paw-title">Dog Grooming</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-grooming-carlow.jpg" alt="happy campers pet hotel dog grooming services carlow"/>
        <p>Treat your pup to a spa day! The in-house dog grooming service offers bathing, trimming, and styling. Get summer ready with a trim  or freshen up with a wash during day care.</p>
        <a href='<?php echo get_site_url();?>/dog-grooming/' class="btn btn-clear">Learn more</a>
      </div>
    </div>
  </section>
  <section class="card offset">
    <div class="flex-grid container">
      <h1 class="paw-title">Happy Campers Pet Hotel</h1>
      <div class="vertical-row thin">
        <img src="<?php bloginfo('template_directory'); ?>/images/dog-daycare-facility-carlow.jpg" alt="happy campers pet hotel dog kennel ireland"/>
        <h3 class="left">A Home from Home for your Precious Pet</h3>
        <p>Happy Campers Pet Hotel offers dog boarding, doggie day care, cattery, grooming and small pet boarding services. Our approach to pet care makes your pet feel like a member of the family. Campers stay in our home and pet hotel, with themed indoor, individually heated areas and private suites. As a result, they feel more at home. You and your pooch can relax while you are away, knowing they are in good hands, staying safe and having fun.</p>
        <p>We are conveniently located just outside Carlow town servicing the greater Carlow area for our doggy day care service. A minutes drive from the M9 motorway, one hour from Dublin and Waterford makes us a great doggy holiday destination for the Leinster region.</p>
        <div class="well">
          <p>Ready for a barking good time? Call us at <a href="tel:(00353)852432902"><span>085 2432902</span></a> to find out more about our services.</p>
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
              <p>Our dog goes here on her holidays she loves staying here and we are happy to leave her we can go away and know Mishka is well looked after.</p>
            </div>
            <div class="author"><cite>- Sylvia Keppel</cite></div>
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
</main>
<?php
get_footer();