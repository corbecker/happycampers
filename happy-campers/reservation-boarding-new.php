<?php
/* Template Name: Boarding Reservation New*/
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
            <div class="flex-child">
                <h2 class="sub center-text">Think you've found your vacay destination?</h2>
                <p>We can't wait to meet you and your furry friend. All our new guests are required to come for a trial day before coming to stay at the pet hotel. Please read our house rules below carefully and fill out an application form to bring with you to the trial.</p>
                <button class="btn">Download Application Form</button>
                <br>
                <h2 class="sub">House Rules</h2>
                <div class="dog-list">
                  <ul>
                    <li>Male dogs must be neutered and female dogs must not be in or around a heat cycle.</li>
                    <li>Proof of vaccination records must be presented. Including <strong>annual boosters and kennel cough</strong></li>
                    <li>Ensure your pet has received innoculations at least one week prior to arrival.</li>
                    <li>All pets have received their <strong>flea/worm dose.</strong></li>
                    <li>Dogs must be social with people/dogs.</li>
                    <li>All dogs must have a <strong>collar/harness with leash</strong> and wear them on arrival.</li>
                    <li>All new guests must complete a <strong>trial day.</strong></li>
                  </ul>
                </div>
                <br>
                <h2 class="sub">Request a Trial</h2>
                <p>Please fill in the trial request form below. Please allow 24 hours for us to contact you to arrange an exact time for the trial. Bring your completed Application Form along with you. Trial campers are welcome to stay all day but please allow for at least 2 hours so we can adequately assess their suitability.</p>
                <div class="well space-bottom"><p>**Please note this is a reservation only. Please allow 24 hours for your request to be confirmed. If you need to get in touch immediately please call us on <a href="tel:(00353)852432902">085 243 2902</a></p></div>
            </div>
            
        </div>
        <div class="flex-parent">
            <div class="flex-child">
                <h2 class="sub">Reservation Form</h2>
                <div class="form-well">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :
                            the_post(); ?>
                            <?php remove_filter('the_content', 'wpautop'); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
            
        </div>
    </div>
</div>
<?php
get_footer();
