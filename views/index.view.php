<?php require "header.view.php"; ?>

<div class="contenedor">
    <?php foreach($articulos as $articulo): ?>
        <!-- Contenedor principal para el artículo -->
        <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <!-- Título del artículo -->
            <h2 class="titulo"><a href="single.php?id=<?php echo $articulo['id'];?>"><?php echo $articulo['titulo'];?></a>
            <!-- Fecha de publicación -->
            <p class="fecha"><?php echo $articulo['fecha'];?></p>

            <!-- Contenedor para la imagen destacada -->
            <div class="thumb">
                <!-- Enlace a la imagen (puede redirigir a la página completa del artículo) -->
                <a href="single.php?id=<?php echo $articulo['id'];?>">
                    <!-- Imagen destacada del artículo -->
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $articulo['thumb']; ?>" alt="">
                </a>
            </div>

            <!-- Extracto del artículo -->
            <p class="extracto"><?php echo $articulo['extracto'];?></p>

            <!-- Enlace para continuar leyendo (puede redirigir a la página completa del artículo) -->
            <a href="single.php?id=<?php echo $articulo['id'];?>" class="continuar">Leer más...</a>
        </article>
    </div>
    <?php endforeach; ?>


    <?php require "paginacion.php"; ?>
</div>

<?php require "footer.view.php"; ?>
