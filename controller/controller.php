<?php

// Función para establecer una conexión a la base de datos
function conexion($bd_config) {
    try {
        // Se intenta establecer una conexión usando PDO con los datos proporcionados
        $conexion = new PDO('mysql:host=localhost;dbname=blog_noticias', 'root', '');
        // Se devuelve la conexión exitosa
        return $conexion;

    } catch (PDOException $e) {
        // En caso de error (excepción), se devuelve 'false'
        return false;
    }
}

function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);
	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);
	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}