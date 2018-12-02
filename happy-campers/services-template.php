<?php
/* Template Name: Services Template*/
get_header();
get_header('services');
?>
<div class="main-general container">
    <h1 class="paw-title center-text"><?php single_post_title() ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <?php remove_filter('the_content', 'wpautop'); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>
<?php
get_footer();