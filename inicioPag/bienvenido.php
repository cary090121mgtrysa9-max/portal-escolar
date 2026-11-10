
<?php
// Datos del alumno y de la actividad
$alumno = "Paula Salazar";
$tarea = "Proyecto de saludos, bienvenido";
$escuela = "CBTIS 217";
$fecha = "9 Noviembre del 2026";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">

        <h1>¡Bienvenido!</h1>

        <img src="images/logo.png" alt="Logo de la escuela" class="logo">
       
        <p><strong>Actividad:</strong> <?php echo $tarea; ?></p>

        <p><strong>Escuela:</strong> <?php echo $escuela; ?></p>

        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>

        <a href="saludos.php" class="boton">Saludos</a>

    </div>

</body>
</html>
