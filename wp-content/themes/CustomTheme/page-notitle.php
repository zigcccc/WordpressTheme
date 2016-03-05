<?php
  /* 
    Template Name: No Title
  */
  get_header(); 
?>

 <!-- <div class="jumbotron" id="main-jt">
    <h1>Dobrodošli na moji spletni strani!</h1>
    <button href="#" class="btn btn-success" id="poglej-vec">Poglej več</button>
    <span id="show-content" class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
  </div> --> <!-- END jumbotron -->

<?php if(have_posts()): 
    while(have_posts()): the_post(); ?>
        <section class="container" id="firstSection">
          
          <h1>This is my Static Title</h1>
          
          <small>Posted on: <?php the_date(); ?></small>
          <hr>
          <div class="row">
            <p><?php the_content(); ?></p>
          </div><!-- END row-->
        </section><!-- END Section -->
    <?php endwhile;
  endif;
?>









<?php get_footer(); ?>