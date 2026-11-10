<?php
    echo "<h1>Tabla con PHP</h1>";
    $r=10; $c=7;
    echo "<table border='1'>";
    
    for($i=1; $i<=$r; $i++){
        echo "<tr>";
        for($j=1; $j<=$c; $j++){
            echo "<td># #</td>";
        }
    }
    echo "</table>";

        echo "<h1>Tabla con de coordenadas</h1>";
    $r=5; $c=5;
    echo "<table border='1'>";
    //  
    for($i=1; $i<=$r; $i++){
        echo "<tr>";
        for($j=1; $j<=$c; $j++){
            $a=dechex(0);
            $m=dechex(0);
            $r=dechex(255);
            if(strlen($a)<2){ $a="0".$a; };
            if(strlen($m)<2){ $m="0".$m; };
            if(strlen($r)<2){ $r="0".$r; };
            echo "<td bgcolor ='#$a$m$r'># #</td>";
     
            }
    echo "</tr>";
    }
    echo "</table>";
?>
