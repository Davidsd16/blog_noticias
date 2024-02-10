<?php
// Incluye el encabezado de la página
require '../views/header.view.php';
?>

<div class="contenedor">
    <h2>Panel de Control</h2>
    <!-- Enlace para crear un nuevo artículo -->
    <a href="nuevo.php" class="btn">Nuevo artículo</a>
    <!-- Enlace para cerrar sesión -->
    <a href="cerrar.php" class="btn">Cerrar Sesión</a>

    <?php foreach($articulos as $articulo): ?>
        <!-- Contenedor principal para el artículo -->
        <div class="post">
            <!-- Etiqueta de artículo -->
            <article>
                <!-- Título del artículo -->
                <h2 class="titulo"><?php echo $articulo['id'] . '-' . $articulo['titulo']; ?></h2>
                <!-- Enlace para editar el artículo -->
                <a href="editar.php?id=<?php $articulo['id']; ?>">Editar</a>
                <!-- Enlace para ver el artículo -->
                <a href="../single.php?id=<?php $articulo['id']; ?>">Ver</a>
                <!-- Enlace para borrar el artículo -->
                <a href="borrar.php?id=<?php $articulo['id']; ?>">Borrar</a>
            </article>
        </div>
    <?php endforeach; ?>

    <!-- Incluye la paginación -->
    <?php require "../paginacion.php"; ?>
</div>

<?php
// Incluye el pie de página de la página
require "../views/footer.view.php";
?>
