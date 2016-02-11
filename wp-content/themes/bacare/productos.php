<?php
/*
Template Name: Productos
*/
get_header();

switch (get_the_ID()) {
    case 5: //Bolsos
        $cat = 5;
        break;
    case 7: //Carteras pu
        $cat = 4;
        break;
    case 9: //Carteras cuero
        $cat = 3;
        break;
}


$args = array(
    'cat' => $cat,
    'orderby' => 'DESC'
);

$query = new WP_Query($args);
?>
<body <?php body_class(); ?>>
<div id="site">
    <?php get_template_part('content-header'); ?>
    <div id="main" class="wrapper clearfix">
        <div id="product-container">
            <div class="close">X</div>
            <div class="content clearfix"></div>
        </div>
        <ul class="product-list">
            <?php
            if ($query->have_posts()):
                while ($query->have_posts()):$query->the_post();
                    ?>
                    <li>
                        <ul class="prod-detail">
                            <li>
                                <a href="<?php echo get_site_url().'/articulo/?art='.$post->ID?>">
                                    <figure>
                                        <img src="<?php echo the_field('imagen_principal_producto') ?>"/>
                                    </figure>
                                </a>
                            </li>
                            <li class="code">Artículo <b><?php echo the_field('modelo_del_producto') ?></b></li>
                        </ul>
                    </li>
                <?php endwhile;
            else:
                echo '<li class="error">No se encontraron productos</li>';
            endif;
            ?>
        </ul>
    </div>
    <?php get_footer(); ?>
</div>
</body>
</html>