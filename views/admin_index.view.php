<?php require '../views/header.view.php'; ?>

<div class="contenedor">
    <h2>Panel de Control</h2>
    <?php foreach($articulos as $articulo): ?>
        <!-- Contenedor principal para el artículo -->
        <div class="post">
        <!-- Etiqueta de artículo -->
        <article>
            <h2 class="titulo"><?php echo $articulo['id'] . '-' . $articulo['titulo']; ?></h2>
            <a href="#">Editar</a>
            <a href="#">Ver</a>
            <a href="#">Borrar</a>
        </article>
    </div>
    <?php endforeach; ?>


    <?php require "../paginacion.php"; ?>
</div>

<?php require "../views/footer.view.php"; ?>
