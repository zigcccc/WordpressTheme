<?php
  get_header();
?>

<section class="container">
<div class="row">
<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="single-article">
<!--    <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>-->
        <div class="row">
          <div class="col-sm-12">
            <div class="article-image-wrap">
              <div class="article-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
                <div class="post-title">
                  <h2><?php the_title(); ?></h2>
                </div>
              </div>
            </div><!-- END image-wrap -->
            <small>
              <div class="avatar">
                <?php echo get_avatar(get_the_author_meta('ID')); ?>
              </div>
              Posted on: <?php the_time('j F Y')?> @ <?php the_time('G:i'); ?><br> Published By:
              <span class="content-author">
                <?php the_author(); ?>
              </span>
            </small>
          </div><!-- END col -->
        </div><!-- END row -->

        <div class="row">
          <div class="col-sm-2">
            <p class="text-center"><strong>Sestavine:</strong></p>
            <?php
              $key = "Sestavina";
              $values = get_post_custom_values($key);
              foreach($values as $key=>$value){
                //$namet = trim($name);
                //if('_' == $namet[0])
                 // continue; ?>
                    <small><?php echo $value; ?></small>
              <?php
              } ?>
              <p class="text-center"><strong>Težavnost:<br></strong>
              <?php
                $key = "Tezavnost";
                $values = get_post_custom_values($key);
                foreach($values as $key=>$value){
                  if($value == 1){
                    echo '<span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span>';
                  } else if($value == 2) {
                    echo '<span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span> <span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span>';
                  } else if ($value == 3) {
                    echo '<span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span> <span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span> <span class="tezavnost glyphicon glyphicon-star" aria-hidden="true"></span>';
                  } else {
                    continue;
                  }
                }

              ?>
            </p>
          </div><!-- END col 2 -->
          <div class="col-sm-8">
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div><!-- END col 8 -->
          <div class="col-sm-2">
            <div class="tags">
              <?php edit_post_link(); ?>
            </div>
          </div><!-- END col 2 -->
        </div><!-- END row -->
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div id="comments-area">
              <h3>Komentarji:</h3>
              <?php if (comments_open()) {
                comments_template();
              }else {
                echo '<h4 class="text-center">Sorry comments are closed!</h4>';
              } ?>
            </div><!--END comments-area -->
          </div><!-- END col 8 -->
        </div><!-- END row -->

        <button class="btn btn-success"><a href="/wordpress/recepti/">Nazaj na recepte</a></button>

    <!--
        <div class="post-excerpt">
          <?php //the_excerpt(); ?>
        </div>
    -->
    <!--
        <div class="post-read-more">
          <a href="/wordpress/<?php //echo(basename(get_permalink())); ?>">
            Preberi več
          </a>
        </div>
    -->
      </article>




    <?php endwhile;
  endif;
?>
  </div>
</section>

<?php
  get_footer();
?>
