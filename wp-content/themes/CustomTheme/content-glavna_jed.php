
  <article id="post-<?php the_ID(); ?>" class="glavna-jed-article">
    <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
    <a href="/wordpress/<?php echo(basename(get_permalink())); ?>">
      <div class="post-image-wrap">
        <div class="post-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
          <?php //the_post_thumbnail('large');?>
        </div>
      </div>
    </a>
     <div class="post-title">
      <h2><?php the_title(); ?></h2>
    </div>
    <small>Posted on: <?php the_time('j F Y')?> @ <?php the_time('G:i'); ?><br> Published By: <span class="content-author"><?php the_author(); ?></span><br><?php the_category(); ?></small>
    <div class="post-excerpt">
      <?php the_excerpt(); ?>
    </div>
    <div class="post-read-more">
      <a href="/wordpress/<?php echo(basename(get_permalink())); ?>">
        Preberi več
      </a>
    </div>
  </article>