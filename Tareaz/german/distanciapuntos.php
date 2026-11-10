<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia</title>
</head>
<body>

     <h2>DISTANCIA </h2>

    <h3>Punto 1: </h3>
    <form method="POST" action="">  
    <label for="x1">x:</label>
    <input type="number" step="any" name="x1" id="x1" required>
     <label for="y1">y:</label> 
    <input type="number" step="any" name="y1" id="y1" required>
    <br><br>
    
    <h3>Punto 2: </h3>
    <label for="x2">x:</label>
    <input type="number" step="any" name="x2" id="x2" required>
     <label for="y2">y:</label> 
    <input type="number" step="any" name="y2" id="y2" required>
    <br><br>
    <button type="submit" name="calcular">Calcular distancia</button>
</form>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])){
         // Procesar info si el form fue enviado
        //Recibir los valores introducidos
        $x1 = floatval($_POST['x1']);
        $y1 = floatval($_POST['y1']);
        $x2 = floatval($_POST['x2']);
        $y2 = floatval($_POST['y2']);

        // Realizar la operación
        $distancia = ($x2 - $x1)*

        // Mostrar el resultado
        echo "<h3>Resultado:  </h3>";
        echo "Un triángulo de base <strong>$base</strong>";
        echo "y la altura<strong>$altura</strong> tiene un area de<strong>$area</strong>";
    }
  ?>
    </html>