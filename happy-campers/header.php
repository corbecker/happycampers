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
        <nav id="navheader" class="main-navigation">
            <ul class="home-button">
                <li>
                    <a href=<?php echo get_home_url()?>>HAPPY CAMPERS<br><span>PET HOTEL</span></a>
                </li>
            </ul>
            <ul class="menu">
                <li class="icon"><a href="https://www.facebook.com/ashtreepethotel/"><i class="fa fa-facebook-square icon" style="font-size:30px;"></i></a></li>
                <li class="icon"><a href="https://www.instagram.com/aleidas_pet_hotel/"><i class="fa fa-instagram icon" style="font-size:30px;"></i></a></li>
                <?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => 'false'
                    )
                );
                ?>
            </ul>
            <ul>
                <li class="phone"><a href="tel:(00353)852432902"><i class="fa fa-phone" style="font-size:30px;"></i><span>+353 85 2432902</span></a></li>
            </ul>
        </nav>
        <nav class="mobile-nav">
            <ul class="toggle-nav">
                <li><i class="fa fa-bars" style="font-size:30px;"></i></li>
            </ul>
            <button class="btn">
                Reservations
            </button>
            <button class="btn-clear">
                <a href="tel:(00353)852432902"><i class="fa fa-phone" style="font-size:20px;"></i><span>Call Us</span></a>
            </button>
        </nav>
    </header>