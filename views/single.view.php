<?php require "header.view.php"; ?>

<div class="contenedor">
    <!-- Contenedor principal para el artículo -->
    <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <!-- Título del artículo -->
            <h2 class="titulo"><?php echo $post['titulo'] ?></h2>
            <!-- Fecha de publicación -->
            <p class="fecha"><?php echo fecha($post['fecha']) ?>

            <!-- Contenedor para la imagen destacada -->
            <div class="thumb">
                    <!-- Imagen destacada del artículo -->
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" alt="<?php echo $post['titulo'] ?>">
            </div>

            <!-- Extracto del artículo -->
            <p class="extracto"><?php echo nl2br($post['texto']) ?>                  
        </article>
    </div>
</div>

<?php require "footer.view.php"; ?>
