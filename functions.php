<?php
function encolar_estilos_y_scripts_personalizados() {
    wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
    wp_enqueue_style('mi-nuevo-style', get_template_directory_uri() . '/css/personalizado.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/awesome/css/all.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
    //wp_enqueue_script('personalizado-js', get_template_directory_uri() . '/js/personalizado.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/boots/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'encolar_estilos_y_scripts_personalizados');
