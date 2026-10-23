<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
 
<?php include 'menu.php'; ?>
 
<h1>Calcular promedio de calificaciones</h1>
 
<form method="POST">
    <label>Primera calificaión:</label>
    <input type="number" step="any" name="n1" required>
 
    <label>Segundo calificaión:</label>
    <input type="number" step="any" name="n2" required>

    <label>Tercer calificaión:</label>
    <input type="number" step="any" name="n3" required>
 
    <button type="submit">Calcular</button>
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = filter_input(INPUT_POST, "n1", FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, "n2", FILTER_VALIDATE_FLOAT);
    $c = filter_input(INPUT_POST, "n3", FILTER_VALIDATE_FLOAT);
 
    if ($a === false || $b === false || $c === false ||
        $a < 0 || $a > 100 || $b < 0 || $b > 100 || $c < 0 || $c > 100) {
        echo "Error: Ingresa 3 calificaciones";
    } else {
        $promedio = ($a + $b + $c) / 3;
        echo "<p>Promedio: " . round($promedio, 2) . "</p>";
        
        if ($promedio >= 70) {
            echo "Aprobado";
        } else {
            echo "Reprobado";
        }
    }
}
?>
</body>
</html>
