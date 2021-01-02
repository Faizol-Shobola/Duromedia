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

?>