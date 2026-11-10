<?php
  // HASH password
    echo "<h2> Uso de password_hash</h2>";
    $r=password_hash("Hola mundo", PASSWORD_DEFAULT);
    echo "Resultado: " . $r . "<br>";

    //EJEMPLOS DE FUNCIONES HASH MD5 Y
    // 
    echo"<h1> Función hash </h1>";
    echo"<h1> Texto original: Hola mundo</h1>";
    echo"<h2> Hola mundo con MD5 </h2>";
    echo hash ('md5', "Hola mundo"). "<br>";
    echo "<h2> Hola mundo con SHA1</h2>";
    echo hash('sha1', "Hola mundo"). "<br>";

    //TODOS LOS HASH INCLUIDOS
    echo "<h2>Todos los hash con Hola mundo. </h2>";
    $data="Hola mundo";
    foreach(hash_algos() as $v){
        $r=hash($v, $data);
        echo $v . " - " . $r . " - " . strlen($r) . "<br>";
    }

    //VERFICA SI EL VALOR ES VALOR ALMACENADO ES VALIDO
    if (password_verify("Hola mundo", $r)) {
        echo 'Password is valid';
    }
    else{
        echo "Password invalid!";
    }
  
?>