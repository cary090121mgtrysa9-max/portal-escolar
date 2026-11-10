<?php
require_once "conexion.php";

$buscar = trim($_GET["buscar"] ?? "");
$carrera = trim($_GET["carrera"] ?? "");

$sql = "SELECT id, matricula, nombre, carrera, correo
        FROM estudiantes
        WHERE (nombre LIKE ? OR matricula LIKE ?)
        AND (? = '' OR carrera = ?)
        ORDER BY id DESC";

$consulta = $conexion->prepare($sql);

$consulta->execute([
    "%$buscar%",
    "%$buscar%",
    $carrera,
    $carrera
]);

$estudiantes = $consulta->fetchAll(PDO::FETCH_ASSOC);

$sqlTotal = "SELECT COUNT(*) FROM estudiantes";
$consultaTotal = $conexion->query($sqlTotal);
$totalEstudiantes = $consultaTotal->fetchColumn();

function e($valor) {
    return htmlspecialchars(
        (string)$valor,
        ENT_QUOTES,
        "UTF-8"
    );
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>Lista de estudiantes</title>
    <link rel="stylesheet" href="estilocrud.css">
</head>
<body>
<div class="contenedor">
    <h1>Estudiantes registrados</h1>
    <?php
if (isset($_GET["mensaje"]) && $_GET["mensaje"] === "exito") {
    echo "<p style='color:green;'>Estudiante registrado correctamente.</p>";
}
?>
    <p>Total de estudiantes registrados: <?php echo $totalEstudiantes; ?></p>

    <a class="boton" href="index.php">
        Registrar estudiante
    </a>


    <form action="listar.php" method="GET">
    <label>Buscar por nombre o matrícula:</label>
    <input type="text" name="buscar" placeholder="Escribe un nombre o matrícula">

    <label>Filtrar por carrera:</label>
    <select name="carrera">
        <option value="">Todas las carreras</option>
        <option value="Sistemas Computacionales">Sistemas Computacionales</option>
        <option value="Industrial">Industrial</option>
        <option value="Gestión Empresarial">Gestión Empresarial</option>
    </select>

    <button type="submit">Buscar</button>
    </form>

    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Carrera</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($estudiantes as $estudiante): ?>
        <tr>
            <td><?= e($estudiante["matricula"]) ?></td>
            <td><?= e($estudiante["nombre"]) ?></td>
            <td><?= e($estudiante["carrera"]) ?></td>
            <td><?= e($estudiante["correo"]) ?></td>
            <td>
                <div class="acciones">
                    <a class="boton"
                       href="editar.php?id=<?= (int)$estudiante["id"] ?>">
                        Editar
                    </a>

                    <form action="eliminar.php" method="POST"
                          onsubmit="return confirm('¿Eliminar este estudiante?');">
                        <input type="hidden" name="id"
                               value="<?= (int)$estudiante["id"] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
