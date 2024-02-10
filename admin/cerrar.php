<?php 
// Inicia la sesión
session_start();

// Destruye la sesión existente
session_destroy();

// Limpia el array de sesión
$_SESSION = array();

// Redirige al usuario a la página principal del sitio
header('Location: ../');

// Finaliza el script para evitar que se ejecuten más instrucciones
die();
