<?php

// Iniciamos la sesión
session_start();

// Requerimos el archivo de configuración y el controlador
require 'config.php';
require '../controller/controller.php';

// Verificamos si la sesión está iniciada, si no, redirigimos al usuario
comprobarSesion();

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
    // Si hay un problema con la conexión, redirigimos a la página de error
	header('Location: ../error.php');
}

// Verificamos si se han enviado datos a través del método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Limpiamos y obtenemos los datos del formulario
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = $_POST['texto'];
	$thumb = $_FILES['thumb']['tmp_name'];

	// Definimos la ubicación final del archivo incluyendo el nombre
	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

	// Movemos el archivo al destino final
	move_uploaded_file($thumb, $archivo_subido);

	// Preparamos la consulta SQL para insertar el nuevo artículo en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO articulos (id, titulo, extracto, texto, thumb) 
		VALUES (null, :titulo, :extracto, :texto, :thumb)'
	);

	// Ejecutamos la consulta con los datos del formulario
	$statement->execute(array(
		':titulo' => $titulo,
		':extracto' => $extracto,
		':texto' => $texto,
		':thumb' => $_FILES['thumb']['name']
	));

	// Redirigimos al usuario de vuelta al panel de control después de agregar el artículo
	header('Location: admin_index.php');
}

// Requerimos la vista del formulario para crear un nuevo artículo
require '../views/nuevo.view.php';

?>
