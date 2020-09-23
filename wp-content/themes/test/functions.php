<?php
//http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js

add_action('wp_enqueue_scripts', 'set_style');
add_action('after_setup_theme', 'set_menu');
add_action('widgets_init', 'register_my_widgets');
add_shortcode( 'mycode', function (){
	return 'bla-bla-bla-bla-bla-bla-bla-bla-bla-bla';
});



function register_my_widgets(){
    register_sidebar( array(
        'name'          => "Сайдбар",
        'id'            => "sidebar",
        'description'   => 'Супер сайдбар',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5>',
        'after_title'   => "</h5>\n",
    ) );
}

function set_menu(){
    register_nav_menu("menuHeader", "Место в header");
    register_nav_menu("menuFooter", "Место в footer");

    add_theme_support( 'post-thumbnails' );
//    add_theme_support('custom-logo');
}

function set_style(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style( 'default', get_template_directory_uri() . "/assets/css/default.css");
    wp_enqueue_style( 'fonts', get_template_directory_uri() . "/assets/css/fonts.css");
    wp_enqueue_style( 'layout', get_template_directory_uri() . "/assets/css/layout.css");
    wp_enqueue_style( 'queries', get_template_directory_uri() . "/assets/css/media-queries.css");




    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . "/assets/js/doubletaptogo.js", array(), 1, true);
    wp_enqueue_script('init', get_template_directory_uri() . "/assets/js/init.js", array(), 1, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . "/assets/js/jquery.flexslider.js", array(), 1, true);
    wp_enqueue_script('migrate', get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js", array(), 1, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . "/assets/js/modernizr.js", array(), 1, true);
    wp_enqueue_script('my', get_template_directory_uri() . "/assets/js/my_script.js", array(), 1, true);
    wp_enqueue_script("jquery");
}
