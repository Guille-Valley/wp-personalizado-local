<?php

/**
 * Plugin Name: Efor - Post Types
 * Plugin URI:
 * Description: Añade Post Types al sitio web.
 * Author: Efor
 * Author URI:
 * Text Domain: softplus
 */

if (!defined('ABSPATH')) die();


// Registrar Custom Post Type
function softplus_productos_post_type()
{

    $labels = array(
        'name'                  => _x('Productos', 'Post Type General Name', 'softplus'),
        'singular_name'         => _x('Producto', 'Post Type Singular Name', 'softplus'),
        'menu_name'             => __('Productos', 'softplus'),
        'name_admin_bar'        => __('Producto', 'softplus'),
        'archives'              => __('Archivo', 'softplus'),
        'attributes'            => __('Atributos', 'softplus'),
        'parent_item_colon'     => __('Producto Padre', 'softplus'),
        'all_items'             => __('Todos los Productos', 'softplus'),
        'add_new_item'          => __('Agregar Producto', 'softplus'),
        'add_new'               => __('Agregar Producto', 'softplus'),
        'new_item'              => __('Nueva Producto', 'softplus'),
        'edit_item'             => __('Editar Producto', 'softplus'),
        'update_item'           => __('Actualizar Producto', 'softplus'),
        'view_item'             => __('Ver Producto', 'softplus'),
        'view_items'            => __('Ver Productos', 'softplus'),
        'search_items'          => __('Buscar Producto', 'softplus'),
        'not_found'             => __('No Encontrado', 'softplus'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'softplus'),
        'featured_image'        => __('Imagen Destacada', 'softplus'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'softplus'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'softplus'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'softplus'),
        'insert_into_item'      => __('Insertar en Producto', 'softplus'),
        'uploaded_to_this_item' => __('Agregado en Producto', 'softplus'),
        'items_list'            => __('Lista de Productos', 'softplus'),
        'items_list_navigation' => __('Navegación de Productos', 'softplus'),
        'filter_items_list'     => __('Filtrar Productos', 'softplus'),
    );
    $args = array(
        'label'                 => __('Producto', 'softplus'),
        'description'           => __('Productos para el Sitio Web', 'softplus'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('softplus_productos', $args);
}
add_action('init', 'softplus_productos_post_type');
