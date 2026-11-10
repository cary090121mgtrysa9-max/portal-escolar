<?php
# DECLARACIÓN Y USO DE CONSTANTES
const VALOR_PI=3.1416;
echo "Constante: ".VALOR_PI."<br>";
$radio=5.4;
$area=VALOR_PI * $radio ** 2;
echo "Area: ".$area."<br>"; 
echo "<br>";

# ARREGLOS -------------------------
// Ejemplo de un arreglo de tipo escalar

$frutas=["Pera", "Manzana", "Naranja"];
echo "Imprime el arreglo completo: <br>";
print_r($frutas);

echo "<br>";
echo "Impresion de elementos individuales <br>";
echo "Elemento 1: ".$frutas[1]."<br>";
echo "Elemento 2: ".$frutas[2]."<br>";
echo "<br>";

// EJEMPLO DE ARREGLO TIPO ASOCIATIVO

$alumnos=["nombre"=>"Juan",  
         "apellidos"=>"Perez",     
         "edad"=>17];
    print_r($alumnos);
    echo "<br>";
    echo "Impresion de elementos individuales <br>";
    echo "Nombre: ".$alumnos["nombre"]."<br>";
    echo "Apellidos: ".$alumnos["apellidos"]."<br>";
    echo "Edad: ".$alumnos["edad"]."<br>";

    # ARREGLOS DE VARIAS DIMENSIONES
    $tutor=["nombre"=>"Pedro",
            "edad" =>45,
            "cursos"=>["php", "java", "CSharp", "c"]
            ];
        
        echo "<br> Impresion del arreglo completo <br>";
        print_r($tutor);
        echo "<br>";
        echo "<br> Imprime elementos individuales: <br>";
        echo "Nombre: ".$tutor["nombre"]."<br>";
        echo "Edad: ".$tutor["edad"]."<br>";
        echo "Cursos del tutor <br>";
        echo "Curso 1:" .$tutor["cursos"][0]."<br>";
        echo "Curso 2:" .$tutor["cursos"][1]."<br>";
        echo "Curso 3:" .$tutor["cursos"][2]."<br>";
        echo "Curso 4:" .$tutor["cursos"][3]."<br>";

        // Temarioooo

         $temas=[
            "Creacion de bases de datos"=>["Create Data Base", "character set", "Collation"],
            "Creacion de tablas"=>["create table", "alter table", "change"],
            "consultas basicas",
            "consultas de varias tablas"=>["join", "where"],
            "consultas avanzadas"=>["group by", "subconsultas"=>["Anidadas", "correlacionadas"]]
            ];
?>
<>  