<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqui detecto vocales y consonantes</title>
    <link rel="stylesheet" href="eztilosisi.css">
</head>

<body>

    <h2>Detector de vocales y consonantes</h2>

    <form method="POST" action="">

        <label for="p">Escribe una palabra, bro:</label>
        <input type="text" name="p" id="p" required>
        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {

    $pala = $_POST["p"];

    $v = 0;
    $cons = 0;

    $i = 0;

    while ($i < strlen($pala)) {

        $l = $pala[$i];

        if ($l=="A" || $l=="E" || $l=="I" || $l=="O" || $l=="U") {
            $v++;
        } else {
            $cons++;
        }

        $i++;
    }

    echo "<h3>Resultado:</h3>";

    echo $cons . " " . $v;
}

?>

</body>
</html>