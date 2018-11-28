<div class="masthead about"></div>
<nav class="sub-navigation">
    <div>
        <ul class="toggle">
            <li class="fa fa-bars" style="font-size:30px;"></li>
        </ul>
        <?php
        wp_nav_menu(
            array(
            'theme_location' => 'menu-3',
            'menu_id'        => 'about-menu',
            'container'      => 'false'
            )
        );
        ?>
    </div>
</nav>
