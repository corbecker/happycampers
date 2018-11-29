<?php
/* Template Name: Boarding Page*/
get_header();
get_header('services');
?>
<div class="main-general">
    <div class="container">
        <div class="content">
            <div class="center"><h1 class="paw-title center-text"><?php single_post_title() ?></h1></div>
            <div class="flex-parent">
                <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC09001.jpg" alt="dog boarding ireland"/></div>
                <div class="flex-child-half"><h2 class="sub">Trustworthy Pet Care</h2><p>Our Pet Hotel offers you peace of mind while you are away, knowing your dog is being looked after in a fun, safe and nurturing environment.</p>
                <p>Our luxury, indoor daycare/boarding facility caters for all puppy personalities. Sleepover style boarding for our more social guests, and private suites for when a little alone time is needed.</p>
                <div class="flex-parent">
                    <div class="flex-child-half">
                        <a href="<?php echo get_site_url();?>/about/take-a-tour/">
                            <button class="btn-huge">Take a Tour</button>
                        </a>
                    </div>
                    <div class="flex-child-half">
                        <a href="#rates">
                            <button class="btn-huge">€ Rates</button>
                        </a>
                    </div>
                </div>
                <p>Our location in the Carlow countryside offers many spacious, secure outdoor areas for your dog to get active and play with their holiday puppy pals. All our overnight boarders take part in our daily daycare program.</p>
            </div>
        </div>
        <div class="flex-parent">
            <div class="flex-child">
                <div class="center"><h2>Dog Boarding Services</h2></div>
                <h2 class="sub">A Hotel for Dogs</i></h2>
                <p>Dogs are visual creatures, their surroundings have a huge impact on their behaviour and well-being. Our indoor, heated daycare and boarding facility is designed to keep your dog happy and at ease when they are away from home. The space is divided into sections to accommodate the many doggy personalities that come through our door.</p>
                <p>We introduce similarly mannered dogs into playgroups, the themed sections allow everyone to play or chill with furry friends of a similar temperament. So they can have a chilled day in our beach themed section or a playful day among the trees in our mountain area.</p>
                <div class="flex-parent">
                    <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08958.jpg" alt="pet hotel beach" /></div>
                    <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08968.jpg" alt="pet boarding section" />
                    </div>
                </div>
                <h2 class="sub">Dog Hotel Suites</i></h2>
                <p>Our pet hotel has two themed suites available in a custom built luxury doggy cabin. Situated inside our main building so they're nice and cosy and quiet. Ideal for pets that prefer to keep to themselves.</p>
                <p>Have an old-timer that isn't quite up for mixing with the boisterous youngsters? A quiet retreat in the Wild-West themed suite could be just what they need. For puppies our nursery style suite is the perfect spot for them.</p>
                <div class="flex-parent">
                    <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08950.jpg" alt="private pet hotel suite"/></div>
                    <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08945.jpg" alt="pet hotel nursery suite" />
                    </div>
                </div>
                <div class="center"><h2 class="paw-title center-text" id="rates">Pricing Info</h2></div>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Pet Hotel Services</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trial Day</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Overnight Boarding</td>
                            <td>€20</td>
                        </tr>
                        <tr>
                            <td>Weekly Rate (1 day free)</td>
                            <td>€120</td>
                        </tr>
                        <tr>
                            <td>Extra Half Day (Cost of Daycare)</td>
                            <td>€15</td>
                        </tr>
                        <tr>
                            <td>Additional dog from same family</td>
                            <td>€15</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-style">
                    <thead>
                        <tr>
                            <td>Other Boarding Services</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cat Boarding</td>
                            <td>€12</td>
                        </tr>
                        <tr>
                            <td>Small Pet Boarding</td>
                            <td>€8</td>
                        </tr>
                    </tbody>
                </table>
                <p>* Discounted rates may apply for multiple pet bookings or long term stays.</p>
                <h2 class="sub">All Inclusive Rates</i></h2>
                <p>Our boarding rates are all inclusive. Guests are given breakfast and dinner, we encourage bringing their own food to avoid any upset tummy's but food can be provided. Dietary and medication needs will be catered for by our experienced staff. All overnight boarding guests will join in on the daycare fun every day. After a day of activities all the pooches are tucked into bed and given a bedtime treat. Feel free to bring along any creature comforts (blankets, jumpers etc) that will remind them of home and help them settle in.</p>
                <h2 class="sub">Trial Day</i></h2>
                <p>Before your dogs first stay with us we provide a free trial day. It is encouraged as it familiarises them with us, the other doggies and the space. It also reassures them that you will be coming back for them as they will have been dropped off and collected once before the longer stay.</p>
                <div class="center"><h2 class="paw-title center-text" id="rates">Reservations</h2></div>
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