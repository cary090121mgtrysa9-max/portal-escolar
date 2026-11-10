<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos y ratón</title>

    <link rel="stylesheet" href="catstyle.css">
</head>

<body>

    <h2>Gatos y ratón</h2>
    <h3>¿Qué gato llegará primero al ratón?</h3>

    <form method="POST" action="">

        <label for="a">Posición del gato A:</label>
        <input type="number" name="a" id="a" required>

        <br><br>

        <label for="b">Posición del gato B:</label>
        <input type="number" name="b" id="b" required>

        <br><br>

        <label for="c">Posición del ratón C:</label>
        <input type="number" name="c" id="c" required>

        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);
    $c = intval($_POST["c"]);

    $distanciaA = abs($a - $c);
    $distanciaB = abs($b - $c);

    if ($distanciaA < $distanciaB) {
        echo "gato A";
    } elseif ($distanciaB < $distanciaA) {
        echo "gato B";
    } else {
        echo "raton C";
    }

}

?>

</body>
</html>