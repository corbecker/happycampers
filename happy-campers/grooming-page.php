<?php
/* Template Name: Grooming Page*/
get_header();
get_header('services');
?>
<div class="main-general container">
    <h1 class="paw-title"><?php single_post_title() ?></h1>
    <div class="flex-grid">
        <div class="vertical-row thin">
            <h3 class="left">Bring Home a Clean & Fresh Pup</h3>
            <p>Our Pet Hotel offers an in-house grooming service. Let's face it dogs will be dogs, they like to get dirty. Bathing at home can be a bit messy and hard to find the time for. We're delighted to offer washing, trimming and nail clipping services.</p>
            <p>All our Happy Camper's dog grooming services are offered standalone or while at daycare/boarding, pups in for a groom will have some fun at daycare while they wait to be picked up.</p>
            <a href="#rates" class="btn-huge">€ Rates</a>
            <h2 class="paw-title" id="rates">Pricing Info</h2>
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
            <h2 class="paw-title" id="rates">Appointments</h2>
            <p>There's nothing better than bringing home a happy pup smelling fresh and looking great. To find out more about our pet grooming services give us a call to make an appointment.</p>
            <a href="tel:(00353)852432902" class="btn-huge"><span class="icon-mobile"></span><span>Call Us</span></a>
        </div>
    </div>
</div>
<?php
get_footer();