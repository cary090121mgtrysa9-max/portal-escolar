<?php
    $n=20;
    $arreglo=[];
    for($i=0; $i<$n; $i++){
        $arreglo[$i]=rand(0, 100); 
    }
    echo "<h3>Números generados: </h3>";
    for($i=0; $i<$n; $i++){
        echo $arreglo[$i]." ";
    }

   echo "<h3>Imprimir números generados al reves: </h3>";  
   for($i=$n-1; $i>=0; $i--){
    echo $arreglo[$i]." ";
   }
     
   // 1. RECORRER PARA ENCONTRAR EL PROMEDIO
   echo "<h2> Promedio  </h2>";
   $suma=0;
   for($i=$n-1; $i>=0; $i--){
    $suma=$suma+$arreglo[$i];
   }

   $promedio=$suma/$n;
   echo "El promedio es: " . $promedio;

   // 2. IMPRIMIR LOS QUE SEAN MAYORES AL PROMEDIO
    echo "<h3> Mayores al promedio </h3>";
    $suma=0;
    for($i=$n-1; $i>=0; $i--){
        if($arreglo[$i]>$promedio){
            echo $arreglo[$i] ." ";
        }
    }
   // 3. IMPRIMIR LA CANTIDAD DE MATERIAS REPROBADAS
     echo "<h3> May </h3>";
    $suma=0;
    for($i=$n-1; $i>=0; $i--){
        if($arreglo[$i]>$promedio){
            echo $arreglo[$i] ." ";
        }
    }
   // 4. IMPRIMIR LA CANTIDAD DE APROVADOS

   // 5. IMPRIMIR EL PROMEDIO DE LAS REPROBADAS
   ?>
   
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
