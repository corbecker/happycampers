<?php
/* Template Name: Reservation Page*/
get_header();
?>
<div class="main-general">
  <div class="container">
    <div class="content">
      <div class="center"><h1 class="paw-title"><?php single_post_title() ?></h1></div>
      <div class="flex-parent">
        <div class="flex-child">
          <img src="<?php bloginfo('template_directory'); ?>/images/dog-kennels-ireland.jpg" alt="dog boarding ireland"/>
        </div>
        <div class="flex-child">
          <div class="center"><h2 class="paw-title">Happy Campers Pet Hotel Ireland</h2></div>
          <h2 class="sub">Premium Boarding, Doggy Daycare & More</h2>
          <p>Happy Campers is a 1000 square foot family run luxury pet hotel in the sunny south east of Ireland just outside Carlow town. We offer a home from home environment for your pet. We are a family of animal lovers and have been caring for pets all our lives. You can enjoy peace of mind while you are away and know your furry friend is getting the best pet care service possible.</p>
          <div class="flex-parent">
            <div class="flex-child-half">
              <h2 class="sub">Features of our Pet Hotel</h2>
              <div class="dog-list">
                <ul>
                  <li>Indoor heated play areas.</li>
                  <li>Large paved/grassy areas for exercise and fresh air.</li>
                  <li>Dogs supervised 24/7.</li>
                  <li>Pups in playgroups in cage-free environment.</li>
                  <li>Individual suites available.</li>
                  <li>Daily group activities, walks, picnics and playtime.</li>
                  <li>Dietary and medication needs catered for.</li>
                  <li>Individualised care for all pet personalities.</li>
                </ul>
              </div>
            </div>
            <div class="flex-child-half"><img src="<?php bloginfo('template_directory'); ?>/images/dog-hotel.jpg" alt="pet hotel beach" /></div>
          </div>
            <h2 class="sub">Why Choose Happy Campers?</h2>
            <p>We're more than a dog boarding kennels. We like to think of ourselves as your friend and partner in looking after your furry family member. Our pet care services are individualised for all the different puppy personalities out there to ensure your pooch gets the care they deserve.</p>
            <p>There's more to it than a place to stay while you're away. Making your pet a member of the Happy Campers community allows them to be the best pet they can be. Our campers experience all day indoor/outdoor play. Keeping your pup fit, socialised and happy.</p>
            <p>We foster an environment of enjoyment and encourage good behaviour. Our guests will experience many benefits: dog/human social skills development, reduced nervousness, increased fitness, house training improvements, less destructive behaviours, less separation anxiety and overall a healthier & happier dog.</p>
            <h2 class="paw-title">Ready to Get the Ball Rolling?</h2>
            <div class="flex-child">
                <a href="<?php echo get_site_url();?>/about/take-a-tour/">
                    <button class="btn-huge">Make a Reservation</button>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();