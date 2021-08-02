<?php
function personalizado_lista_productos()
{ ?>
    <ul class="lista-clases">
        <?php
        // Consulta a la BBDD para obtener los resultados del tipo de contenido creado en el plugin.
        $args = array(
            'post_type' => 'softplus_productos',
            'posts_per_page' => 10
        );

        $productos = new WP_Query($args);
        while ($productos->have_posts()) : $productos->the_post(); ?>
            <li>
                <h1><?php the_title(); ?></h1>
            </li>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </ul>
<?php } ?>

<?php
function personalizado_menu_principal()
{
    // Creamos el menú de navegación.
    $args = array(
        'theme_location' => 'menu-principal',
        'container_id' => 'navbarSupportedContent',
        //'container' => 'nav', <div> por defecto.
        'container_class' => 'collapse navbar-collapse',
        //'menu_id' => 'ul-id',
        'menu_class' => 'navbar-nav mr-auto', // clases css para etiquela <ul>
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker()
    );
    // Invocamos el menú creado arriba.
    wp_nav_menu($args);
}


?>