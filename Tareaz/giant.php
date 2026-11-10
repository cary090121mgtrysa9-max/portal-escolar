<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmula matemática</title>

    <link rel="stylesheet" href="stylegiant.css">
</head>

<body>

    <h2>Fórmula matemática GIGANTE</h2>
    <h3>Calcula el valor de una fórmula usando x, y, z.</h3>

    <form method="POST" action="">

        <label for="x">Valor de X:</label>
        <input type="number" step="any" name="x" id="x" required>
        <br><br>

        <label for="y">Valor de Y:</label>
        <input type="number" step="any" name="y" id="y" required>
        <br><br>

        <label for="z">Valor de Z:</label>
        <input type="number" step="any" name="z" id="z" required>
        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {

        $x = floatval($_POST['x']);
        $y = floatval($_POST['y']);
        $z = floatval($_POST['z']);

        $p1 = (2 * $x + $y) / $z;

        $p2 = pow($y, 3) - $z;

        $num = $p1 * $p2;

        $p3 = ($x + 2 * $y + 3 * $z) / ($z - 2 * $y - 3 * $x);

        $denom = $p3 + pow($x, 2) + pow($z, 2);

        $result = $num / $denom;

        echo "<h3>Resultado:</h3>";
        echo "El resultado de la fórmula es: <strong>$result</strong>";

    }

?>

</body>
</html>