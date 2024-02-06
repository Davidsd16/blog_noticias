<?php require "header.view.php"; ?>

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
            <p class="extracto">Quisque tempus rhoncus nunc vitae ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                Aenean efficitur felis et urna pellentesque interdum. Praesent felis mi, porta non pretium ut, fermentum nec arcu.
                Morbi aliquam, libero a iaculis convallis, sem mauris tristique tortor, sit amet porta velit turpis ac augue.
                Nunc nec lectus purus. Nunc pretium, libero eget dapibus sodales, elit est venenatis libero, eget vehicula tortor nulla non neque.
                Etiam ut pulvinar lectus.
            </p>
            <p>
                Donec interdum odio sit amet magna maximus pulvinar. Cras cursus ante at mattis gravida. Nunc sed porta augue.
                Nunc eget pellentesque leo. Duis vitae mi urna. Etiam diam enim, scelerisque sed lectus et, vulputate euismod lectus.
                Vivamus pellentesque, ex ut finibus condimentum, erat nunc ullamcorper libero, eget congue mi tortor vel sapien.
                Proin luctus tortor vitae felis suscipit, viverra eleifend odio malesuada. Duis neque tortor, pulvinar quis leo id, tempor pharetra risus.
            </p>                    
        </article>
    </div>
</div>

<?php require "footer.view.php"; ?>
