<?php
get_header();
?>
<div class="masthead about"></div>
<div class="main-general container">

    <!-- Start the Loop. -->
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

        <!-- Stop The Loop (but note the "else:" - see next line). -->

            <?php endwhile;
        else : ?>
        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>


        <!-- REALLY stop The Loop. -->
        <?php endif; ?>

</div><!-- #primary -->

<?php
get_footer();