
  <article class="sladica-article">
    <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
    
    <div class="post-image">
      <?php the_post_thumbnail('large');?>
    </div>
    
    <h2><?php the_title(); ?></h2>
    
    <small>Posted on: <?php the_time('j F Y')?> @ <?php the_time('G:i'); ?><br> Published By: <span class="content-author"><?php the_author(); ?></span><br><?php the_category(); ?></small>
    
    <div><p><?php the_content(); ?></p></div>
    
  </article>