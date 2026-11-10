<?php
// MANEJO DE CADENAS (STRINGS)
$str="CBTis 217 de uriangato gto.";
echo "<h3>Mayusculas</h3>";
echo strtoupper($str);
echo "<h3>Minúsculas</h3>";
echo strtolower($str);

echo"<br>";

// CONVIERTE UN NUMERO A SE CARACTER ASCII
$n=55;
echo "<h3> Codigo ascii </h3>";
echo "chr de n:" . chr($n);
echo "<br>";
echo "FUNCION ORD: " .ord("&")."<br>";

// CICLO PARA EL CÓDIGO ASCII DEL 30 AL 150
for($i=30; $i<=150; $i++){
    echo $i . "-".chr($i)."<br>";
}

// ACCEDER A LETRAS DE UNA PALABRA
echo "<h3> Letras de una palabra </h3>";
$ciudad="YURIRIA";

echo $ciudad[1]."<br>";
echo $ciudad[2]. "<br>";
$l=strlen($ciudad);

for ($i=0; $i<$l; $i++){
    for ($j=0; $j<$i; $j++){
        echo $ciudad[$j];

    }
    echo $ciudad[$i]. "<br>";
}

?>
<>
