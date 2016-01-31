<?php
query_posts('page_id=42');
?>
<div id="main" class="wrapper clearfix">
    <?php while (have_posts()) : the_post(); ?>
        <div class="home-img">
            <img src="<?php echo the_field('imagen_home') ?>"/>
        </div>
    <?php endwhile; ?>
    <?php echo do_shortcode('[banner id="47"]')?>
</div>