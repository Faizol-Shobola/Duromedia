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

// Menu
register_nav_menus(

    array(
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
    )

);

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

?>