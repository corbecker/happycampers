<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        if (have_posts()) :
            if (is_home() && ! is_front_page()) :
                ?>
                <header>
                    Header
                </header>
                <?php
            endif;

            /* Start the Loop */
            while (have_posts()) :
                the_post();
            endwhile;
        endif;
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();