<div class="masthead about"></div>
<nav class="sub-navigation">
    <div>
        <ul class="toggle">
            <li><span class="icon-bars"></span></li>
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
