<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de saldos</title>
</head>
<body>

    <h2>Calcular promedio de 12 meses</h2>

    <form method="POST" action="">

        <label>Cantidad del mes 1:</label>
        <input type="number" step="0.01" name="mes1" required>
        <br><br>

        <label>Cantidad del mes 2:</label>
        <input type="number" step="0.01" name="mes2" required>
        <br><br>

        <label>Cantidad del mes 3:</label>
        <input type="number" step="0.01" name="mes3" required>
        <br><br>

        <label>Cantidad del mes 4:</label>
        <input type="number" step="0.01" name="mes4" required>
        <br><br>

        <label>Cantidad del mes 5:</label>
        <input type="number" step="0.01" name="mes5" required>
        <br><br>

        <label>Cantidad del mes 6:</label>
        <input type="number" step="0.01" name="mes6" required>
        <br><br>

        <label>Cantidad del mes 7:</label>
        <input type="number" step="0.01" name="mes7" required>
        <br><br>

        <label>Cantidad del mes 8:</label>
        <input type="number" step="0.01" name="mes8" required>
        <br><br>

        <label>Cantidad del mes 9:</label>
        <input type="number" step="0.01" name="mes9" required>
        <br><br>

        <label>Cantidad del mes 10:</label>
        <input type="number" step="0.01" name="mes10" required>
        <br><br>

        <label>Cantidad del mes 11:</label>
        <input type="number" step="0.01" name="mes11" required>
        <br><br>

        <label>Cantidad del mes 12:</label>
        <input type="number" step="0.01" name="mes12" required>
        <br><br>

        <button type="submit" name="calcular">Calcular promedio</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {

    // Recibir los 12 saldos
    $mes1 = floatval($_POST['mes1']);
    $mes2 = floatval($_POST['mes2']);
    $mes3 = floatval($_POST['mes3']);
    $mes4 = floatval($_POST['mes4']);
    $mes5 = floatval($_POST['mes5']);
    $mes6 = floatval($_POST['mes6']);
    $mes7 = floatval($_POST['mes7']);
    $mes8 = floatval($_POST['mes8']);
    $mes9 = floatval($_POST['mes9']);
    $mes10 = floatval($_POST['mes10']);
    $mes11 = floatval($_POST['mes11']);
    $mes12 = floatval($_POST['mes12']);

    // Sumar los 12 meses
    $suma = $mes1 + $mes2 + $mes3 + $mes4 + $mes5 + $mes6
          + $mes7 + $mes8 + $mes9 + $mes10 + $mes11 + $mes12;

    // Calcular el promedio
    $promedio = $suma / 12;

    // Mostrar resultado
    echo "<h3>Promedio:</h3>";
    echo "$" . number_format($promedio, 2);

}

?>

</body>
</html>