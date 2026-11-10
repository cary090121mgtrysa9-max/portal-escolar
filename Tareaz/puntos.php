<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia entre puntos</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>

    <h2>Distancia entre dos puntos</h2>

    <h3>Ingresa las coordenadas</h3>
    <form method="POST" action="">

        <label for="x1">X1:</label>
        <input type="number" step="any" name="x1" id="x1" required>
        <br><br>

        <label for="y1">Y1:</label>
        <input type="number" step="any" name="y1" id="y1" required>
        <br><br>
       
        <label for="x2">X2:</label>
        <input type="number" step="any" name="x2" id="x2" required>
        <br><br>

        <label for="y2">Y2:</label>
        <input type="number" step="any" name="y2" id="y2" required>
        <br><br>

        <button type="submit" name="calcular">Calcular distancia</button>

    </form>


<?php

function distancia($x1, $y1, $x2, $y2) {

    $result = sqrt(
        pow($x2 - $x1, 2) + pow($y2 - $y1, 2)
    );

    return $result;
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $x1 = floatval($_POST["x1"]);
    $y1 = floatval($_POST["y1"]);
    $x2 = floatval($_POST["x2"]);
    $y2 = floatval($_POST["y2"]);

    $result = distancia($x1, $y1, $x2, $y2);

    echo "<div class='resultado'>";
    echo "La distancia entre los puntos es: $result";
    echo "</div>";
}

?>

</body>
</html>