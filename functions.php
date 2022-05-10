<?php

///function myFunction(){

}
///myfunction(){

}

function enqueue_my_styles_and_scripts(){

  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() .
  '/wp-theme/index.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');

 ?>
