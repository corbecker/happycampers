<div class="masthead">
    <div class="container">
        <h1>About</h1>
    </div>
</div>
<nav class="sub-navigation">
    <div>
        <ul class="toggle">
            <li class="fa fa-bars"></li>
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
