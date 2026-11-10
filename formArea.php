<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcularArea</title>
</head>
<body>

     <h2>Calcular el área de un triángulo </h2>
    <!-- Formulario en HTML -->

    <form method="POST" action="">
    <label for="base">Base:</label>
    <input type="number" step="any" name="base" id="base" required>
    <br><br>

    <label for="altura">Altura:</label> 
    <input type="number" step="any" name="altura" id="altura" required>
    <br><br>   
    <button type="submit" name="calcular">Calcular área</button>
</form>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])){
         // Procesar info si el form fue enviado
        //Recibir los valores introducidos
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);

        // Realizar la operación
        $area = ($base * $altura) / 2;

        // Mostrar el resultado
        echo "<h3>Resultado:  </h3>";
        echo "Un triángulo de base <strong>$base</strong>";
        echo "y la altura<strong>$altura</strong> tiene un area de<strong>$area</strong>";
    }
  ?>
    </html>
  