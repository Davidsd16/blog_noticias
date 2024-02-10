<?php
// Archivo Index del Admin.
session_start();

require 'config.php';
require '../controller/controller.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: ../error.php');
}

$articulos = obtenerArticulos($blog_config['articulo_por_pagina'], $conexion);


require '../views/admin_index.view.php';