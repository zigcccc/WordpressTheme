<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Custom Wordpress Theme</title>
    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php wp_head(); ?>
  </head>
  
  <?php 
    if(is_front_page()):
      $custom_classes = array('custom-class', 'home-class');
    else:
      $custom_classes = array('page-class');
    endif;
      
  ?>
  
  <body <?php body_class($custom_classes); ?>>
     <header>
      <div class="container">
        <div class="row">
          <div id="logo" class="col-sm-1">
            <a href="#">
              <img src="<?php echo get_template_directory_uri().'/img/logo.svg'?>" id="logo-image">
            </a>
          </div><!-- END logo -->
          <p class="col-sm-3">
            Žiga Krašovec
          </p><!-- END header paragraph -->
          <nav id="main-nav" class="col-sm-8">
            <ul class="text-right">
              <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
            </ul>
          </nav><!-- END main nav -->
        </div><!-- END row -->
      </div><!-- END container -->
    </header><!-- END header -->