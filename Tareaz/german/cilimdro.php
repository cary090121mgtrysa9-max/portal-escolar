<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcularVolumen</title>
</head>
<body>

     <h2>Calcular el área y volúmen de un cilindro </h2>
    <form method="POST" action="">
    <label for="radio">Radio:</label>
    <input type="number" step="any" name="radio" id="base" required>
    <br><br>

    <label for="altura">Altura:</label> 
    <input type="number" step="any" name="altura" id="altura" required>
    <br><br>   
    <button type="submit" name="calcular">Calcular</button>
</form>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])){

        $radio = floatval($_POST['radio']);
        $altura = floatval($_POST['altura']);
        $PI = 3.1416;

        $area = 2 * $PI * $radio * ($radio + $altura);
        $vol = $PI * $radio * $radio * $altura;

          echo "<h3>Resultados:  </h3>";
          echo "Area= $area <hr>";
          echo "volumen= $vol";
    }
  ?>
    </html>