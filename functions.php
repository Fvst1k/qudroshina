<?php

add_action('wp_enqueue_scripts', 'addStyle');

function addStyle()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery',get_template_directory_uri() . '/assets/js/jquery.js' );
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'),'null',true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('slick'),'null',true);
    wp_enqueue_style('swiper-bundle.min.css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

}

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function custom_excerpt_length($excerpt){
    $characters = 350; // Количество символов
    if (strlen($excerpt) > $characters) {
        return substr($excerpt, 0, strpos($excerpt, ' ', $characters));
    }
    return $excerpt;
}

add_filter('the_excerpt', 'custom_excerpt_length');

?>