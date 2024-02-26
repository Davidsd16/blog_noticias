<!-- Incluye el encabezado de la página -->
<?php require 'header.view.php'; ?> 

<div class="contenedor">
    <div class="post">
        <article>
			<!-- Título del formulario -->
            <h2 class="titulo">Nuevo Articulo</h2> 
			<!-- Formulario para crear un nuevo artículo -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
                <!-- Campo para ingresar el título del artículo -->
                <input type="text" name="titulo" placeholder="Titulo del Articulo">
				<!-- Campo para ingresar el extracto del artículo -->
                <input type="text" name="extracto" placeholder="Extracto del Articulo">
				<!-- Campo para ingresar el texto del artículo -->
                <textarea name="texto" placeholder="Texto del Articulo"></textarea>
				<!-- Campo para seleccionar una imagen como miniatura del artículo -->
                <input type="file" name="thumb">
				<!-- Botón para enviar el formulario y crear el artículo --> 
                <input type="submit" value="Crear Articulo"> 
            </form>
        </article>
    </div>
</div>
<!-- Incluye el pie de página de la página -->
<?php require 'footer.php'; ?> 
