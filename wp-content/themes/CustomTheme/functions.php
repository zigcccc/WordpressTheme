<?php 

function custom_script_enqueue() {
  wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap-optional-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri().'/CSS/main.css', array(), '1.0.0', 'all');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(),'', false);
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







/* RENAME POST FORMAT NAMES */
function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Aside' ){
        return 'No Featured Image (aside)';
    } elseif ($safe_text == 'Image') {
        return 'Sladica (image)';
    } elseif ($safe_text == 'Video'){
        return 'Glavna jed (video)';
    }

    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );

//rename Aside in posts list table
function live_rename_formats() { 
    global $current_screen;

    if ( $current_screen->id == 'edit-post' ) { ?>
        <script type="text/javascript">
        jQuery('document').ready(function() {

            jQuery("span.post-state-format").each(function() { 
                if ( jQuery(this).text() == "Aside" ){
                    jQuery(this).text("No Featured Image");
                } else if (jQuery(this).text() == "Image") {
                    jQuery(this).text("Sladica");
                } else if (jQuery(this).text() == "Video") {
                    jQuery(this).text("Glavna jed");
                }
            });

        });      
        </script>
<?php }
}
add_action('admin_head', 'live_rename_formats');







?>