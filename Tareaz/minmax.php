<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="minmaxStyle.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mínimo y Matsimo</title>
</head>
<body>
<h2>Numeros aleatorios</h2>

<form method="post">

    <label>Ingresa un número:</label>
    <input type="number" name="n">

    <br><br>

    <input type="submit" name="calcular" value="Generar">

</form>

<?php

if(isset($_POST["calcular"])){

    $n = intval($_POST["n"]);

    $arreglo = [];

    for($i=0; $i<$n; $i++){
        $arreglo[$i] = rand(1, 100);
    }

    echo "<h3>Números:</h3>";

    for($i=0; $i<$n; $i++){
        echo $arreglo[$i]." ";
    }


    $min = $arreglo[0];

    for($i=1; $i<$n; $i++){
           if($arreglo[$i] < $min){
            $min = $arreglo[$i];
        }

    }

    $max = $arreglo[0];

    for($i=1; $i<$n; $i++){
        if($arreglo[$i] > $max){
            $max = $arreglo[$i];
        }

    }

    $MaxT = 0;

    for($i=0; $i<$n; $i++){
        if($arreglo[$i] == $max){
            $MaxT++;
        }

    }

    echo "<h3>Resultado:</h3>";
    echo "Valor minimo: ".$min."<br>";
    echo "El valor maximo es: ".$max."<br>";
    echo "El maximo aparece: ".$MaxT." veces";

}

?>