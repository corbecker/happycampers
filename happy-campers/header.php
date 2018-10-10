<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <ul class="home-button">
                <li>
                    <a href=<?php echo get_home_url()?>><?php echo get_bloginfo('name'); ?></a>
                </li>
            </ul>
            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container'      => 'false'
                )
            );
            ?>
        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">