<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130037221-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130037221-1');
    </script> -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '455336325258625');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=455336325258625&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
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
                <li class="icon"><a href="https://www.facebook.com/happycamperspethotel/"><span class="icon-facebook2"></span></a></li>
                <li class="icon"><a href="https://www.instagram.com/happycampershotel/"><span class="icon-instagram"></span></a></li>
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
                <li class="phone"><a href="tel:(00353)852432902"><span class="icon-mobile"></span><span>+353 85 2432902</span></a></li>
            </ul>
        </nav>
        <nav class="mobile-nav">
            <ul class="toggle-nav">
                <li><span class="icon-bars"></span></li>
            </ul>
            <a href="<?php echo get_site_url();?>/make-a-reservation/" class="btn">Reservations</a>
            <a href="tel:(00353)852432902" class="btn-clear"><span class="icon-mobile"></span><span>Call Us</span></a>
        </nav>
        <div class="mob-menu">
            <nav class="flex-grid">
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
                <div class="contact-buttons">
                    <a href="tel:(00353)852432902" class="btn-clear"><span class="icon-mobile"></span><span>+353 85 2342902</span></a>
                    <a href="https://goo.gl/maps/8UiK4yK71QE2" target="_blank" class="btn"><span class="icon-location"></span><span>Get Directions</span></a>
                </div>
            </nav>
        </div>
    </header>