<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="main-navigation">
            <ul class="home-button">
                <li>
                    <a href=<?php echo get_home_url()?>><?php echo get_bloginfo('name'); ?></a>
                </li>
            </ul>
            <div class="icons">
                <a href="https://www.facebook.com/ashtreepethotel/"><i class="fa fa-facebook-square icon" style="font-size:30px;"></i></a>
                <a href="https://www.instagram.com/aleidas_pet_hotel/"><i class="fa fa-instagram icon" style="font-size:30px;"></i></a>
            </div>
            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'container'      => 'false'
                )
            );
            ?>
        </nav>
    </header>