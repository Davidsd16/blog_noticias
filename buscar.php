<?php
// Se incluyen los archivos de configuración y controlador
require 'admin/config.php';
require 'controller/controller.php';

// Se establece la conexión a la base de datos utilizando la configuración proporcionada
$conexion = conexion($bd_config);

// Si no se puede establecer la conexión, se redirige a la página de error
if (!$conexion) {
    header('Location: error.php');
}

// Verificar si se ha enviado una solicitud GET y si el parámetro 'busqueda' no está vacío
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) { 

    // Limpiar los datos del parámetro de búsqueda para evitar inyección de SQL
    $busqueda = limpiarDatos($_GET['busqueda']);

    // Preparar una consulta SQL para buscar en los títulos y textos de los artículos
    $statement = $conexion->prepare("SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda"); 

    // Ejecutar la consulta con el parámetro de búsqueda limpio
    $statement->execute(array(':busqueda' => "%$busqueda%"));

    // Obtener todos los resultados de la consulta
    $resultados = $statement->fetchAll();

    // Si no se encuentran resultados, se establece un mensaje indicando que no se encontraron artículos
    if (empty($resultados)) {
        $titulo = 'No se encontraron artículos con el resultado '. $busqueda;
    } else {
        // Si se encuentran resultados, se establece un mensaje con el resultado de la búsqueda
        $titulo = 'Resultado de la búsqueda: ' . $busqueda;
    }

} else {
    // Si no se ha enviado una solicitud GET o el parámetro 'busqueda' está vacío, se redirige a la página de inicio
    header('Location: ' . RUTA . '/index.php');
}

// Se incluye la vista de búsqueda para mostrar los resultados
require 'views/buscar.view.php';
?>
