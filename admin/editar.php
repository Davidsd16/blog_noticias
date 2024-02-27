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

    // Verificamos si se ha seleccionado una nueva imagen para el artículo
    if (empty($thumb['name'])) {
        // Si no se seleccionó una nueva imagen, conservamos la imagen anterior
        $thumb = $thumb_guardada;
    } else {
        // Si se seleccionó una nueva imagen, la movemos al directorio de imágenes y actualizamos el nombre de la imagen
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name']; // Ruta del archivo en el servidor
        // Movemos el archivo al directorio especificado
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido); 
        // Actualizamos el nombre de la imagen
        $thumb = $_FILES['thumb']['name']; 
    }

    // Preparamos la consulta SQL para actualizar los datos del artículo en la base de datos
    $statement = $conexion->prepare('UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb WHERE id = :id');

    // Ejecutamos la consulta SQL con los datos actualizados del artículo
    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb,
        ':id' => $id
    ));

    // Redirigimos de vuelta al panel de administración después de actualizar el artículo
    header("Location: " . RUTA . '/admin');

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
