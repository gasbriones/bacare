<?php
/*
Template Name: Articulo
*/
$articulo = $_GET['art'];

$post = get_post($articulo);

$colors = explode(',', get_field('colores_del_producto'));

?>


<div class="article  clearfix">
    <div class="details-img">
        <ul class="thumbnails">
            <li>
                <?php if( get_field( "imagen_detalle_1" ) ): ?>
                    <img src="<?php echo get_field('imagen_detalle_1') ?>"/>
                <?php endif; ?>
            </li>
            <li>
                <?php if( get_field( "imagen_detalle_2" ) ): ?>
                    <img src="<?php echo get_field('imagen_detalle_2') ?>"/>
                <?php endif; ?>
            </li>
            <li>
                <?php if( get_field( "imagen_detalle_3" ) ): ?>
                    <img src="<?php echo get_field('imagen_detalle_3') ?>"/>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="principal-img">
        <img class="prod-img" src="<?php echo get_field('imagen_principal_producto') ?>"/>
    </div>
    <div class="details">
        <h1 class="title">Artículo <b><?php echo get_field('modelo_del_producto') ?></b></h1>

        <div class="description">
            <h2 class="title">Descripción</h2>

            <p class="content"><?php echo $post->post_content ?></p>
        </div>
        <div class="colours clearfix">
            <ul>
                <?php foreach ($colors as $key => $row): ?>
                    <li class="color"  style="background: <?php echo $row; ?>"></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="weight">
            <h2 class="title">Medidas</h2>
            <?php echo get_field('medidas_del_producto') ?>
        </div>
    </div>
</div>