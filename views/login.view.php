<?php require "header.view.php"; ?>

    <div class="contenedor">
        <!-- Contenedor principal para el formulario de inicio de sesión -->
        <div class="post">
            <!-- Etiqueta de artículo -->
            <article>
                <!-- Título del formulario -->
                <h2 class="titulo">Iniciar Sesión</h2>
                <!-- Formulario de inicio de sesión -->
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <!-- Campo para ingresar el nombre de usuario -->
                    <input type="text" name="usuario" placeholder="Usuario">
                    <!-- Campo para ingresar la contraseña -->
                    <input type="password" name="password" placeholder="Contraseña">
                    <!-- Botón de enviar para iniciar sesión -->
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </article>
        </div>
    </div>

<?php require "footer.view.php"; ?>
