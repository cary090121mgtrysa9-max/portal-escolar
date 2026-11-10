<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número máximo</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>

    <h2>Número máximo</h2>

    <h3>Ingresa 3 números por favor</h3>

    <form method="POST" action="">

        <label for="num1">Número 1:</label>
        <input type="number" step="any" name="n1" id="n1" required>

        <br><br>

        <label for="n2">Número 2:</label>
        <input type="number" step="any" name="n2" id="n2" required>

        <br><br>

        <label for="n3">Número 3:</label>
        <input type="number" step="any" name="n3" id="n3" required>

        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>


<?php

function maximo($a, $b, $c) {

    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }

}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $n1 = floatval($_POST["n1"]);
    $n2 = floatval($_POST["n2"]);
    $n3 = floatval($_POST["n3"]);

    $result = maximo($n1, $n2, $n3);

    echo "<div class='resultado'>";
    echo "El número máximo es: $result";
    echo "</div>";
}

?>

</body>
</html>