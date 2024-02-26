<?php
// Inicia la sesión
session_start();

// Incluye el archivo de configuración y el controlador
require 'config.php';
require '../controller/controller.php';

// Establece la conexión a la base de datos
$conexion = conexion($bd_config);

// Comprueba si el usuario ha iniciado sesión como administrador
comprobarSesion();

// Redirige a la página de error si no se puede establecer la conexión a la base de datos
if (!$conexion) {
    header('Location: ../error.php');
    exit; // Es importante salir del script después de la redirección
}

// Obtiene los artículos para mostrar en la página de administración
$articulos = obtenerArticulos($blog_config['articulo_por_pagina'], $conexion);

// Incluye la vista de la página de inicio de sesión del administrador
require '../views/admin_index.view.php';
?>
