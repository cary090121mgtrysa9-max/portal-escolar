<?php
$servidor = "localhost";
$baseDatos = "escuela_crud";
$usuario = "root";
$password = "salazar";

try {
    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$baseDatos;charset=utf8mb4",
        $usuario,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    exit("Error al conectar con la base de datos.");
}
?>
