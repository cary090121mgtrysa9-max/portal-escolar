<?php
echo "<h1>PAPELERÍA</h1>";
echo "<hr>";

// Datos del cliente

$nombre = "Seungmin";
$apellido = "Kim";
$edad = 25;


echo "<h2>DATOS DEL CLIENTE</h2>";
echo "Nombre: " . $nombre . " " . $apellido . "<br>";
echo "Edad: " . $edad . " años<br>";

// Productos

$cantidad1 = 2;
$producto1 = "Carpeta";
$precio1 = 250;

$cantidad2 = 1;
$producto2 = "Marcadores";
$precio2 = 325;

$cantidad3 = 3;
$producto3 = "Libreta de dibujo";
$precio3 = 143;


// Totales
$total1 = $cantidad1 * $precio1;
$total2 = $cantidad2 * $precio2;
$total3 = $cantidad3 * $precio3;

$subtotal = $total1 + $total2 + $total3;

$descuento = $subtotal * 0.10;

$total = $subtotal - $descuento;

$pago = 1500;

$cambio = $pago - $total;

echo "<h2>PRODUCTOS</h2>";

echo $cantidad1 . " x " . $producto1 . " $" . $precio1 . " $" . $total1 . "<br>";
echo $cantidad2 . " x " . $producto2 . " $" . $precio2 . " $" . $total2 . "<br>";
echo $cantidad3 . " x " . $producto3 . " $" . $precio3 . " $" . $total3 . "<br>";

// Subtotal
$subtotal = $total1 + $total2 + $total3;

echo "<hr>";
echo "Subtotal: $" . $subtotal . "<br>";
echo "Descuento (10%): $" . $descuento . "<br>";
echo "Total: $" . $total . "<br>";

echo "<br>";

echo "Pago: $" . $pago . "<br>";
echo "Cambio: $" . $cambio . "<br>";
echo "<h2>¡Gracias por su compra! =) </h2>";
?>