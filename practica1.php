<?php
echo "<h1>Mi primera página PHP</h1>";
echo "Hola, estoy aprendiendo PHP.";

// act 1
echo "<h1>Pagina en PHP</h1>";
echo "<h2>Tambien uso HTML</h2>";
echo "<hr>";
echo "<br>En esta pagina aprendo sobre PHP y HTML</br>";

// act 2
$nombre = "Azul"; $edad = 16; 

// OPERACIONES 
$suma = 16 + 5; 
$resta = 20 - 9; 
$mult = 2 * 4; $div = 44/2; 

// RESULTADOS
echo "<br>El resultado de la summa es $suma</br>"; 
echo "<br>El resultado de la resta es $resta</br>"; 
echo "<br>El resultado de la multiplicación es $mult</br>"; 
echo "<br>El resultado de la división es $div</br>";

// act 3

$nombre = "Martin";
$edad = 18;
$promedio = 9.5;
$inscrito = true;

echo "<hr>";
var_dump($nombre);
var_dump($edad);
var_dump($promedio);
var_dump($inscrito);


$nombre = "Azul";
$apellido = "Ferreira";
$edad = 16;

echo "<h3>" . $nombre . " " . $apellido . "</h2>";
echo "Edad: " . $edad . " años";
echo "<hr>";
// act 5

// DATOS
$numero1 = 15;
$numero2 = 4;

// OPERACIONES
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$modulo = $numero1 % $numero2;

// RESULTADOS
echo "<h1>Calculadora</h1>";
echo "<hr>";

echo "<h2>Números</h2>";
echo "Número 1: " . $numero1 . "<br>";
echo "Número 2: " . $numero2 . "<br>";

echo "<h2>Resultados</h2>";
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Módulo: " . $modulo . "<br>";


?>