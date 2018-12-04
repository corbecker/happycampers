<?php
get_header();
?>
<div class="masthead about"></div>
<div class="main-general container">
    <h1 class="paw-title"><?php single_post_title() ?></h1>

    <!-- Start the Loop. -->
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

        <!-- Test if the current post is in category 3. -->
        <!-- If it is, the div box is given the CSS class "post-cat-three". -->
        <!-- Otherwise, the div box is given the CSS class "post". -->

                <?php if (in_category('3')) : ?>
            <div class="post-cat-three">
                <?php else : ?>
            <div class="post">
                <?php endif; ?>


        <!-- Display the Title as a link to the Post's permalink. -->

        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


        <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

        <small><?php the_time('F jS, Y'); ?></small>


        <!-- Display the Post's content in a div box. -->

        <div class="entry">
                <?php the_content(); ?>
        </div>


        <!-- Display a comma separated list of the Post's Categories. -->

        <p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category(', '); ?></p>
        </div> <!-- closes the first div box -->


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