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

// Verificamos si se reciben datos por el método POST
if ($_SERVER['REQUEST_METHOD' == 'POST']) {
    # code...
} else {
    // Obtenemos el ID del artículo a editar
    $id_articulo = idArticulo($_GET['id']);

    // Verificamos si se encontró un ID válido
    if (empty($id_articulo)) {
        // Si no se encontró un ID válido, redirigimos al panel de control
        header('Location: ' . RUTA . '/admin');
    }

    // Obtenemos los datos del artículo por su ID
    ObtenerArticuloPorId($conexion, $id_articulo);

    // Verificamos si se encontraron datos del artículo
    if (!$articulo) {
        // Si no se encontraron datos del artículo, redirigimos al panel de control
        header('Location: ' . RUTA . '/admin');
    }

    // Guardamos los datos del artículo en una variable
    $articulo = $articulo[0];
}

// Requerimos la vista de edición del artículo
require '../views/editar.view.php';
?>
