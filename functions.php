<?php 

//load stylesheets
function load_css() {

    wp_register_style('style', get_template_directory_uri() . '/public/style.css',
      array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('main', get_template_directory_uri() . '/asset/main.css',
        array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');


// Theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menu
register_nav_menus(

    array(
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
    )

);


//Register Sidebars 
function my_sidebars() {

    register_sidebar(
   array(
     'name' => 'Blog sidebar',
     'id' => 'blog-sidebar',
   )
   );

}
add_action('widgets_init','my_sidebars');


//custom logo
function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
 'unlink-homepage-logo' => true, 
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//custom post (courses)
function courses_post_type() {
  register_post_type('courses',
      array(
          'labels'      => array(
              'name'          => 'Courses',
              'singular_name' => 'course',
          ),
          'public'      => true,
          'hierarchical' => true,
          'has_archive' => true,
          'rewrite'     => array( 'slug' => 'courses' ),
          'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
      )
  );
}
add_action('init', 'courses_post_type');

//course taxonomies
function course_taxonomy() {
  $labels = array(
      'name'              => 'Courses', 
      'singular_name'     => 'category',
      'search_items'      => __( 'Search courses' ),
      'all_items'         => __( 'All Courses' ),
      'parent_item'       => __( 'Parent course' ),
      'parent_item_colon' => __( 'Parent course:' ),
      'edit_item'         => __( 'Edit course' ),
      'update_item'       => __( 'Update course' ),
      'add_new_item'      => __( 'Add New course' ),
      'new_item_name'     => __( 'New course Name' ),
      'menu_name'         => __( 'Course' ),
  );
  $args   = array(
      'hierarchical'      => true, // make it hierarchical (like categories)
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => [ 'slug' => 'course' ],
  );
  register_taxonomy( 'course', [ 'courses' ], $args );
}
add_action( 'init', 'course_taxonomy' );

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
  $countKey = 'post_views_count';
  $count = get_post_meta($postID, $countKey, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, '0');
  }else{
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
}


?>
