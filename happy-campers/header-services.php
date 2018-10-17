<div class="masthead">
    <div class="container">
        <h1><?php single_post_title(); ?></h1>
    </div>
</div>
<nav class="sub-navigation">
    <ul class="toggle">
        <li class="fa fa-bars"></li>
    </ul>
    <?php
    wp_nav_menu(
        array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'services-menu',
        'container'      => 'false'
        )
    );
    ?>
</nav>