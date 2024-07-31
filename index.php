    <?php get_header(); ?>

	<!-- Contenido -->

    <!-------------------------    Carrusel    ------------------------->
    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4 pt-4">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>


    <!-------------------------    Noticias    ------------------------->
    <div class="container mt-2 pt-2" id="news-section">
        <div class="titulo"><h1>NOTICIAS</h1></div>
        <div class="row">
            <!-- Articulo -->
            
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card news-card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Innovaciones en Educación</h4>
                        <p class="card-text">Nuevas metodologías y tecnologías revolucionan el aprendizaje en el aula.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Extensión → </small> <small class="text-muted"> Fecha: 19 agosto 2024</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/UACO.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">1234567891123456789112345</h4> <!-- 25 caracteres = 1 renglon -->
                        <p class="card-text">presentacionbakdnasjdnaksndjansjdknajksndkansdjansdkjnasjkdnkasndkjansd de la carta1</p> <!-- 84 caracteres = 2 renglones -->
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fechakdsandlnaslkdnalskdnaklsndklnaskdnalksndlka</small> <!-- 48 caracteres = 1 renglon -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uarg.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/UASJ.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_url'); ?>/imagen/uart.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Titulo de carta</h4>
                        <p class="card-text">presentacion de la carta</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha / Autor</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------------    Oferta academica    ------------------------->
    <div class="container mt-2 pt-2">
        <div class="academica">
            <h1 class="text-center mb-4">OFERTA ACADÉMICA</h1>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
            <!-- Tarjeta 1 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-1">
                        <div class="icono">
                            <i class="fa-solid fa-computer"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">SISTEMAS E INFORMÁTICA</h6>
                        </div>
                    </div>
                    <div class="detalle">
                        <i class="icono-fondo fa-solid fa-microchip"></i>
                        <ul>
                            <a href=""><li class="detalle-item">016 Analista de Sistemas</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion dos">
                    <div class="contenido-tarjeta color-2">
                        <div class="icono">
                            <i class="fa-solid fa-calculator"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">ADMINISTRACIÓN Y ECONOMÍA</h6>
                        </div>
                    </div>
                    <div class="detalle">
                        <i class="icono-fondo fa-solid fa-money-check-dollar"></i>
                        <ul>
                            <a href=""><li class="detalle-item">913 Licenciatura en Administración</li></a>
                            <a href=""><li class="detalle-item">914 Profesorado en Economía y Gestión de Organizaciones</li></a>
                            <a href=""><li class="detalle-item">912 Tecnicatura Universitaria en Gestión de Organizaciones</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-3">
                        <div class="icono">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">INGENIERÍA Y PREVENCIÓN DE RIESGOS</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-fire"></i>
                        <ul>
                            <a href=""><li class="detalle-item">079 Tecnicatura Universitaria en Energía</li></a>
                            <a href=""><li class="detalle-item">078 Tecnicatura Universitaria en Minas</li></a>
                            <a href=""><li class="detalle-item">916 Tecnicatura Universitaria en Seguridad e Higiene en el Trabajo</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-4">
                        <div class="icono">
                            <i class="fa-brands fa-pagelines"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">RECURSOS NATURALES</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-tree"></i>
                        <ul>
                            <a href=""><li class="detalle-item">071 Tecnicatura Orientado a Producción Agropecuaria</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 5 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-5">
                        <div class="icono">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">TRABAJO SOCIAL</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-ear-listen"></i>
                        <ul>
                            <a href=""><li class="detalle-item">074 Licenciatura en Trabajo Social</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion ">
                    <div class="contenido-tarjeta color-6">
                        <div class="icono">
                            <i class="fa-solid fa-person-hiking"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">TURISMO</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-earth-americas"></i>
                        <ul>
                            <a href=""><li class="detalle-item">061 Licenciatura en Turismo</li></a>
                            <a href=""><li class="detalle-item">062 Tecnicatura Universitaria en Turismo</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 7 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-7">
                        <div class="icono">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">EDUCACIÓN</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-pen-clip"></i>
                        <ul>
                            <a href=""><li class="detalle-item">086 Profesorado para la Educación Inicial</li></a>
                            <a href=""><li class="detalle-item">084 Profesorado para la Educación Primaria</li></a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 8 -->
            <div class="col mb-4">
                <div class="tarjeta-presentacion">
                    <div class="contenido-tarjeta color-8">
                        <div class="icono">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div class="contenido">
                            <h6 class="titulo">ENFERMERÍA</h6>
                        </div>
                    </div>
                    <div class="detalle">
                    <i class="icono-fondo fa-solid fa-suitcase-medical"></i>
                        <ul>
                            <a href=""><li class="detalle-item">093 Licenciatura en Enfermería</li></a>
                            <a href=""><li class="detalle-item">046 Enfermería Universitaria</li></a>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


	<!-- FIN Contenido -->

    <?php get_footer(); ?>