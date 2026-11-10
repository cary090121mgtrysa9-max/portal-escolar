<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio De Larry</title>
</head>
<body>

    <h2>Calcular promedio.</h2>

    <form method="POST" action="">

        <label>1er Mes:  <br><br> </label>        
        <input type="number" step="0.01" name="m1" required>
        <br><br>
        <label>2do Mes:    <br><br> </label>
        <input type="number" step="0.01" name="m2" required>
        <br><br>
        <label>3er Mes:     <br><br> </label>
        <input type="number" step="0.01" name="m3" required>
        <br><br>
        <label>4to Mes:    <br><br>  </label>
        <input type="number" step="0.01" name="m4" required>
        <br><br>
        <label>5to Mes:    <br><br>  </label>
        <input type="number" step="0.01" name="m5" required>
        <br><br>
        <label>6to Mes:    <br><br>  </label>
        <input type="number" step="0.01" name="m6" required>
        <br><br>
        <label>7mo Mes:     <br><br> </label>
        <input type="number" step="0.01" name="m7" required>
        <br><br>
        <label>8vo Mes:    <br><br>  </label>
        <input type="number" step="0.01" name="m8" required>
        <br><br>
        <label>9no Mes: <br><br> </label>
        <input type="number" step="0.01" name="m9" required>
        <br><br>
        <label>10mo Mes:  <br><br>   </label>
        <input type="number" step="0.01" name="m10" required>
        <br><br>
        <label>11vo Mes:   <br><br>  </label>
        <input type="number" step="0.01" name="m11" required>
        <br><br>
        <label>12vo Mes:  <br><br>   </label>
        <input type="number" step="0.01" name="m12" required>
        <br><br>

        <button type="submit" name="calcular">Calcular</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {

    $m1 = floatval($_POST['m1']);
    $m2 = floatval($_POST['m2']);
    $m3 = floatval($_POST['m3']);
    $m4 = floatval($_POST['m4']);
    $m5 = floatval($_POST['m5']);
    $m6 = floatval($_POST['m6']);
    $m7 = floatval($_POST['m7']);
    $m8 = floatval($_POST['m8']);
    $m9 = floatval($_POST['m9']);
    $m10 = floatval($_POST['m10']);
    $m11 = floatval($_POST['m11']);
    $m12 = floatval($_POST['m12']);

    $suma = $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 + $m11 + $m12;

    $prom = $suma / 12;

    echo "<h3>Promedio:</h3>";
    echo "$" . number_format($prom, 2);

}

?>

</body>
</html>