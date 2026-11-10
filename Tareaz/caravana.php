<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de la caravana</title>

    <link rel="stylesheet" href="caravanastyle.css">
</head>

<body>

    <h2>Juego de la caravana</h2>
    <h3>Ingresa las 3 cartas de cada jugador</h3>

    <form method="POST" action="">

        <h3>Tus cartas</h3>

        <input type="number" name="carta1" required>
        <input type="number" name="carta2" required>
        <input type="number" name="carta3" required>

        <h3>Cartas del rival</h3>

        <input type="number" name="rival1" required>
        <input type="number" name="rival2" required>
        <input type="number" name="rival3" required>

        <br><br>

        <button type="submit" name="calcular">Jugar</button>
        <br><br>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $c1 = intval($_POST["carta1"]);
    $c2 = intval($_POST["carta2"]);
    $c3 = intval($_POST["carta3"]);

    $P1 = intval($_POST["rival1"]);
    $P2 = intval($_POST["rival2"]);
    $P3 = intval($_POST["rival3"]);

    if ($c1 > 24) {
        $c1 = 0;
    }

    if ($c2 > 24) {
        $c2 = 0;
    }

    if ($c3 > 24) {
        $c3 = 0;
    }

    if ($P1 > 24) {
        $P1 = 0;
    }

    if ($P2 > 24) {
        $P2 = 0;
    }

    if ($P3 > 24) {
        $P3 = 0;
    }

    $suma = $c1 + $c2 + $c3;

    $sumaP = $P1 + $P2 + $P3;

    if ($suma > $sumaP) {
        echo "XD";
    } else {
        echo "XD'N'T";
    }

}

?>

</body>
</html>