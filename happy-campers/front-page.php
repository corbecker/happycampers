<?php
get_header();
?>
<div class="keyart" id="parallax">
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
    <div class="cta-section">
        <div class="cta">
            <h3>New Camper?</h3>
            <button class="btn-clear">Take a Tour</button>
        </div>
        <div class="divider"></div>
        <div class="cta">
            <h3>Existing Camper</h3>
            <button class="btn-clear">Make Reservation</button>
        </div>
    </div>
</div>
<div class="main">
    <section class="features container">
        <div class="feature">
            <h1>Dog Boarding</h1>
            <img src="<?php bloginfo('template_directory'); ?>/images/boarding_2.jpg" alt="dog_boarding"/>
        </div>
        <div class="feature">
            <h1>Dog Daycare</h1>
            <img src="<?php bloginfo('template_directory'); ?>/images/daycare_2.jpg" alt="dog_daycare"/>
        </div>
        <div class="feature">
            <h1>Grooming</h1>
            <img src="<?php bloginfo('template_directory'); ?>/images/grooming.jpg" alt="dog_grooming"/>
        </div>
    </section>
</div>
<?php
get_footer();
