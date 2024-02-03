<?php require "header.view.php"; ?>

<div class="contenedor">
    <!-- Contenedor principal para el artículo -->
    <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <!-- Título del artículo -->
            <h2 class="titulo"><a href="#">Titulo del articulo</a>
            <!-- Fecha de publicación -->
            <p class="fecha">1 Enero 2020</p>

            <!-- Contenedor para la imagen destacada -->
            <div class="thumb">
                <!-- Enlace a la imagen (puede redirigir a la página completa del artículo) -->
                <a href="#">
                    <!-- Imagen destacada del artículo -->
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>

            <!-- Extracto del artículo -->
            <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, deleniti ipsam.
                Voluptatum minima rerum dolorem earum, id voluptates veritatis consectetur temporibus.
                Harum obcaecati tenetur dolorem, in cum enim quidem deserunt.
            </p>

            <!-- Enlace para continuar leyendo (puede redirigir a la página completa del artículo) -->
            <a href="#" class="continuar">Leer más...</a>
        </article>
    </div>

    <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <!-- Título del artículo -->
            <h2 class="titulo"><a href="#">Titulo del articulo</a>
            <!-- Fecha de publicación -->
            <p class="fecha">1 Enero 2020</p>

            <!-- Contenedor para la imagen destacada -->
            <div class="thumb">
                <!-- Enlace a la imagen (puede redirigir a la página completa del artículo) -->
                <a href="#">
                    <!-- Imagen destacada del artículo -->
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>

            <!-- Extracto del artículo -->
            <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, deleniti ipsam.
                Voluptatum minima rerum dolorem earum, id voluptates veritatis consectetur temporibus.
                Harum obcaecati tenetur dolorem, in cum enim quidem deserunt.
            </p>

            <!-- Enlace para continuar leyendo (puede redirigir a la página completa del artículo) -->
            <a href="#" class="continuar">Leer más...</a>
        </article>
    </div>

    <?php require "paginacion.php"; ?>
</div>

<?php require "footer.view.php"; ?>
