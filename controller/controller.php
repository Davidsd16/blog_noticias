<?php

// Función para establecer una conexión a la base de datos
function conexion($bd_config) {
    try {
        // Se intenta establecer una conexión usando PDO con los datos proporcionados
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
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

// Esta función devuelve el número de página actual basado en el parámetro 'p' en la URL
// Si 'p' no está presente o no es un número entero válido, devuelve 1 por defecto
function paginaActual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

// Esta función obtiene los artículos de la base de datos según la página actual y el número de artículos por página
// $articulo_por_pagina: El número de artículos que se mostrarán por página
// $conexion: El objeto de conexión a la base de datos
function obtenerArticulos($articulo_por_pagina, $conexion) {
    // Calcula el inicio de los artículos a obtener en función de la página actual y el número de artículos por página
    $inicio = (paginaActual() > 1) ? paginaActual() * $articulo_por_pagina - $articulo_por_pagina : 0;
    // Prepara una consulta SQL para obtener los artículos desde el inicio hasta el número de artículos por página
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $articulo_por_pagina");
    // Ejecuta la consulta
    $sentencia->execute();
    // Devuelve todas las filas de resultados obtenidas
    return $sentencia->fetchAll();
}
