<?php
// wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/reset.css');
//wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
?>
