<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmula Chicharronera</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>

    <h2>Fórmula Chicharronera</h2>
    <h3>Ingresa los valores de A, B y C</h3>
    <form method="POST" action="">

        <label for="a">Valor de A:</label>
        <input type="number" step="any" name="a" id="a" required>
        <br><br>

        <label for="b">Valor de B:</label>
        <input type="number" step="any" name="b" id="b" required>
        <br><br>

        <label for="c">Valor de C:</label>
        <input type="number" step="any" name="c" id="c" required>
        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>


<?php

function chicharronera($a, $b, $c) {

    $dis = ($b * $b) - (4 * $a * $c);

    $raiz = sqrt($dis);

    $x1 = (-$b + $raiz) / (2 * $a);

    $x2 = (-$b - $raiz) / (2 * $a);

    return [$x1, $x2];
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    $result = chicharronera($a, $b, $c);

    echo "<div class='resultado'>";

    echo "x1 = " . $result[0] . "<br>";
    echo "x2 = " . $result[1];

    echo "</div>";
}

?>

</body>
</html>