<header id="header" class="block wrapper clearfix">
    <div class="top-bar">
        <a href="<?php echo get_site_url(); ?>" class="logo"><img
                src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
        <ul class="social">
            <li class="hvr-push"><a
                    href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a></li>
            <li class="hvr-push"><a href="mailto:<?php bloginfo('admin_email'); ?>"><b>bacare</b>carteras</a></li>
        </ul>
    </div>

    <?php
    //banners
    switch (get_the_ID()) {
        case 5: //Bolsos
            echo do_shortcode('[banner id="21"]');
            break;
        case 7: //Carteras pu
            echo do_shortcode('[banner id="48"]');
            break;
        case 9: //Carteras cuero
            echo do_shortcode('[banner id="49"]');
            break;
    }
    ?>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
</header>