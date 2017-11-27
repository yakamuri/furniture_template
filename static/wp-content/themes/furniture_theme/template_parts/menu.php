

    <!--<div class="logo">-->
        <!--<a href="/">-->
            <!--<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_sandor_attila.png" alt="">-->
        <!--</a>-->
    <!--</div>-->
    <nav class="menu">
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>

    <div class="nav-toggle"></div>

    <nav class="menu-mobile">
        <span class="nav-cancel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav_close.png" alt="">
        </span>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>

