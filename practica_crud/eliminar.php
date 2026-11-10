<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Método no permitido.");
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    exit("ID no válido.");
}

$sql = "DELETE FROM estudiantes WHERE id = ?";
$consulta = $conexion->prepare($sql);
$consulta->execute([$id]);

header("Location: listar.php");
exit;
?>
