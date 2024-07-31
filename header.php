<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
<!-- Navegador -->
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Marca del sitio y botón de hamburguesa -->
            <a class="navbar-brand ms-3" href="#">
                <!-- Logo a la izquierda -->
                <img src="<?php bloginfo('template_url'); ?>/imagen/Logo-UART.png" alt="Logo UNPA UART" class="header-logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Listado -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Institucional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Educación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Extensión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investigación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://music.youtube.com/">Bienestar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- FIN Navegador -->                
