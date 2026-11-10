<?php
require_once "conexion.php";

function e($valor) {
    return htmlspecialchars(
        (string)$valor,
        ENT_QUOTES,
        "UTF-8"
    );
}

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    exit("ID no válido.");
}

$sql = "SELECT * FROM estudiantes WHERE id = ?";
$consulta = $conexion->prepare($sql);
$consulta->execute([$id]);

$estudiante = $consulta->fetch(PDO::FETCH_ASSOC);

if (!$estudiante) {
    exit("Estudiante no encontrado.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $matricula = trim($_POST["matricula"] ?? "");
    $nombre = trim($_POST["nombre"] ?? "");
    $carrera = trim($_POST["carrera"] ?? "");
    $correo = trim($_POST["correo"] ?? "");

    if ($matricula === "" || $nombre === "" ||
        $carrera === "" ||
        !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        exit("Verifica los datos del formulario.");
    }

    $sql = "UPDATE estudiantes
            SET matricula = ?, nombre = ?,
                carrera = ?, correo = ?
            WHERE id = ?";

    try {
        $consulta = $conexion->prepare($sql);
        $consulta->execute([
            $matricula,
            $nombre,
            $carrera,
            $correo,
            $id
        ]);

        header("Location: listar.php");
        exit;

    } catch (PDOException $e) {
        if ($e->getCode() === "23000") {
            exit("La matrícula ya existe.");
        }

        exit("No fue posible actualizar el registro.");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar estudiante</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="contenedor">
    <h1>Editar estudiante</h1>

    <form method="POST">
        <label>Matrícula:</label>
        <input type="text" name="matricula"
               value="<?= e($estudiante["matricula"]) ?>"
               required>

        <label>Nombre:</label>
        <input type="text" name="nombre"
               value="<?= e($estudiante["nombre"]) ?>"
               required>

        <label>Carrera:</label>
        <input type="text" name="carrera"
               value="<?= e($estudiante["carrera"]) ?>"
               required>

        <label>Correo:</label>
        <input type="email" name="correo"
               value="<?= e($estudiante["correo"]) ?>"
               required>

        <button type="submit">Guardar cambios</button>
    </form>

    <a class="boton" href="listar.php">Cancelar</a>
</div>
</body>
</html>

