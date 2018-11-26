<?php
/* Template Name: General Template with sub-heading & no sidebar*/
get_header();
get_header('services');
?>
<div class="main-general">
    <div class="container">
        <div class="content">
          <div class="center"><h1 class="paw-title"><?php single_post_title() ?></h1></div>
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
<?php
get_footer();
