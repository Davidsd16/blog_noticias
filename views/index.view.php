<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Enlaces a fuentes y estilos externos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">

    <!-- Título de la página -->
    <title>Blog Noticias</title>
</head>
<body>
    <!-- Encabezado de la página -->
    <header>
        <!-- Contenedor principal del encabezado -->
        <div class="contenedor">
            <!-- Logo del blog en la parte izquierda -->
            <div class="logo izquierda">
                <p><a href="#">Ultimas Noticias</a></p>
            </div>

            <!-- Contenido en la parte derecha del encabezado -->
            <div class="derecha">
                <!-- Formulario de búsqueda -->
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <!-- Menú de redes sociales y contacto -->
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#">Contacto<i class=" icono fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenedor">
    <!-- Contenedor principal para el artículo -->
    <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <!-- Título del artículo -->
            <h2 class="titulo">Titulo del articulo</h2>
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
            <a href="#" class="continuar">Continuar leyendo...</a>
        </article>
    </div>
</div>

</body>
</html>
