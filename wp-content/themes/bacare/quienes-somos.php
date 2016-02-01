<?php
/*
Template Name: Quienes somos
*/
get_header();

?>
<body <?php body_class(); ?>>
<div id="site">
    <?php get_template_part('content-header'); ?>
    <div id="main" class="wrapper clearfix">
        <?php while (have_posts()) : the_post(); ?>
            <div class="quienes-somos clearfix"><?php echo the_content() ?></div>
        <?php endwhile; ?>
    </div>
    <?php get_footer(); ?>
</div>
</body>
</html>