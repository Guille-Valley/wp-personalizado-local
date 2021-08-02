<?php
/**
 * Template Name: Página de producto
 */
// El comentario de arriba es necesario 
// para que WP detecte la platnilla y poder ser seleccionada en el tipo de contenido: páginas.

get_header(); ?>

<main class="container ">
    <div class="row">
        <div class="col-md">
            <?php get_template_part('template-parts/paginas'); ?>
            <?php personalizado_lista_productos(); ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>