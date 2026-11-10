<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares e impares</title>
    <link rel="stylesheet" href="parimparstyle.css">
</head>

<body>

    <h1>Números pares e impares</h1> <br>
    <h2>Suma de números impares</h2>

    <form method="POST" action="">

        <label for="a">Número a:</label>
        <input type="number" name="a" id="a" required>

        <br><br>

        <label for="b">Número b:</label>
        <input type="number" name="b" id="b" required>

        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>


<?php

function impar($m){

    $result = match($m % 2){

        0 => 0,
        1 => 1

    };

    return $result;
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])){

    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);

    $suma = 0;
    $m = $a;

    while ($m <= $b){

        if (impar($m) == 1){

            $suma = $suma + $m;

        }

        $m++;

    }

    echo "La suma de los números impares es: " . $suma;

}

?>

</body>
</html>