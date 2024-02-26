<?php
// Inicia la sesión
session_start();

// Incluye el archivo de configuración y el controlador
require 'config.php';
require '../controller/controller.php';

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header('Location: ../login.php');
    exit(); // Asegurarse de salir después de redirigir
}

// Establece la conexión a la base de datos
$conexion = conexion($bd_config);

// Redirige a la página de error si no se puede establecer la conexión a la base de datos
if (!$conexion) {
    header('Location: ../error.php');
    exit; //  Salir del script después de la redirección
}

// Obtiene los artículos para mostrar en la página de administración
$articulos = obtenerArticulos($blog_config['articulo_por_pagina'], $conexion);

// Incluye la vista de la página de inicio de sesión del administrador
require '../views/admin_index.view.php';
?>
