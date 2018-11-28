<?php
/* Template Name: Grooming Page*/
get_header();
get_header('services');
?>
<div class="main-general">
    <div class="container">
        <div class="content">
            <div class="center"><h1 class="paw-title"><?php single_post_title() ?></h1></div>
            <div class="flex-parent">
                <div class="flex-child">
                    <h2 class="sub">Bring Home a Clean & Fresh Pup</h2><p>Our Pet Hotel offers an in-house grooming service. Let's face it dogs will be dogs, they like to get dirty. Bathing at home can be a bit messy and hard to find the time for. We're delighted to offer washing, trimming and nail clipping services.</p>
                    <p>All our Happy Camper's dog grooming services are offered standalone or while at daycare/boarding, pups in for a groom will have some fun at daycare while they wait to be picked up.</p>
                    <div class="flex-parent">
                        <div class="flex-child-half">
                            <a href="#rates">
                                <button class="btn-huge">€ Rates</button>
                            </a>
                        </div>
                    </div>
                    <div class="flex-parent">
                        <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08958.jpg" alt="pet hotel beach" /></div>
                        <div class="flex-child-half"><img src="http://192.168.1.113:8888/happycampers/wp-content/uploads/2018/10/DSC08968.jpg" alt="pet boarding section" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-parent">
                <div class="flex-child">
                    <div class="center"><h2 class="paw-title" id="rates">Pricing Info</h2></div>
                    <p>Full groom services include standard breed cut, shampoo & condition, glands, nail clip and ear clean. Additional charges may apply for heavily soiled/matted dogs. Wash services include shampoo, condition & dry.</p>
                    <table class="table-style">
                        <thead>
                            <tr>
                                <td>Full Groom Services</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Small Breed</td>
                                <td>€35 - €45*</td>
                            </tr>
                            <tr>
                                <td>Medium Breed</td>
                                <td>€45 - €55*</td>
                            </tr>
                            <tr>
                                <td>Large Breed</td>
                                <td>€55 - €65*</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-style">
                        <thead>
                            <tr>
                                <td>Wash & Dry</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Small Breed</td>
                                <td>€20 - €25</td>
                            </tr>
                            <tr>
                                <td>Medium Breed</td>
                                <td>€35 - €35</td>
                            </tr>
                            <tr>
                                <td>Large Breed</td>
                                <td>€40 - €45</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-style">
                        <thead>
                            <tr>
                                <td>Other Grooming Services</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nail Clip</td>
                                <td>€8</td>
                            </tr>
                            <tr>
                                <td>Glands</td>
                                <td>€10</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>* Extra charges may apply for heavily soiled/matted dogs.</p>
                    <div class="center"><h2 class="paw-title" id="rates">Appointments</h2></div>
                    <div class="flex-child">
                        <p>There's nothing better than bringing home a happy pup smelling fresh and looking great. To find out more about our pet grooming services give us a call to make an appointment.</p>
                        <a href="tel:(00353)852432902">
                            <button class="btn-huge"><i class="fa fa-phone" style="font-size:20px; padding-right: 10px"></i>Call Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();