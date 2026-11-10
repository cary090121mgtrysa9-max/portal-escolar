<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dentro de HTML</title>
</head>
<body>
<H1>Pagina web HTML con codigo PHP</H1>
<?php
    $x=25;
    echo "La variable x=$x <br>";
?>
<HR>
    <H2>Tipos de datos de diferentes variables</H2>
<HR>
<?php
    $entero=50;
    $texto="CBTis 217";
    echo "<h3> Tipo de las variables</h3>";
    var_dump($entero);
    echo "<br>";
    var_dump($texto);
?>

</body>
</html>