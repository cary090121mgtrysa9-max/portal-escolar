
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style13.css">
    <title>Document</title>
</head>
<body>

<h2>Buscar códigos FBI</h2>

<form method="POST" action="">

    Código 1: <input type="text" name="c1" required><br><br>
    Código 2: <input type="text" name="c2" required><br><br>
    Código 3: <input type="text" name="c3" required><br><br>
    Código 4: <input type="text" name="c4" required><br><br>
    Código 5: <input type="text" name="c5" required><br><br>

    <button type="submit" name="buscar">Buscar</button>

</form>

<?php

if (isset($_POST["buscar"])) {
    $i = 1;
    $cant = 0;

    while ($i <= 5) {
        $code = $_POST["c" . $i];
        if (strpos($code, "FBI") == true) {
            echo $i . " ";
            $cant++;
        }
        $i++;
    }

    if ($cant == 0) {
        echo "HE GOT AWAY!";
    }

}

?>

</body>
</html>