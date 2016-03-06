<?php get_header(); ?>

<?php if(have_posts()): 
    while(have_posts()): the_post(); ?>
        <?php echo get_post_type(); ?>
        <?php get_template_part('content', get_post_type()); ?>
        
    <?php endwhile;
  endif;
?>









<?php get_footer(); ?>