<?php


add_action('wp_enqueue_scripts', 'set_style');
function set_style(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style( 'default', get_template_directory_uri() . "/assets/default.css");
    wp_enqueue_script('script', get_template_directory_uri() . "/assets/script_sp.js", array(), 1, true);
}
