<?php
require_once "conexion.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $matricula = trim($_POST["matricula"] ?? "");
    $nombre = trim($_POST["nombre"] ?? "");
    $carrera = trim($_POST["carrera"] ?? "");
    $correo = trim($_POST["correo"] ?? "");

    if ($matricula === "" || preg_match('/\s/', $matricula) ||
        $nombre === "" || $carrera === "" ||
        !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?mensaje=error");
        exit;
    }


    $sql = "INSERT INTO estudiantes
            (matricula, nombre, carrera, correo)
            VALUES (?, ?, ?, ?)";

    try {
        $consulta = $conexion->prepare($sql);
        $consulta->execute([
            $matricula,
            $nombre,
            $carrera,
            $correo
        ]);

        header("Location: listar.php?mensaje=exito");
        exit;

    } catch (PDOException $e) {
        if ($e->getCode() === "23000") {
            exit("La matrícula ya existe o hay un dato duplicado.");
        }
        exit("No fue posible guardar el estudiante.");
    }
}
?>
