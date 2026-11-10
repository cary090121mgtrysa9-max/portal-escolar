<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </body>
     <h1>  If else </h1>


    <?php
    $edad=17;

    if($edad>=18) {
        echo "es mayor de edad" . $edad;
    }
    else{
        echo "Es menor de edad, callada, timida, inocente y tiene la mirada de" . $edad;
    }

    ?>

    
     <h1>  If else if </h1>
  <?php
    $php=9;
    $web=9;
    $ingles=9;
    $historia=9;

    $prom=($php+$web+$ingles+$historia)/4;

    if ($prom >=10){
        echo "Calificación: Excelente";
    }

    else if ($prom>=9 && $prom<10){
        echo "Calificación: Muy buena";
    }

    else if ($prom>=8 && $prom<9){
        echo "Calificación: Buena";
    }

    else if ($prom>=7 && $prom<8){
        echo "Calificación: Aprobado";
    }

    else if ($prom>=6 && $prom<7){
        echo "Calificación: Suficiente";
    }

    else if ($prom>=5 && $prom<6){
        echo "Calificación: Reprobado";
    }
   ?>
    </html>
  <>