<?php

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');

    //creates a menu for the pages
    register_nav_menus(array(
      'main' => 'Main Menu'
    ));
}

add_action('after_setup_theme', 'inhabitant_features');

function inhabitent_widgets() {
  register_sidebar(array(
    'name' => 'Sidebar Info',
    'id' => 'sidebar-info',
    'description' => 'Add a text block with your business hours',
    'before_widget' => '<aside id="%1$s>',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-hours">',
    'after_title' => '</h2>'
  ));
}
//making widgets that will go into our sidebar
add_action('widgets_init', 'inhabitent_widgets');

//add new products on wordpress
function inhabitent_post_types(){
  register_post_type('product', array(
    'has_archive' => true,
    'show_in_rest' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'labels' => array(
      'name' => 'Products',
      'add_new_item' => 'Add New Product',
      'edit_item' => 'Edit Product',
      'all_items' => 'All Products',
      'singular_name' => 'Product',
    ),
    'menu_icon' => 'dashicons-store',
  ));


// Register Custom Taxonomy
$labels = array(
    'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'Product Type' ),
    'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'Product Type' ),
    'menu_name'                  => __( 'Product Type', 'Product Type' ),
    'all_items'                  => __( 'All Items', 'Product Type' ),
    'parent_item'                => __( 'Parent Item', 'Product Type' ),
    'parent_item_colon'          => __( 'Parent Item:', 'Product Type' ),
    'new_item_name'              => __( 'New Item Name', 'Product Type' ),
    'add_new_item'               => __( 'Add New Item', 'Product Type' ),
    'edit_item'                  => __( 'Edit Item', 'Product Type' ),
    'update_item'                => __( 'Update Item', 'Product Type' ),
    'view_item'                  => __( 'View Item', 'Product Type' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'Product Type' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'Product Type' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'Product Type' ),
    'popular_items'              => __( 'Popular Items', 'Product Type' ),
    'search_items'               => __( 'Search Items', 'Product Type' ),
    'not_found'                  => __( 'Not Found', 'Product Type' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );

  register_taxonomy( 'product-type', array( 'product' ), $args );

};

add_action('init', 'inhabitent_post_types');

//Gets rid of error message at bottom of page
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
?>