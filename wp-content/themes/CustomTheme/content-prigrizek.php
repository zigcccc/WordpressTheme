<section class="container">
  <article class="prigrizek-article">
    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
    <div class="row">
      <div class="col-sm-12">
        <div class="thumbnail-image">
          <?php the_post_thumbnail('large');?>
        </div>
      </div>
    </div>
    <h2><?php the_title(); ?></h2>
    <small>Posted on: <?php the_time('j F Y')?> @ <?php the_time('G:i'); ?><br> Published By: <span class="content-author"><?php the_author(); ?></span><br><?php the_category(); ?></small>
    <div class="row">
      <div class="col-sm-12"><p><?php the_content(); ?></p></div>
    </div><!-- END row-->
  </article>
</section><!-- END Section -->