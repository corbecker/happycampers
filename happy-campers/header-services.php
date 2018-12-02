<div class="masthead services"></div>
<nav class="sub-navigation">
    <div>
        <ul class="toggle">
            <li><span class="icon-bars"></span></li>
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