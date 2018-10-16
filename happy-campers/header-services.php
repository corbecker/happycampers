<div class="masthead">
    <div class="container">
        <h1><?php single_post_title(); ?></h1>
    </div>
</div>
<nav class="sub-navigation">
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