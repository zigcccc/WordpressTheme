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






/* CUSTOM POST TYPES */
add_action( 'init', 'custom_post_type_creator' );
/**
 * Register a post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function custom_post_type_creator() {
	$labels = array(
		'name'               => _x( 'Sladice', 'post type general name'),
		'singular_name'      => _x( 'Sladica', 'post type singular name'),
		'menu_name'          => _x( 'Sladice', 'admin menu'),
		'name_admin_bar'     => _x( 'Sladica', 'add new on admin bar'),
		'add_new'            => _x( 'Dodaj novo', 'Sladica'),
		'add_new_item'       => __( 'Dodaj novo Sladico'),
		'new_item'           => __( 'Nova Sladica'),
		'edit_item'          => __( 'Uredi Sladico'),
		'view_item'          => __( 'Poglej Sladico'),
		'all_items'          => __( 'Vse Sladice'),
		'search_items'       => __( 'Najdi Sladico'),
		'not_found'          => __( 'Nobena sladica ne ustreza iskanju.'),
		'not_found_in_trash' => __( 'Nobena sladica se ne nehaja v smetnjaku.')
	);

	$args = array(
		'labels'             => $labels,
        'taxonomies'         => array( 'category' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'sladica', $args );

	$labels = array(
		'name'               => _x( 'Glavne Jedi', 'post type general name'),
		'singular_name'      => _x( 'Glavna Jed', 'post type singular name'),
		'menu_name'          => _x( 'Glavne Jedi', 'admin menu'),
		'name_admin_bar'     => _x( 'Glavna Jed', 'add new on admin bar'),
		'add_new'            => _x( 'Dodaj novo', 'Glavna Jed'),
		'add_new_item'       => __( 'Dodaj novo Glavno Jed'),
		'new_item'           => __( 'Nova Glavna Jed'),
		'edit_item'          => __( 'Uredi Glavno Jed'),
		'view_item'          => __( 'Poglej Glavna Jed'),
		'all_items'          => __( 'Vse Glavne Jedi'),
		'search_items'       => __( 'Najdi Glavno Jed'),
		'not_found'          => __( 'Nobena glavna jed ne ustreza iskanju.'),
		'not_found_in_trash' => __( 'Nobena glavna jed se ne nehaja v smetnjaku.')
	);

	$args = array(
		'labels'             => $labels,
        'taxonomies'         => array( 'category' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'glavna_jed', $args );

		$labels = array(
		'name'               => _x( 'Prigrizki', 'post type general name'),
		'singular_name'      => _x( 'Prigrizek', 'post type singular name'),
		'menu_name'          => _x( 'Prigrizki', 'admin menu'),
		'name_admin_bar'     => _x( 'Prigrizek', 'add new on admin bar'),
		'add_new'            => _x( 'Dodaj novo', 'Prigrizek'),
		'add_new_item'       => __( 'Dodaj nov Prigrizek'),
		'new_item'           => __( 'Nov Prigrizek'),
		'edit_item'          => __( 'Uredi Prigrizek'),
		'view_item'          => __( 'Poglej Prigrizek'),
		'all_items'          => __( 'Vsi Prigrizki'),
		'search_items'       => __( 'Najdi Prigrizek'),
		'not_found'          => __( 'Noben prigrizek ne ustreza iskanju.'),
		'not_found_in_trash' => __( 'Noben prigrizek se ne nehaja v smetnjaku.')
	);

	$args = array(
		'labels'             => $labels,
        'taxonomies'         => array( 'category' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'prigrizek', $args );

}




// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'sladica', 'glavna_jed', 'prigrizek' ) );
  return $query;
}











?>