<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ASCII de 4</title>
    <link rel="stylesheet" href="style13.css">
</head>

<body>

    <h2>Valores ASCII del nombre</h2>

    <form method="POST" action="">

        <label for="nombre">Escribe el nombre que gustes, bro:</label>
        <input type="text" name="name" id="name" required>

        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $neim = $_POST["name"];

    $i = 0;

    echo "<h3>Resultado:</h3>";

    while ($i < 4 && $i < strlen($neim)) {

        $l = $neim[$i];

        $ascii = ord($l);

        echo $l . " ASCII value is " . $ascii . "<br>";

        $i++;
    }

}

?>

</body>
</html>