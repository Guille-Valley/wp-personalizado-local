<?php

// Register Custom Navigation Walker.
require_once('class-wp-bootstrap-navwalker.php');

// Consultas reutilizables.
require get_template_directory() . '/inc/queries.php';

// Cuando el tema es activado.
function personalizado_setup()
{
    // Habilitar imagen destacada.
    add_theme_support('post-thumbnails');
    // Agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'personalizado_setup');

// Srcipts y Styles.
function personalizado_scripts_styles()
{

    // Hoja de estilos normalize.
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    
    //wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.css', array(), '1.0.0');
    
    // Fuentes de Google.
    wp_enqueue_style('Google_Heebo', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900', array(), '1.0.0');
    // Hoja de CSS Bootstrap.
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0');
    // Hoja de JS Bootstrap.
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);

    // Hoja de estilos principal.
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('normalize', 'Google_Heebo'), '1.0.0');

    //wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'personalizado_scripts_styles');

// Menus de navegación, agregar más si se quiere dentro del array.
function personalizado_menus()
{
    register_nav_menus(array(
        // Las dos barras bajas indican que el texto se puede traducir a otro idioma. y se le debe poner el 'Text Domain' declarado en el style.css
        'menu-principal' => __('Menu Principal', 'personalizado')
    ));
}
// Hook para utilizar la función. init, invoca la función nada más carga WP. Mejor par aplugins.
// Hook after_setup_theme, parecido a init, pero mejor para menus.
add_action('after_setup_theme', 'personalizado_menus');


/**
 * Cambiar los [...] de the_excerpt()
 */

function new_excerpt_more( $more ) {
	return '<span class="dashicons dashicons-arrow-down-alt2"></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');
