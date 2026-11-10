<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmula Chicharronera</title>
</head>
<body>

     <h2>Formula general</h2>
     <h3>Solución casi exacta de la formula general.</h3>
    <form method="POST" action="">
    <label for="A">Valor de A:</label>
    <input type="number" name="a" id="a" required>
    <br><br>

    <label for="B">Valor de B:</label> 
    <input type="number" name="b" id="b" required>
    <br><br>   

    <label for="C">Valor de C:</label> 
    <input type="number" name="c" id="c" required>
    <br><br>  

    <button type="submit" name="calcular">Calcular</button>
</form>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])){

        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);

        if ($a == 0){
            echo "<h3>Error: El valor de A no puede ser 0 en esta ecuación cuadrática.</h3>";
        } else {

            $dis = ($b * $b) - (4 * $a * $c);

            if ($dis < 0) {
                echo "<h3>Resultados:</h3>";
                echo "Las soluciones son complejas.";
            } else {
                $raiz = sqrt($dis);
    
                $x1 = (-$b + $raiz) / (2 * $a);
                $x2 = (-$b - $raiz) / (2 * $a);
        
                echo "<h3>Resultados:</h3>";
                echo "Salida del problema: <strong>$x1 $x2</strong> <hr>";
                echo "x₁ (Signo positivo) = $x1 <br>";
                echo "x₂ (Signo negativo) = $x2";
            }
        }
    } 
?>
</html>