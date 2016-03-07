<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Custom Wordpress Theme</title>
    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  
  <?php 
    if(is_front_page()):
      $custom_classes = array('custom-class', 'home-class');
    else:
      $custom_classes = array('page-class');
    endif;
      
  ?>
  
  <body <?php body_class($custom_classes); ?> id="top">
     <header>
      <div class="container">
        <div class="row">
          <div id="logo" class="col-xs-12 col-sm-1">
            <a href="/wordpress/">
              <img src="<?php echo get_template_directory_uri().'/img/logo.svg'?>" id="logo-image">
            </a>
          </div><!-- END logo -->
          <p class="col-xs-12 col-sm-3">
            Žiga Krašovec
          </p><!-- END header paragraph -->
          <nav id="main-nav" class="col-xs-12 col-sm-8">
            <ul>
              <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
            </ul>
          </nav><!-- END main nav -->
        </div><!-- END row -->
      </div><!-- END container -->
    </header><!-- END header -->