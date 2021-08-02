<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <?php
    // Necesario para incluir los estilos entre otros.
    wp_head(); ?>
</head>

<body>

    <header class="site-header">
        <div class="container">

            <div class="row">
                <div class="col-md">

                    <div id="barra-nav" class="barra-navegacion">
                        <div class="logo">
                            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </header>