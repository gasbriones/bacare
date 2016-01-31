<?php
/*
Template Name: Bolsos
*/
get_header();

$args = array(
  'cat' => 5,
  'orderby' => 'ASC'
);

$query = new WP_Query($args);
?>
<body <?php body_class(); ?>>
<div id="site">
  <?php get_template_part('content-header'); ?>
  <div id="main" class="wrapper">
    <ul class="product-list">
      <?php
      if ($query->have_posts()):
        while ($query->have_posts()):$query->the_post();
          ?>
          <li>
            <ul class="prod-detail">
              <li><img src="<?php echo the_field('imagen_principal_producto') ?>"/></li>
              <li>Artículo <b><?php echo the_field('modelo_del_producto') ?></b></li>
            </ul>

          </li>
        <?php endwhile;
      else:
        echo '<li class="error">No se encontraron productos</li>';
      endif;
      ?>
    </ul>
  </div>
  <?php get_footer();?>
</div>
</body>
</html>