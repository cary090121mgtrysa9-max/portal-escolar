<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>El lado más corto</title>
<link rel="stylesheet" href="xystyles.css">
</head>
<body>
<h2>¿Cuál será la longitud del lado más corto?</h2>
<h3>Solución con números riales.</h3>
<form method="POST" action="">
        
    <h3>Punto 1:</h3>
    <label for="xa">X:</label>
    <input type="number" step="any" name="xa" id="xa" required>
    <label for="ya">Y:</label>
    <input type="number"step="any" name="ya" id="ya" required>
    <br><br>

    <h3>Punto 2:</h3>
    <label for="Xb">X:</label>
    <input type="number" step="any" name="xb" id="xb" required>
    <label for="Yb">Y:</label>
    <input type="number" step="any" name="yb" id="yb" required>
    <br><br>

    <h3>Punto 3:</h3>
    <label for="Xc">X:</label>
    <input type="number" step="any" name="xc" id="xc" required>
    <label for="Yc">Y:</label>
    <input type="number" step="any" name="yc" id="yc" required>
    <br><br>

    <h3>Punto 4:</h3>
    <label for="Xd">X:</label>
    <input type="number" step="any" name="xd" id="xd" required>
    <label for="Yd">Y:</label>
    <input type="number" step="any" name="yd" id="yd" required>
    <br><br>

    <button type="submit" name="calcular">Calcular</button>
</form>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])){

    $X1 = floatval($_POST['xa']);
    $Y1 = floatval($_POST['ya']);

    $X2 = floatval($_POST['xb']);
    $Y2 = floatval($_POST['yb']);

    $X3 = floatval($_POST['xc']);
    $Y3 = floatval($_POST['yc']);

    $X4 = floatval($_POST['xd']);
    $Y4 = floatval($_POST['yd']);

    $lado1 = sqrt(pow($X2 - $X1, 2) + pow($Y2 - $Y1, 2));

    $lado2 = sqrt(pow($X3 - $X2, 2) + pow($Y3 - $Y2, 2));

    $lado3 = sqrt(pow($X4 - $X3, 2) + pow($Y4 - $Y3, 2));

    $lado4 = sqrt(pow($X1 - $X4, 2) + pow($Y1 - $Y4, 2));
   
    if ($lado1 <= $lado2 && $lado1 <= $lado3 && $lado1 <= $lado4) {
    $men = $lado1;
    } elseif ($lado2 <= $lado1 && $lado2 <= $lado3 && $lado2 <= $lado4) {
    $men = $lado2;
    } elseif ($lado3 <= $lado1 && $lado3 <= $lado2 && $lado3 <= $lado4) {
    $men = $lado3;
    } else {
    $men = $lado4;
    }
    echo "El lado más corto mide: " . $men;
}
?>
</html>
