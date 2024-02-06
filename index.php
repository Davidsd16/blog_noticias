<?php

// Se requiere el archivo de configuración que contiene información sensible como las credenciales de la base de datos
require 'admin/config.php';
// Se requiere el archivo del controlador que contiene las funciones necesarias para interactuar con la base de datos
require 'controller/controller.php';
// Se intenta establecer una conexión a la base de datos utilizando la función 'conexion' del controlador
$conexion = conexion($bd_config);
// Si la conexión a la base de datos falla, se redirige al usuario a una página de error
if (!$conexion) {
    header('Location: error.php');
}
// Se intenta obtener los artículos de la base de datos utilizando la función 'obtenerArticulos' del controlador
// Se pasa como argumento el número de artículos por página definido en la configuración del blog
$articulos = obtenerArticulos($blog_config['articulo_por_pagina'], $conexion);
// Si no se pueden obtener los artículos, se redirige al usuario a una página de error
if (!$articulos) {
    header('Location: error.php');
}
// Se requiere la vista principal del blog para mostrar los artículos obtenidos
require 'views/index.view.php';
;