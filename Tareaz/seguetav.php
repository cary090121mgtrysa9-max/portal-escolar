
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SEGUETAV</title>
    <link rel="stylesheet" href="style13.css">
</head>

<body>

    <h2>Contar números en una frase</h2>
    <form method="POST" action="">

        <label for="cad">Escribe una frase:</label>
        <br><br>
        <input type="text" name="cad" id="cad" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $cade = $_POST["cad"];

    $cant = 0;
    $suma = 0;
    $n = "";

    $i = 0;

    while ($i < strlen($cade)) {

        $l = $cade[$i];

        if ($l >= "0" && $l <= "9") {

            $n = $n . $l;

        } else {

            if ($n != "") {

                $cant++;
                $suma = $suma + intval($n);
                $n = "";

            }

        }

        $i++;
    }

    if ($n != "") {

        $cant++;
        $suma = $suma + intval($n);

    }

    echo "<h3>Resultado:</h3>";

    echo $cant . " " . $suma;

}

?>

</body>
</html>