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

// Verificamos si la solicitud se realizó mediante el método POST
if ($_SERVER['REQUEST_METHOD' == 'POST']) {
    // Recuperamos y limpiamos los datos del formulario
    $titulo = limpiarDatos($_POST['titulo']); // Título del artículo
    $extracto = limpiarDatos($_POST['extracto']); // Extracto del artículo
    $texto = $_POST['texto']; // Texto completo del artículo
    $id = limpiarDatos($_POST['id']); // ID del artículo a modificar
    $thumb_guardada = $_POST['thumb-guardada']; // Nombre de la imagen guardada actualmente
    $thumb = $_FILES['thumb']; // Archivo de la nueva imagen
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
