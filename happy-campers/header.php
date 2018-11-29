<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130037221-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130037221-1');
    </script>
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
                <li class="icon"><a href="https://www.facebook.com/happycamperspethotel/"><i class="fa fa-facebook-square icon" style="font-size:30px;"></i></a></li>
                <li class="icon"><a href="https://www.instagram.com/happycampershotel/"><i class="fa fa-instagram icon" style="font-size:30px;"></i></a></li>
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
            <a href="<?php echo get_site_url();?>/make-a-reservation/"><button class="btn">Reservations</button>
            <a href="tel:(00353)852432902"><button class="btn-clear"><i class="fa fa-phone" style="font-size:20px;"></i> <span>Call Us</span></button></a>
        </nav>
        <div class="mob-nav">
            <nav>
                <span class="close-btn"></span>
                <?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'menu-4',
                    'menu_id'        => 'global-menu',
                    'container'      => 'false'
                    )
                );
                ?>
                <ul class="contact-list">
                    <li><a href="tel:(00353)852432902"><button class="btn-clear"><i class="fa fa-phone"></i><span>+353 85 2342902</span></button></a></li>
                    <li><a href="https://goo.gl/maps/8UiK4yK71QE2" target="_blank"><button class="btn"><i class="fa fa-map-pin"></i>Get Directions</button></a></li>
                <ul>
            </nav>
            
        </div>
    </header>