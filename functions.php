<?php 

// load TMPA plugin
require_once(get_template_directory() . '/includes/tgmpa/tgmpa-configuration.php');

//load stylesheets
function load_css() {

  wp_register_style('slick', get_template_directory_uri() . '/asset/css/slick.css',
    array(), false, 'all');
  wp_enqueue_style('slick');

  wp_register_style('slick-theme', get_template_directory_uri() . '/asset/css/slick-theme.css',
    array(), false, 'all');
  wp_enqueue_style('slick-theme');

  wp_register_style('style', get_template_directory_uri() . '/public/style.css',
    array(), false, 'all');
  wp_enqueue_style('style');

  wp_register_style('main', get_template_directory_uri() . '/asset/css/main.css',
      array(), false, 'all');
  wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');


//load javascripts
function load_js() {

  wp_register_script('query', get_template_directory_uri() . '/asset/js/jquery-3.3.1.min.js',
    'jquery', false, true);
  wp_enqueue_script('query'); 

  wp_register_script('slick', get_template_directory_uri() . '/asset/js/slick.min.js',
    'jquery', false, true);
  wp_enqueue_script('slick');

  wp_register_script('custom', get_template_directory_uri() . '/asset/js/custom.js',
    'jquery', false, true);
  wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts','load_js');


// Theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menu
register_nav_menus(

    array(
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
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

 register_sidebar(
  array(
    'name' => 'Footer sidebar',
    'id' => 'footer-sidebar',
  )
  );

  register_sidebar(
    array(
      'name' => 'Footer sidebar 2',
      'id' => 'footer-sidebar-2',
    )
    );

}
add_action('widgets_init','my_sidebars');

//custom logo
function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 60,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
 'unlink-homepage-logo' => true, 
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


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


//custom post (courses)
function courses_post_type() {
 $args = array(
    'labels'      => array(
      'name'          => 'Courses',
      'singular_name' => 'Course',
    ),
    'public'      => true,
    'hierarchical' => true,
    'has_archive' => true,
    'rewrite'     => array( 'slug' => 'courses' ),
    'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
    
  );
  register_post_type('courses', $args );
}
add_action('init', 'courses_post_type');

//course taxonomies(courses)
function course_taxonomy() {
  $labels = array(
      'name'              => 'Courses Category', 
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

// custom post(praise)
function praises_post_type() {
  $args = array(
     'labels'      => array(
       'name'          => 'Praises',
       'singular_name' => 'Praise',
     ),
     'public'      => true,
     'hierarchical' => true,
     'has_archive' => true,
     'rewrite'     => array( 'slug' => 'praises' ),
     'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
     
   );
   register_post_type('praises', $args );
 }
 add_action('init', 'praises_post_type');

 //praise taxonomies(praises)
function praise_taxonomy() {
  $labels = array(
      'name'              => 'Praises Category', 
      'singular_name'     => 'category',
      'search_items'      => __( 'Search praises' ),
      'all_items'         => __( 'All praises' ),
      'parent_item'       => __( 'Parent praise' ),
      'parent_item_colon' => __( 'Parent praise:' ),
      'edit_item'         => __( 'Edit praise' ),
      'update_item'       => __( 'Update praise' ),
      'add_new_item'      => __( 'Add New praise' ),
      'new_item_name'     => __( 'New praise Name' ),
      'menu_name'         => __( 'praise' ),
  );
  $args   = array(
      'hierarchical'      => true, // make it hierarchical (like categories)
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => [ 'slug' => 'praise' ],
  );
  register_taxonomy( 'praise', [ 'praises' ], $args );
}
add_action( 'init', 'praise_taxonomy' );

// custom post(sessions)
function sessions_post_type() {
  $args = array(
     'labels'      => array(
       'name'          => 'Sessions',
       'singular_name' => 'session',
     ),
     'public'      => true,
     'hierarchical' => true,
     'has_archive' => true,
     'rewrite'     => array( 'slug' => 'sessions' ),
     'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
     
   );
   register_post_type('sessions', $args );
 }
 add_action('init', 'sessions_post_type');

 //session taxonomies
function session_taxonomy() {
  $labels = array(
      'name'              => 'Sessions Category', 
      'singular_name'     => 'category',
      'search_items'      => __( 'Search sessions' ),
      'all_items'         => __( 'All sessions' ),
      'parent_item'       => __( 'Parent session' ),
      'parent_item_colon' => __( 'Parent session:' ),
      'edit_item'         => __( 'Edit session' ),
      'update_item'       => __( 'Update session' ),
      'add_new_item'      => __( 'Add New session' ),
      'new_item_name'     => __( 'New session Name' ),
      'menu_name'         => __( 'session' ),
  );
  $args   = array(
      'hierarchical'      => true, // make it hierarchical (like categories)
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => [ 'slug' => 'session' ],
  );
  register_taxonomy( 'session', [ 'sessions' ], $args );
}
add_action( 'init', 'session_taxonomy' );

//custom post (books)
function books_post_type() {
  $args = array(
     'labels'      => array(
       'name'          => 'Books',
       'singular_name' => 'Book',
     ),
     'public'      => true,
     'hierarchical' => true,
     'has_archive' => true,
     'rewrite'     => array( 'slug' => 'books' ),
     'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
     
   );
   register_post_type('books', $args );
 }
 add_action('init', 'books_post_type');
 
 //book taxonomies(books)
 function book_taxonomy() {
   $labels = array(
       'name'              => 'Books Category', 
       'singular_name'     => 'category',
       'search_items'      => __( 'Search books' ),
       'all_items'         => __( 'All Books' ),
       'parent_item'       => __( 'Parent book' ),
       'parent_item_colon' => __( 'Parent book:' ),
       'edit_item'         => __( 'Edit book' ),
       'update_item'       => __( 'Update book' ),
       'add_new_item'      => __( 'Add New book' ),
       'new_item_name'     => __( 'New book Name' ),
       'menu_name'         => __( 'book' ),
   );
   $args   = array(
       'hierarchical'      => true, // make it hierarchical (like categories)
       'labels'            => $labels,
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => [ 'slug' => 'book' ],
   );
   register_taxonomy( 'book', [ 'books' ], $args );
 }
 add_action( 'init', 'book_taxonomy' );

 //custom post (tools)
function tools_post_type() {
  $args = array(
     'labels'      => array(
       'name'          => 'Tools',
       'singular_name' => 'Book',
     ),
     'public'      => true,
     'hierarchical' => true,
     'has_archive' => true,
     'rewrite'     => array( 'slug' => 'tools' ),
     'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
     
   );
   register_post_type('tools', $args );
 }
 add_action('init', 'tools_post_type');


 // Assign front page and posts page (blog page).
 function ocdi_after_import_setup() {
 
  $front_page_id = get_page_by_title( 'Front page' );
  $blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );

//demo content

function ocdi_import_files() {
  return array(
      array(
          'import_file_name'           => 'Demo Import',
          'categories'                 => array( 'Category 1', 'Category 2' ),
          'import_file_url'            => get_template_directory_uri().'/Duromedia-demo-import/duromediaacademy.WordPress.2021-02-01',
          'import_widget_file_url'     => get_template_directory_uri().'/Duromedia-demo-import/tailwind---wordpress.test-widgets',
          'import_customizer_file_url' => get_template_directory_uri().'/Duromedia-demo-import/Duromedia-export',
          
      )
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

?>