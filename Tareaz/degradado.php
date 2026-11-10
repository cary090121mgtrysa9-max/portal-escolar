<!DOCTYPE html>
<html>
<head>
    <title>Tabla</title>
</head>
<body>

<h1>Tablas con degradado</h1>

<form method="post">
    <label>Filas:</label>
    <input type="number" name="filas" min="1" required>
    <br><br>
    <label>Columnas:</label>
    <input type="number" name="columnas" min="1" required>
    <br><br>
    <label>Elige un color:</label>
    <input type="color" name="color" value="#6d06ad">
    <br><br>
    <input type="submit" name="crear" value="Crear tabla">
</form>

<hr>

<?php
if (isset($_POST["crear"])) {
    // definimos las filas y el hexadecimal
    $r = intval($_POST["filas"]);
    $c = intval($_POST["columnas"]);
    $hex = $_POST["color"];

    // el "#%02x%02x%02x" es para covertir los target de RGB a hexadecimales
    list($target_r, $target_g, $target_b) = sscanf($hex, "#%02x%02x%02x");


    echo "<h2>Tabla de blanco al color</h2>";
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>"; 

    for ($i = 1; $i <= $r; $i++) { 
        $factor = ($r > 1) ? ($i - 1) / ($r - 1) : 0;
        
        // es para saber que empezamos desde lo más oscuro y vamos disminuyendo el color
        $current_r = round(255 - ($factor * (255 - $target_r)));
        $current_g = round(255 - ($factor * (255 - $target_g)));
        $current_b = round(255 - ($factor * (255 - $target_b)));
        
        // Crear la filas con los colores calculados
        echo "<tr style='background-color: rgb({$current_r}, {$current_g}, {$current_b});'>"; 
        for ($j = 1; $j <= $c; $j++){ 
            echo "<td style='padding: 8px;'>($i, $j)</td>"; 
        } 
        echo "</tr>"; 
    } 
    echo "</table><hr>";


    echo "<h2>Tabla: Degradado Horizontal :)</h2>";
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>"; 
    // recorrer las lineas
    for ($i = 1; $i <= $r; $i++) { 
        echo "<tr>"; 
        // para que el degradado vaya de derecha a izquierda

        for ($j = 1; $j <= $c; $j++){ 
            $factor_h = ($c > 1) ? ($j - 1) / ($c - 1) : 0;
            // calculo rojo
            $current_r = round(255 - ($factor_h * (255 - $target_r)));
            // calculo verde
            $current_g = round(255 - ($factor_h * (255 - $target_g)));
            // calculo azul
            $current_b = round(255 - ($factor_h * (255 - $target_b)));
            
            echo "<td style='padding: 8px; background-color: rgb({$current_r}, {$current_g}, {$current_b});'>($i, $j)</td>"; 
        } 
        echo "</tr>"; 
    } 
    
    echo "</table><hr>";


    echo "<h2>Tabla de color a blanco</h2>";

    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

    for ($i = 1; $i <= $r; $i++) {
        $factor = ($r > 1) ? ($i - 1) / ($r - 1) : 0;

        $current_r = round($target_r + ($factor * (255 - $target_r)));
        $current_g = round($target_g + ($factor * (255 - $target_g)));
        $current_b = round($target_b + ($factor * (255 - $target_b)));

        echo "<tr style='background-color: rgb($current_r, $current_g, $current_b);'>";

        for ($j = 1; $j <= $c; $j++) {

            echo "<td style='padding: 8px;'>($i, $j)</td>";

        }

        echo "</tr>";
    }
    // $j = columna actual.
    // $c = número total de columnas.

    echo "</table><hr>";


    echo "<h2>Tabla de color a blanco horizontal</h2>";
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
    // recorrer las lineas
    for ($i = 1; $i <= $r; $i++) {

        echo "<tr>";
       
        for ($j = 1; $j <= $c; $j++) {
        // para que el degradado vaya de izquierda a derecha
            $factor = ($c > 1) ? ($j - 1) / ($c - 1) : 0;
        // calcular rojo
            $current_r = round($target_r + ($factor * (255 - $target_r)));
         // calcular verde
            $current_g = round($target_g + ($factor * (255 - $target_g)));
       // calcular azul
            $current_b = round($target_b + ($factor * (255 - $target_b)));
       // color final calculado
            echo "<td style='padding: 8px; background-color: rgb($current_r, $current_g, $current_b);'>";
            echo "($i, $j)";
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

?>

</body>
</html>