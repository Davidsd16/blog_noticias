<?php

// Definir la constante para la ruta del blog
define('RUTA', 'http://localhost/udemy_php/Proyectos%20Udemy/blog_noticias/');

// Configuración de la base de datos
$bd_config = array(
    'basedatos' => 'blog_noticias',
    'usuario' => 'root',
    'pass' => ''
);

// Configuración específica del blog
$blog_config = array(
    'articulo_por_pagina' => '2', // Número de publicaciones por página
    'carpeta_imagenes' => 'imagenes/' // Carpeta donde se almacenan las imágenes
);

// Configuración de administrador del blog
$blog_admin = array(
    'usuario' => 'David',  // Nombre de usuario del administrador
    'password' => '123'     // Contraseña del administrador
);

?>
