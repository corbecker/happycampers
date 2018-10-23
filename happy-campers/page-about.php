<?php
/* Template Name: About Template with sub-heading*/
get_header();
get_header('about');
?>
<div class="main">
    <div class="main-sidebar container card">
        <div class="content">
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
        <div class="sidebar">
            <div id="general-sidebar1" class="sidebar-widget">
                <?php
                if (is_active_sidebar('general-sidebar-1')) {
                    dynamic_sidebar('general-sidebar-1');
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
