<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<div class="masthead services"></div>
<div class="main-general container">
 
<?php
// Check if there are any posts to display
if (have_posts()) : ?>
<header class="archive-header">
<h1 class="archive-title">Category: <?php the_category(', '); ?></h1>
 
 
    <?php
// Display optional category description
    if (category_description()) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
    <?php endif; ?>
</header>
 
    <?php
 
// The Loop
    while (have_posts()) :
        the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?></small>
 
<div class="entry">
        <?php the_content(); ?>
</div>
 
    <?php endwhile;
else : ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</div>
 
<?php get_footer(); ?>