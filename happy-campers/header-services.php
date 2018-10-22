<div class="masthead">
    <div class="container">
        <h1>Services</h1>
    </div>
</div>
<nav class="sub-navigation">
    <div class="">
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
    </div>
</nav>