<!-- Incluye el encabezado de la página -->
<?php require 'header.view.php';?> 

<div class="contenedor">
    <div class="post">
        <article>
			<!-- Título del formulario para editar un artículo -->
            <h2 class="titulo">Editar Artículo</h2> 
			<!-- Formulario para editar un artículo -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
            
                <!-- Campo oculto para almacenar el ID del artículo -->
                <input type="hidden" name="id" value="<?php echo $articulo['id']; ?>">
                <!-- Campo para ingresar el título del artículo -->
                <input type="text" name="titulo" value="<?php echo $articulo['titulo']; ?>">
				<!-- Campo para ingresar el extracto del artículo -->
                <input type="text" name="extracto" value="<?php echo $articulo['extracto']; ?>">
				<!-- Campo para ingresar el texto del artículo -->
                <textarea name="texto"><?php echo $articulo['texto']; ?></textarea>
				<!-- Campo para seleccionar una nueva imagen como miniatura del artículo -->
                <input type="file" name="thumb">

                <!-- Campo oculto para almacenar la imagen actual del artículo -->
                <input type="hidden" value="" name="thumb-guardada" value="<?php echo $articulo['thumb']; ?>">
				<!-- Botón para enviar el formulario y modificar el artículo --> 
                <input type="submit" value="Modificar Artículo"> 
            </form>
        </article>
    </div>
</div>
<!-- Incluye el pie de página de la página -->
<?php require 'footer.php'; ?> 
