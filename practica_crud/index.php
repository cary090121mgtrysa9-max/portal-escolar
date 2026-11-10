<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de estudiantes</title>
    <link rel="stylesheet" href="estilocrud.css">
</head>
<body>
<div class="contenedor">
    <h1>Registro de estudiantes</h1>
     <?php
    if (isset($_GET["mensaje"])) {
        if ($_GET["mensaje"] === "error") {
            echo "<p style='color:red;'>Error: revisa la matrícula y el nombre.</p>";
        }
    }
    ?>


    <form action="insertar.php" method="POST">
        <label>Matrícula:</label>
        <input type="text" name="matricula" required>

        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Carrera:</label>
        <select name="carrera" required>
            <option value="">Selecciona una carrera</option>
            <option value="Sistemas Computacionales">
                Sistemas Computacionales
            </option>
            <option value="Industrial">Industrial</option>
            <option value="Gestión Empresarial">
                Gestión Empresarial
            </option>
        </select>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required>

        <button type="submit">Guardar estudiante</button>
    </form>

    <a class="boton" href="listar.php">
        Consultar estudiantes
    </a>
</div>
</body>
</html>
