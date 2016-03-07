<?php get_header(); ?>

 <div class="jumbotron" id="main-jt">
    <?php 
        $args = array('post-type' => 'post', 'posts_per_page' => 3);
        $loop = new WP_Query($args);
           
        if($loop->have_posts()):
          while($loop->have_posts()): $loop->the_post(); ?>
            <div class="thirdOfPage">
              <div class="thumbnail-image">
                <?php the_post_thumbnail('large');?>
                <span>
                  <h2><?php the_title(); ?></h2>
                  <h4><?php print get_the_category()[0]->name; ?></h4>
                  <a href="<?php the_permalink(); ?>">Preberi več</a>
                </span>
              </div>
            </div>
        <?php endwhile;
        endif; 
          
        wp_reset_postdata();
   
    ?>
</div><!-- END jumbotron -->

<section class="container" id="firstSection">
  <h2>Na kratko o meni</h2>
  <hr>
  <div class="row">
    <img src="<?php echo get_template_directory_uri().'/img/avatar.jpg';?>" class="img-circle col-xs-4 col-xs-offset-4 col-sm-offset-0 col-sm-3">
    <p class="col-xs-12 col-sm-9">Gentrify seitan selfies, kickstarter everyday carry photo booth twee thundercats food truck actually meggings heirloom put a bird on it godard. Narwhal cold-pressed keffiyeh green juice skateboard. You probably haven't heard of them echo park aesthetic ramps. Direct trade kogi YOLO, blog leggings literally kale chips disrupt typewriter mustache mumblecore iPhone bespoke selvage. Godard lumbersexual cardigan asymmetrical. Occupy mixtape man bun typewriter plaid fashion axe flexitarian chartreuse brooklyn, pork belly wayfarers portland quinoa aesthetic. Roof party scenester neutra small batch, kombucha tofu yr mumblecore tote bag sustainable taxidermy.

Blog umami neutra, chartreuse pickled +1 blue bottle cronut lomo literally gastropub. Trust fund 8-bit try-hard cred. Schlitz VHS letterpress, austin flexitarian DIY tousled pickled kickstarter meggings godard pinterest franzen. Chillwave bicycle rights blog, occupy franzen affogato whatever bespoke messenger bag pinterest fashion axe marfa church-key keytar post-ironic. Brooklyn letterpress franzen, actually kitsch mumblecore fixie poutine polaroid. Leggings readymade messenger bag wayfarers, chia man bun lumbersexual pinterest biodiesel roof party fixie everyday carry PBR&B. Brooklyn single-origin coffee viral affogato lo-fi, cray twee photo booth intelligentsia four dollar toast readymade polaroid ugh taxidermy wayfarers.</p>
  </div><!-- END row-->
</section><!-- END firstSection -->
  
<div class="jumbotron jt-lvl2" id="jt-2">
  <h2>Moje dejavnosti</h2>
</div>  
  
<section class="container" id="secondSection">
  <h2>S čim se ukvarjam</h2>
  <hr>
  <div class="row">
    <img src="<?php echo get_template_directory_uri().'/img/dejavnost.png';?>" class="img-circle col-xs-4 col-xs-offset-4 col-sm-3 col-sm-push-9 col-sm-offset-0">
    <p class="col-xs-12 col-sm-9 col-sm-pull-3">Gentrify seitan selfies, kickstarter everyday carry photo booth twee thundercats food truck actually meggings heirloom put a bird on it godard. Narwhal cold-pressed keffiyeh green juice skateboard. You probably haven't heard of them echo park aesthetic ramps. Direct trade kogi YOLO, blog leggings literally kale chips disrupt typewriter mustache mumblecore iPhone bespoke selvage. Godard lumbersexual cardigan asymmetrical. Occupy mixtape man bun typewriter plaid fashion axe flexitarian chartreuse brooklyn, pork belly wayfarers portland quinoa aesthetic. Roof party scenester neutra small batch, kombucha tofu yr mumblecore tote bag sustainable taxidermy.

Blog umami neutra, chartreuse pickled +1 blue bottle cronut lomo literally gastropub. Trust fund 8-bit try-hard cred. Schlitz VHS letterpress, austin flexitarian DIY tousled pickled kickstarter meggings godard pinterest franzen. Chillwave bicycle rights blog, occupy franzen affogato whatever bespoke messenger bag pinterest fashion axe marfa church-key keytar post-ironic. Brooklyn letterpress franzen, actually kitsch mumblecore fixie poutine polaroid. Leggings readymade messenger bag wayfarers, chia man bun lumbersexual pinterest biodiesel roof party fixie everyday carry PBR&B. Brooklyn single-origin coffee viral affogato lo-fi, cray twee photo booth intelligentsia four dollar toast readymade polaroid ugh taxidermy wayfarers.</p>
  </div><!-- END row-->
</section><!-- END firstSection -->









<?php get_footer(); ?>