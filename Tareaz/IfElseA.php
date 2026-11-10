<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>

    <link rel="stylesheet" href="IfElseStyle.css">
</head>

<body>
   <h1>Números = Meses</h1>
    <h2>Dime un número y te diré qué mes eres</h2>
    <h3>Pls ingresa un número del 1 al 12</h3>

    <form method="POST" action="">

        <label for="mes">Número:</label>
        <input type="number" name="mes" id="mes" required>

        <br><br>

        <button type="submit" name="calcular">Mes</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["calcular"])) {
   
   
      echo "Tu mes es...  ";

    $mes = intval($_POST["mes"]);

    if ($mes == 1) {
        echo "Enero";
    } elseif ($mes == 2) {
        echo "Febrero";
    } elseif ($mes == 3) {
        echo "Marzo";
    } elseif ($mes == 4) {
        echo "Abril";
    } elseif ($mes == 5) {
        echo "Mayo";
    } elseif ($mes == 6) {
        echo "Junio";
    } elseif ($mes == 7) {
        echo "Julio";
    } elseif ($mes == 8) {
        echo "Agosto";
    } elseif ($mes == 9) {
        echo "Septiembre";
    } elseif ($mes == 10) {
        echo "Octubre";
    } elseif ($mes == 11) {
        echo "Noviembre";
    } elseif ($mes == 12) {
        echo "Diciembre";
    } else {
        echo "Ese mes no epsiste, dime otro...";
    }
}

?>

</body>
</html>