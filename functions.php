<?php 

//load stylesheets
function load_css() {

    wp_register_style('style', get_template_directory_uri() . '/public/style.css',
      array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_css');

?>