<?php
/* Template Name: Boarding Reservation Returning*/
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
        <div class="flex-child"><h2 class="sub">Back for some more fun?</h2><p>We are happy to have your pet come stay with us again. You've been before so you know the drill, please fill out the form below to make a reservation for boarding.</p>
        <div class="well space-bottom"><p>**Please note this is a reservation only. Please allow 24 hours for your booking to be confirmed. If you require immediate booking or haven't heard back from us plase call us on <a href="tel:(00353)852432902">085 243 2902</a></p></div>
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
</div>
</div>
<?php
get_footer();