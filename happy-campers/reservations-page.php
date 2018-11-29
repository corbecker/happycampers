<?php
/* Template Name: Reservation Page*/
get_header();
?>
<div class="masthead">
  <div class="container">
  </div>
</div>
<div class="main-general">
  <div class="container">
    <div class="content">
      <div class="center"><h1 class="paw-title"><?php single_post_title() ?></h1></div>
      <div class="flex-parent">
        <div class="flex-child-half">
          <h2 class="center-text">New Customer?</h2>
          <a href="#jump-to"><button id="new-button" class="btn-huge">Reserve Free Trial  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <div class="flex-child-half">
          <h2 class="center-text">Returning Customer?</h2>
          <a href="#jump-to"><button id="returning-button" class="btn-huge">Make Reservation  <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <span id="jump-to"></span>
      </div>
      <div id="new" class="hidden">
        <h2 class="paw-title">Select a Service</h2>
        <div class="flex-parent">
          <div class="flex-child-half">
            <a href="<?php echo get_site_url();?>/make-a-reservation/new-daycare-reservation"><button class="btn-huge blue">Day Care  <i class="fa fa-arrow-right"></i></button></a>
          </div>
          <div class="flex-child-half">
            <a href="<?php echo get_site_url();?>/make-a-reservation/new-boarding-reservation"><button class="btn-huge blue">Boarding  <i class="fa fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
      <div id="returning" class="hidden">
        <h2 class="paw-title">Select a Service</h2>
        <div class="flex-parent">
          <div class="flex-child-half">
            <a href="<?php echo get_site_url();?>/make-a-reservation/dog-day-care-reservation"><button class="btn-huge blue">Dog Day Care  <i class="fa fa-arrow-right"></i></button></a>
          </div>
          <div class="flex-child-half">
            <a href="<?php echo get_site_url();?>/make-a-reservation/pet-boarding-reservation"><button class="btn-huge blue">Pet Boarding  <i class="fa fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
      <div class="flex-parent">
        <div class="flex-child">
          <p>*Free trial for new customers to assess temperament and familiarise dog with the space and our guests.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();