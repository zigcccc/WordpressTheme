<?php get_header(); ?>

<section class="container">
  <?php if(have_posts()): 
      while(have_posts()): the_post(); ?>
          <?php //echo get_the_category()[0]->slug; ?>

           <div class="row">
              <div class="col-xs-12 col-sm-9"><?php get_template_part('content', get_the_category()[0]->slug); ?></div>
              <?php get_sidebar(); ?>
            </div>

      <?php endwhile;
    endif;
  ?>
</section>




<?php get_footer(); ?>