<?php
/* Template Name: Gallery Page*/
get_header();
get_header('about');
?>
<div class="main">
    <div class="container card">
          <h2><?php single_post_title() ?></h2>
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
<?php
get_footer();
