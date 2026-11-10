<?php

// SWITCH
echo "<h2>Estructura de selección</h2>";
echo "<h3>Estructura SWITCH</h3>";

$eskuela="CBTIS 217";
switch($eskuela){
    case "CONALEP":
        echo "La escuela es CONALEP";
        break;
    case "CBTIS 217":
        echo "La escuela es CBTIS 217 de Uriangato";
        break;
    case "CECYTE":
        echo "La escuela es CECYTE";
        break;
    default: 
        echo "No coincide ninguna escuela";
        break;
}

// MATCH
echo "<br>";    
echo "<h3> Uso del MATCH</h3>";
$a=5;
$x=1; $y=3; $z=5;

$resultado=match($a){
$x=>"Es igual a la X",
$y=>"Es igual a la Y",
$z=>"Es igual a la Z",
default=> "No coincide ninguno"
};

echo $resultado;

// CICLOS WHILE

echo "<h3>CICLOS While</h3>";
$i=1;
while($i<=10){
    echo "Valor de i: ". $i ."<br>";
    $i++;
}

// USANDO CICLO WHILE, IMPRIME
// LA TABLA DE UN NÚMERO X
// SI X=3 DEBE IMPRIMIR
// 3X1=3... 
$x=3;   
$i=1;

echo "Tabla del".$x."<br>";
 while($i<=10){
    echo $x." x " .$i." = ".($i*$x)."<br>";
    $i++;
}

$x=5;

echo "Tabla del".$x."<br>";

for($i=1; $i<=10; $i++){
    echo $x. " x " .$i. " = ".($i*$x)."<br>";
}

?>