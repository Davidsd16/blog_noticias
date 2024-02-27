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

require '../views/editar.view.php';