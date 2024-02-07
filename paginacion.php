<?php 
// Se calcula el número total de páginas necesarias para la paginación
$numero_paginas = numeroPaginas($blog_config['articulo_por_pagina'], $conexion); 
?>

<!-- La siguiente sección representa la paginación de un conjunto de datos -->
<section class="paginacion">
    <!-- Se utiliza una lista no ordenada para mostrar los números de página y los controles de navegación -->
    <ul>
        <?php if (paginaActual() === 1) : ?>
            <!-- Si la página actual es la primera, se muestra un botón de retroceso deshabilitado -->
            <li class="disabled">&laquo;</li>
        <?php else: ?>    
            <!-- Si la página actual no es la primera, se muestra un botón de retroceso que lleva a la página anterior -->
            <li><a href="index.php?p=<?php echo paginaActual() - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php 
        // Bucle para generar los enlaces de paginación
        for ($i = 1; $i <= $numero_paginas; $i++): ?>
            <?php if(paginaActual() === $i) : ?>
                <!-- Si la página actual es igual a $i, se marca como activa -->
                <li class="active">
                    <?php echo $i; ?>
                </li>
            <?php else: ?>
                <!-- Se muestra un enlace para cada página que no sea la actual -->
                <li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>

        <?php endfor; ?>

        <?php if(paginaActual() === $numero_paginas): ?>
            <!-- Si la página actual es la última, se muestra un botón de avance deshabilitado -->
            <li class="disabled">&raquo;</li>
        <?php else: ?>
            <!-- Si la página actual no es la última, se muestra un botón de avance que lleva a la siguiente página -->
            <li><a href="index.php?p=<?php echo paginaActual() + 1; ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>
