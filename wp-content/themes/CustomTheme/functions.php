<?php

function custom_script_enqueue() {
  wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap-optional-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri().'/CSS/main.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(),'', false);
  wp_enqueue_script('bootstrapJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '', 'false');
  wp_enqueue_script('ScrollJS', get_template_directory_uri().'/JS/jquery.scrollTo.min.js', array(),'', true);
  wp_enqueue_script('customJS', get_template_directory_uri().'/JS/main-script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_script_enqueue');

function custom_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'custom_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/* CUSTOM WIDGET SETUP */
function custom_widget_setup(){
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action('widgets_init', 'custom_widget_setup');



// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'sladica', 'glavna_jed', 'prigrizek' ) );
  return $query;
}

// LIMIT WORD COUNT
function short_text(){
  $excerpt = get_the_content();
//  $excerpt = strip_shortcodes($excerpt);
//  $excerpt = strip_tags($excerpt);
  $the_str = substr($excerpt, 0, 50);
  return $the_str;
}




/* GET THE SLUG */
function get_the_slug() {

global $post;

if ( is_single() || is_page() ) {
  return $post->post_name;
  }
  else {
  return "";
}

}











?>
