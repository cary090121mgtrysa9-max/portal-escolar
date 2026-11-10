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
{
    echo "</table><hr>"; 
    echo "<h2>Tabla con degradado en medio</h2>" ; 
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>"; 
    
    for ($i = 1; $i <= $r; $i++) {
        
        // Calculamos el punto medio de la tabla para saber cuándo cambiar de direccion
        $mitad = $r / 2;
        
        if ($i <= $mitad) {
            // Primera mitad: el color va desde el blanco absoluto (255) hasta el color seleccionado
            $factor = ($mitad > 0) ? ($i / $mitad) : 0;
            
            $current_r = round(255 - ($factor * (255 - $target_r)));
            $current_g = round(255 - ($factor * (255 - $target_g)));
            $current_b = round(255 - ($factor * (255 - $target_b)));
        } else {
            // Segunda mitad: el color viaja de regreso desde el color seleccionado hacia el blanco (255)
            $factor = ($mitad > 0) ? (($i - $mitad) / $mitad) : 0;
            
            $current_r = round($target_r + ($factor * (255 - $target_tar))); 
            $current_g = round($target_g + ($factor * (255 - $target_g)));
            $current_b = round($target_b + ($factor * (255 - $target_b)));
        }

        echo <tr style="background-color: rgb({$current_r}, {$current_g}, {$current_b})"> ;
        
        for ($j = 1; $j <= $c; $j++) {
            echo "<td>" . $i . ", " . $j . "</td>"; 
        }
        echo "</tr>"; 
    } 
    echo "</table><hr>"; 
}
?>