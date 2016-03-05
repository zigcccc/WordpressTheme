<section class="container">
  <article class="aside-article">
    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
    <h2>ASIDE POST: <?php the_title(); ?></h2>
    <small>Posted on: <?php the_time('j F Y')?> @ <?php the_time('G:i'); ?><br><?php the_category(); ?></small>
    <div class="row">
      <div class="col-sm-12"><p><?php the_content(); ?></p></div>
    </div><!-- END row-->
  </article>
</section><!-- END Section -->
<hr>