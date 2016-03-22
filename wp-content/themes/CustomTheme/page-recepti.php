<?php get_header(); 
  /* 
    Template Name: Recepti
  */
?>

<section class="container">
  <div class="row">
  <?php if(have_posts()): 
      while(have_posts()): the_post(); ?>
          <?php //echo get_the_category()[0]->slug; ?>

           
              <div class="col-xs-12 col-sm-6 col-lg-4"><?php get_template_part('content', get_the_category()[0]->slug); ?></div>
              <?php //get_sidebar(); ?> 
            

      <?php endwhile;
    endif;
  ?>
  </div>
</section>




<?php get_footer(); ?>