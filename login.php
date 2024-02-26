<?php 
// Iniciar la sesión
session_start();

// Incluir archivos de configuración y controlador
require 'admin/config.php';
require 'controller/controller.php';

// Verificar si se ha enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Limpiar los datos del usuario y la contraseña recibidos del formulario
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    // Verificar si el usuario y la contraseña coinciden con los valores definidos en $blog_admin
    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        // Si coinciden, establecer una variable de sesión para el usuario administrador
        $_SESSION['admin'] = $blog_admin['usuario']; // Utiliza el operador de asignación '=' en lugar de '=='
        
        // Redirigir al usuario administrador a la página de administración
        header('Location:' . RUTA . '/admin/index.php');
        exit(); // Salir después de redirigir
    }
}

// Incluir la vista de inicio de sesión
require 'views/login.view.php';
?>
