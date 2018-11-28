<?php
/* Template Name: Daycare Page*/
get_header();
get_header('services');
?>
<div class="main-general">
    <div class="container">
        <div class="content">
            <div class="center"><h1 class="paw-title"><?php single_post_title() ?></h1></div>
            <div class="flex-parent">
                <div class="flex-child-half"><h2 class="sub">Play the Day Away!</h2><p>Whether your pooch needs to get out every day or just occasionally, Happy Camper's daycare service is a hugely beneficial addition to your dogs routine.</p>
                <p>Dog daycare will provide dog and human interaction to improve your pups socialization skills. Our grounds have plenty of space for all our canine campers to stay active, healthy and happy.</p>
                <div class="flex-parent">
                    <div class="flex-child-half">
                        <a href="<?php echo get_site_url();?>/about/take-a-tour/">
                            <button class="btn-huge">Take a Tour</button>
                        </a>
                    </div>
                    <div class="flex-child-half">
                        <a href="#rates"><button class="btn-huge">€ Rates</button></a>
                    </div>
                </div>
                <p>Our dogs are introduced to play pals that will suit their style of play and temperament. Each day is planned with group activities as well as one-on-one interaction and rest time. Your pup will come home all tuckered out.</p>
            </div>
            <div class="flex-child-half"><img src="<?php bloginfo('template_directory'); ?>/images/dog-daycare.jpg" alt="dog boarding ireland"/></div>
        </div>
        <div class="flex-parent">
            <div class="flex-child">
                <div class="center"><h2>Dog Daycare Services</h2></div>
                <h2 class="sub">More than Dog Minding</h2>
                <p>Daycare for dogs is much the same as daycare for kids. Perhaps you are away for the day or you don't want your puppy left alone while you're at work. It's a safe space for your day to stay and play while you're away.</p>
                <p>Daycare goes a step further than pet sitting. An in-house pet sitter can be difficult to organise and your dog will miss out on the mental-stimulation and socialization benefits provided by our daycare service.</p>
                <div class="flex-parent">
                    <div class="flex-child-half"><img src="<?php bloginfo('template_directory'); ?>/images/dog-daycare-carlow.jpg" alt="pet hotel beach" /></div>
                    <div class="flex-child-half">
                        <h2 class="sub">Happy Campers Daycare Benefits</h2>
                        <div class="benefits">
                            <ul>
                                <li>Healthier happier dog.</li>
                                <li>Exercise & weight management.</li>
                                <li>Improves behaviour.</li>
                                <li>Relieve separation anxiety.</li>
                                <li>Improve dog and human interaction skills.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="center"><h2 class="paw-title" id="rates">Pricing Info</h2></div>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Dog Daycare Services</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trial Day</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Daycare</td>
                            <td>€15</td>
                        </tr>
                        <tr>
                            <td>5 Days Package (1 day Free)</td>
                            <td>€60</td>
                        </tr>
                        <tr>
                            <td>Daycare Wash</td>
                            <td>€20</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="sub">Trial Day</i></h2>
                <p>Before we enroll a new camper into daycare we provide a free trial day. This is an important step to ensure your dog is of a suitable temperament and will fit in well with the rest of the gang. The safety and happiness of all of our guests is our highest priority.</p>
                <div class="center"><h2 class="paw-title" id="rates">Reservations</h2></div>
                <div class="flex-child">
                    <a href="<?php echo get_site_url();?>/make-a-reservation">
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