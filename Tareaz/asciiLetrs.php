<? php 
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
?>