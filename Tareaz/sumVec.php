<!DOCTYPE html>
<html lang="en">
<head>
    <title>Suma de vectores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="minmaxStyle.css">
</head>
<body>

<h2>Suma de dos vectores</h2>

<form method="post">

    <label>¿Cuantos numeros quieres?</label>
    <input type="number" name="n">

    <br><br>

    <input type="submit" name="calcular" value="Generar">

</form>

<?php
if(isset($_POST["calcular"])){

    $n = intval($_POST["n"]);

    $v1 = [];
    $v2 = [];
    $result = [];

    for($i=0; $i<$n; $i++){
        $v1[$i] = rand(1, 100);
    }

    for($i=0; $i<$n; $i++){
        $v2[$i] = rand(1, 100);
    }

    for($i=0; $i<$n; $i++){
        $result[$i] = $v1[$i] + $v2[$i];
    }

    echo "<h3>Vector 1:</h3>";

    for($i=0; $i<$n; $i++){
        echo $v1[$i]." ";
    }

    echo "<h3>Vector 2:</h3>";

    for($i=0; $i<$n; $i++){
        echo $v2[$i]." ";
    }

    echo "<h3>Vector total:</h3>";

    for($i=0; $i<$n; $i++){
        echo $result[$i]." ";
    }

}

?>   
</body>
</html>