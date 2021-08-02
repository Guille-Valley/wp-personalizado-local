<?php get_header(); ?>

<?php
/** Campo ACF */
$tituloMarca = get_field('titulo_marca') ?>

<?php get_template_part('template-parts/paginas'); ?>

<?php if ($tituloMarca) : ?>
    <h1><?php echo $tituloMarca ?></h1>
<?php endif; ?>

<?php get_sub_field('caracteristica_dos') ?>



<?php

$carcarteristicas = get_field('caracteristicas');
echo '<pre>';
print_r($carcarteristicas);
echo '</pre>';
echo '<hr>';
$caracDos = $carcarteristicas['caracteristica_dos'];
var_dump($caracDos);
echo '<hr>';
$txtCaracDos = $caracDos['texto_caracteristica_dos'];
$imgCaracDos = wp_get_attachment_image(95, 'full');


echo $txtCaracDos;
echo $imgCaracDos;
echo '<hr>';
echo $carcarteristicas['caracteristica_dos']['texto_caracteristica_dos'];
echo wp_get_attachment_image($carcarteristicas['caracteristica_dos']['imagen_caracteristica_dos'], 'full');

?>



<?php get_footer(); ?>