<?php

// Se requieren los archivos de configuración y controlador necesarios para el funcionamiento del sistema
require 'admin/config.php';
require 'controller/controller.php';

// Se intenta establecer una conexión a la base de datos utilizando la función 'conexion' del controlador
$conexion = conexion($bd_config);

// Se obtiene el ID del artículo de la variable $_GET['id'] y se asegura de que sea un entero
$id_articulo = idArticulo($_GET['id']);

// Si la conexión a la base de datos falla, se redirige al usuario a una página de error
if (!$conexion) {
    header('Location: error.php');
}

// Si el ID del artículo no es válido, se redirige al usuario de vuelta a la página principal
if (!$id_articulo) {
    header('Location: index.php');
}

// Se intenta obtener el artículo específico de la base de datos utilizando su ID
$post = ObtenerArticuloPorId($conexion, $id_articulo);

// Si no se puede encontrar el artículo, se redirige al usuario de vuelta a la página principal
if (!$post) {
    header('Location: index.php');
}

// Se obtiene el primer (y único) artículo de la lista obtenida de la base de datos
$post = $post[0];

// Se requiere la vista para mostrar el artículo individual
require 'views/single.view.php';
