<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide de asteriscos</title>

    <link rel="stylesheet" href="piramidestyle.css">
</head>

<body>

    <h2>Pirámide de asteriscos</h2>

    <h3>Ingresa la altura de la pirámide</h3>

    <form method="POST" action="">

        <label for="n">Altura:</label>

        <input type="number" name="n" id="n" required>

        <br><br>

        <button type="submit" name="calcular">Mostrar pirámide</button>

    </form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"]) && isset($_POST["n"])) {

    $n = intval($_POST["n"]);

    $fila = 1;

    echo "<div class='resultado'>";

    echo "<pre>";

    while ($fila <= $n) {

        $espacios = $n - $fila;

        $asteriscos = 2 * $fila - 1;

        $contador = 1;

        while ($contador <= $espacios) {

            echo "  ";

            $contador++;

        }

        $contador = 1;

        while ($contador <= $asteriscos) {

            echo "*";

            $contador++;

        }

        echo "\n";

        $fila++;

    }

    echo "</pre>";

    echo "</div>";
}

?>

</body>
</html>