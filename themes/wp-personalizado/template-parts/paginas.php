<?php while (have_posts()) : the_post(); ?>

    <h1> <?php the_title(); ?> </h1>
    <?php
    if (has_post_thumbnail()) :
        the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
    endif;
    ?>

<?php
/**
 * Revisar si el custom post type es uno en concreto
 */
if(get_post_type() === 'softplus_productos'){
    $campoUno = get_field('campoBBDD');

    the_field('campo');
}

?>


    <?php the_content(); ?>
<?php endwhile; ?>